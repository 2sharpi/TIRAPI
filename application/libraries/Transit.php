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
        if($sourceAdr == null){
            throw new Exception('Transit::sourceAdr cannot be null');
        }
        $this->sourceAdr = $sourceAdr;
    }

    function setDestinationAdr($destinationAdr) {
        if($destinationAdr == null){
            throw new Exception('Transit::destinationAdr cannot be null');
        }
        $this->destinationAdr = $destinationAdr;
    }

    function setPrice($price) {
        if($price == null){
            throw new Exception('Transit::price cannot be null');
        }
        $this->price = $price;
    }

    function setDate($date) {
        if($date == null){
            throw new Exception('Transit::date cannot be null');
        }
        $this->date = $date;
    }


}