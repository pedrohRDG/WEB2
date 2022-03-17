<?php
class meta{
    private $variavel;
    
    function __construct($variavel){
        $this->variavel = $variavel;
    }

    function __toString(){
        return '<meta ' . $this->variavel . '>';
    }
}