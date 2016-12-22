<?php
require 'vendor/autoload.php';
$obj = new \houdunwang\log\Log();
$obj->config( [ 'dir' => 'storage' ] );
$obj->write( '系统错误', \houdunwang\log\Log::ERROR );