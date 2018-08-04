<?php
spl_autoload_register(function ($className){
	$file = $_SERVER['DOCUMENT_ROOT'] . '/example/' . '$className' . '.php';
	if (file_exists($file)) {
		echo $file;
		include "$file";
	} else{
		echo 'нет такого файла';
		echo $file;
	}

});

$hzh=new Product('hzrt', ' ');
echo $hzh->name;
echo $hzh->currency; 
