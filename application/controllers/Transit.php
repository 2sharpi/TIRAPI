<?php

class Transit extends CI_Controller{
    
    public function index(){
        $this->load->model('Transit');
        $arguments = new stdClass();
        $arguments->sourceAdr = $this->input->post('source_address');
        $arguments->destinationAdr = $this->input->post('destination_address');
        $arguments->price = $this->input->post('price');
        $arguments->date = $this->input->post('date');
        $TransitObject = new Transit($arguments);
        $this->output->set_content_type('application/json');
        try{
            if($this->Transit->insert($TransitObject)){
                $this->output->set_data(json_encode(array('status' => '200', 'result' => 'ok')));
            } else {
                $this->output->set_data(json_encode(array('status' => '410', 'result' => 'update failed')));
            }
        } catch (Exception $ex) {

        }
    }
}