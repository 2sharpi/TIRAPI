<?php


class TransitModel extends CI_Model{
    
    
    public function __construct(){
        parent::__construct();
        $this->load->library('Transit');
        
    }
    
    public function insert(Transit $object){
        $this->db->set($this->returnPropertiesArray($object));
        $result = $this->db->insert('Transit');
        $this->Exceptions->checkForError();
        return $result;
        
        
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