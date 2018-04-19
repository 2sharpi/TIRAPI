<?php

abstract class MY_Controller extends CI_Controller{
    
    protected function showApiResult($httpCode,array $arguments)
    {
        $this->output->set_content_type('application/json');
        $this->output->set_status_header($httpCode);
        $this->output->set_output(json_encode($arguments));
    }   
}