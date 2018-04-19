<?php
require_once APPPATH.  'traits/ObjectConstructor.php';

class Transit{
    use ObjectConstructor;
    
    private $idTransit;
    private $sourceAdr;
    private $destinationAdr;  //Adr = adres
    private $price;
    private $date;
    
    public function __construct($object = null){
        $this->constructWithArgs($object);
    }
    
    function getIdTransit() {
        return $this->idTransit;
    }

    function setIdTransit($idTransit) {
        $this->idTransit = $idTransit;
    }

        
    function getSourceAdr() {
        return $this->sourceAdr;
    }

    function getDestinationAdr() {
        return $this->destinationAdr;
    }

    function getPrice() {
        return $this->price;
    }

    function getDate() {
        return $this->date;
    }

    function setSourceAdr($sourceAdr) {
        $this->sourceAdr = $sourceAdr;
    }

    function setDestinationAdr($destinationAdr) {
        $this->destinationAdr = $destinationAdr;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setDate($date) {
        $this->date = $date;
    }


}