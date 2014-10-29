<?php

function Loader($className){
		$className = ltrim($className, '\\');
		$namespace='';
		$fileName= '';
		if($lastNsPos = strrpos($className, '\\')) {
			$namespace = substr($className, 0, $lastNsPos);
			$className = substr($className, $lastNsPos + 1);
			$fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
		}
$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

require $fileName;

}


?>
