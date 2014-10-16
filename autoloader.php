<?php
  spl_autoload(function($class) {
    $filename='phpfile/' .$class. ' .main.php';
	if(is_readable($filename)){
			require $filename;
	}
});
?>
