<?php
class head{
    private $variavel;

    function __construct($lang, $variavel){
        $this->variavel = $variavel;
    }

    function __toString(){
        return  '<head>' . 
                    $this->variavel .
                '</head>';
    }
}