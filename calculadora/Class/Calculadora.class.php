<?php


class Calculadora {

    private $value;


    public function __toString() {
        $html = "<form method='post' class='container calculadora' action='index.php'> \n";
        $html .= new Tela($this->value);
        $html .= "<div class='row'> \n";
        $html .= new Botao("num", "1");
        $html .= new Botao("num", "2");
        $html .= new Botao("num", "3");
        $html .= new Botao("op", "-");
        $html .= "</div> \n";
        
        $html .= "<div class='row'> \n";
        $html .= new Botao("num", "4");
        $html .= new Botao("num", "5");
        $html .= new Botao("num", "6");
        $html .= new Botao("op", "+");     
        $html .= "</div> \n";

        $html .= "<div class='row'> \n";
        $html .= new Botao("num", "7");
        $html .= new Botao("num", "8");
        $html .= new Botao("num", "9");
        $html .= new Botao("op", "x");
        $html .= "</div> \n";

        $html .= "<div class='row'> \n";
        $html .= new Botao("num", "0");
        $html .= new Botao("op", "CE");
        $html .= new Botao("op", "/");
        $html .= new Botao("op", "=");  
        $html .= "</div> \n";
        $html .= "</form> \n";
        
		return $html;
	}



	public function __construct() {
        if(!isset($_SESSION['NUM'])){
            $_SESSION['NUM'] = 0;
            $_SESSION['RESULTADO'] = 0;
            $_SESSION['OPERADOR'] = '';
        }
        if(isset($_POST['num'])){
            if($_SESSION['NUM'] == 0){
                $_SESSION['NUM'] = $_POST['num'];
            } else {
                $_SESSION['NUM'] = $_SESSION['NUM'] . $_POST['num'];
            }
        }
        if(isset($_POST['op'])){
            switch ($_POST['op']){
                case 'CE':
                    $_SESSION['RESULTADO'] = 0;
                    $_SESSION['OPERADOR'] = '';
                    $_SESSION['NUM'] = 0;
                    break;
                case '=':
                    $this->realizaCalculo();
                    $_SESSION['NUM'] = $_SESSION['RESULTADO'];
                    $_SESSION['RESULTADO'] = 0;
                    break;
                case '+':
                    if($_SESSION['OPERADOR'] != ''){
                        $this->realizaCalculo();
                    }
                    $_SESSION['OPERADOR'] = '+';
                    $_SESSION['RESULTADO'] = $_SESSION['NUM'];
                    $_SESSION['NUM'] = 0;
                    break;
                case '-':
                    if($_SESSION['OPERADOR'] != ''){
                        $this->realizaCalculo();
                    }
                    $_SESSION['OPERADOR'] = '-';
                    $_SESSION['RESULTADO'] = $_SESSION['NUM'];
                    $_SESSION['NUM'] = 0;
                    break;
                case 'x':
                    if($_SESSION['OPERADOR'] != ''){
                        $this->realizaCalculo();
                    }
                    $_SESSION['OPERADOR'] = 'x';
                    $_SESSION['RESULTADO'] = $_SESSION['NUM'];
                    $_SESSION['NUM'] = 0;
                    break;
                case '/':
                    if($_SESSION['OPERADOR'] != ''){
                        $this->realizaCalculo();
                    }
                    $_SESSION['OPERADOR'] = '/';
                    $_SESSION['RESULTADO'] = $_SESSION['NUM'];
                    $_SESSION['NUM'] = 0;
                    break;
            }
        }
        $this->value = ($_SESSION['NUM'] <> 0 ? $_SESSION['NUM'] : $_SESSION['RESULTADO']);
	}

    private function realizaCalculo(){
        switch ($_SESSION['OPERADOR']){
            case '+':
                $_SESSION['RESULTADO'] = $_SESSION['RESULTADO'] + $_SESSION['NUM'];
                break;
            case '-':
                $_SESSION['RESULTADO'] = $_SESSION['RESULTADO'] - $_SESSION['NUM'];
                break;
            case 'x':
                $_SESSION['RESULTADO'] = $_SESSION['RESULTADO'] * $_SESSION['NUM'];
                break;
            case '/':
                $_SESSION['RESULTADO'] = floatval($_SESSION['RESULTADO']) / floatval($_SESSION['NUM']);
                break;
        }
        $_SESSION['OPERADOR'] = '';
        $_SESSION['NUM'] = 0;
    }


}