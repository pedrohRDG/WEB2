<?php   
spl_autoload_register(function($className) {
    $file = $_SERVER["DOCUMENT_ROOT"] . '/WEB2/ClassHTML/' . $className . '.class.php';
    
    if (file_exists($file)) {
        require $file;
    }
}); 