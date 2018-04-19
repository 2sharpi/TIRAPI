<?php


class TransitModel extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
        $this->load->library('Transit');
        
    }
    
    public function insert(Transit $object){
        return $this->db->insert('Transit',object);
        
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