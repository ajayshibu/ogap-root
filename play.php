<?php echo('<h1>This is the landing Page of O-Gap</h1>');

define('__ROOT__',dirname(__FILE__));

$index = file_get_contents(__ROOT__.'/projects/ogap-template/index.html');

echo($index);
 ?>

