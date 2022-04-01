
<?php
require('autoload.php');
session_start();

$head = new Head("Calculadora PHP POO");
$head->addProp(new Meta("viewport", "width=device-width, initial-scale=1"));

$body = new Body();
$body->addProp(new Calculadora());

echo (new Html("pt-br", $head, $body));

?>
</body>
</html>