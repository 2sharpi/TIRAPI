<?php

class ErrorController extends MY_Controller{
    
    public function __construct(){
        parent::__construct();
        
    }
    
    public function showResourceNotFound(){
        $this->showApiResult(404,array('message' => 'resource not found'));
    }
}