<?php

class body{
    private $variavel;

    function __construct($variavel){
        $this->variavel = $variavel;
    }

    function __toString(){
        return  '<body> ' . 
                    $this->variavel . 
                '</body>';
    }
}