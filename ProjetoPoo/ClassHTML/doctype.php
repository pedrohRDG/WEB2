<?php

class doctype{
    private $variavel;

    function __construct(){
        $this->variavel = "<!DOCTYPE html>";
    }

    function __toString(){
        return $this->variavel; 
    }
}