<?php

class TransitController extends CI_Controller{
    
    private $statusCode;
    private $resultMessage;
    
    public function index(){
        $this->load->model('TransitModel');
        $arguments = new stdClass();
        $arguments->sourceAdr = $this->input->post('source_address');
        $arguments->destinationAdr = $this->input->post('destination_address');
        $arguments->price = $this->input->post('price');
        $arguments->date = $this->input->post('date');
        $TransitObject = new Transit($arguments);
        $this->output->set_content_type('application/json');
        try{
            if($this->TransitModel->insert($TransitObject)){
                $this->statusCode = 200;
                $this->resultMessage('insert OK');
                //$this->output->set_output(json_encode(array('status' => '200', 'result' => 'ok')));
            } else {
                $this->statusCode = 410;
                $this->resultMessage('update failed');
                //$this->output->set_output(json_encode(array('status' => '410', 'result' => 'update failed')));
            }
        } catch (Exception $ex) {
            $this->statusCode = 410;
            $this->resultMessage = 'Database exception: Code:'.$ex->getCode().' Message:'.$ex->getMessage();
        } finally {
            $this->output->set_output(json_encode(array('status' => $this->statusCode, 'result' => $this->resultMessage)));
        }
    }
}