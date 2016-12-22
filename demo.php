<?php
require 'vendor/autoload.php';
$obj = new \houdunwang\log\Log();
\houdunwang\config\Config::set( 'log.dir', 'storage' );
$obj->init();
$obj->write( '系统错误', \houdunwang\log\Log::ERROR );