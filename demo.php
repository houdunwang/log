<?php
require 'vendor/autoload.php';
$obj = new \houdunwang\log\Log();
$obj->dir('storage');
$obj->write('系统错误',\houdunwang\log\Log::ERROR);