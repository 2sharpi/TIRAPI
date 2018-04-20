<?php

class TransitController extends MY_Controller {

    private $statusCode;
    private $resultMessage;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        try {
            $this->load->model('TransitModel');
            $transitObject = new Transit();
            $transitObject->setSourceAdr($this->input->post('source_address'));
            $transitObject->setDestinationAdr($this->input->post('destination_address'));
            $transitObject->setPrice($this->input->post('price'));
            $transitObject->setDate($this->input->post('date'));
            try {
                if ($this->TransitModel->insert($transitObject)) {
                    $this->statusCode = 200;
                    $this->resultMessage = array('message' => 'insert OK');
                    //$this->output->set_output(json_encode(array('status' => '200', 'result' => 'ok')));
                } else {
                    $this->statusCode = 410;
                    $this->resultMessage = array('message' => 'Update failed!');
                    //$this->output->set_output(json_encode(array('status' => '410', 'result' => 'update failed')));
                }
            } catch (Exception $ex) {
                $this->statusCode = 410;
                $this->resultMessage = array('message' => 'Database exception:'.$ex->getMessage(),'Error_Code' => $ex->getCode());
            }
        } catch (Exception $ex) {
            $this->statusCode = 410;
            $this->resultMessage = array('message' => $ex->getMessage());
        } finally {
            $this->showApiResult($this->statusCode, $this->resultMessage);
        }
    }

}
