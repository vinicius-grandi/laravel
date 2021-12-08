<?php

namespace App\Classes;

class Tools {
    public function printData($data) 
    {
        if(is_array($data) || is_object($data)) {
            print_r($data);
        } else {
            echo $data;
        }
    }
}