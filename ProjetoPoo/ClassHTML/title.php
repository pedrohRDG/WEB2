<?php
class title{
    private $variavel;

    function __construct($variavel){
        $this->variavel = $variavel;
    }

    function __toString(){
        return '<title>' . $this->variavel . '</title>';
    }
}