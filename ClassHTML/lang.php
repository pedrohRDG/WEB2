<?php
class html{
    private $lang;
    private $variavel;

    function __construct($lang, $variavel){
        $this->lang = $lang;
        $this->variavel = $variavel;
    }

    function __toString(){
        return '<html lang="' . $this->lang . '">' .
                $this->variavel . 
                '</html>';
    }

}