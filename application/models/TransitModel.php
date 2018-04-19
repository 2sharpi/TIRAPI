<?php
require_once APPPATH.  'traits/ObjectConstructor.php';

class TransitModel extends CI_Model{
    use ObjectConstructor;
    
    public function __construct($object){
        parent::__construct();
        $this->load->library('Transit');
        $this->constructWithArgs($object);
    }
    
    public function select(Transit $object){
        
    }
    
    private function returnPropertiesArray($object){
        return array_filter(array(
            'idTransit' => $object->getIdTransit(),
            'sourceAdr' => $object->getSourceAdr(),
            'destinationAdr' => $object->getDestinationAdr(),
            'price' => $object->getPrice(),
            'date' => $object->getDate()
        ));
    }
}