<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

trait ObjectConstructor{
    public function constructWithArgs($object = null){
        if ($object != null) {
            foreach ($this as $name => $value) {
                if (property_exists($object, $name)) {
                    $this->$name = $object->$name;
                }
            }
        }
    }
}

