<?php
new finalClass();

function __autoload($className){
    $filename = 'class_'.$className.".php";
    $file_path = __DIR__.DIRECTORY_SEPARATOR."oop".DIRECTORY_SEPARATOR."classes".DIRECTORY_SEPARATOR.$filename
    if (file_exists($file_path)){
        require_once $file_path;
    }

}