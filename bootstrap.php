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

$aContext = array('http' => array('proxy' => 'tcp://devcasimiro.local:3128', // This needs to be the server and the port of the NTLM Authentication Proxy Server.
	'request_fulluri' => True,
    ),
);
$cxContext = stream_context_create($aContext);

define('PROXY',$cxContext);

spl_autoload_register(function($className){
    require_once str_replace(array('\\','_'),'/',$className).'.php';
});