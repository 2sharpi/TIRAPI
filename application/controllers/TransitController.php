<?php

class TransitController extends CI_Controller{
    
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
                $this->output->set_output(json_encode(array('status' => '200', 'result' => 'ok')));
            } else {
                $this->output->set_output(json_encode(array('status' => '410', 'result' => 'update failed')));
            }
        } catch (Exception $ex) {
            $this->output->set_output(json_encode(array('status' => '410', 'result' => 'database exception!')));
        }
    }
}