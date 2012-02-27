<?php

$applicationPath = dirname(__FILE__).'/application/';

$vendorPath = dirname(__FILE__).'/vendor/';

set_include_path(get_include_path() . PATH_SEPARATOR . $applicationPath . PATH_SEPARATOR . $vendorPath);

define("REPOS_PATH","/usr/share/pm");

$value = true;

if(!is_dir(REPOS_PATH)){
    $value = @mkdir(REPOS_PATH);
}
if(!$value){
    die("\nPlease, run ./pm readmeFirst\n");
}

spl_autoload_register(function($className){
    require_once str_replace(array('\\','_'),'/',$className).'.php';
});