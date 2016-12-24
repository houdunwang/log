<?php
require 'vendor/autoload.php';
\houdunwang\log\Log::dir('ab');
\houdunwang\log\Log::write( '系统错误', \houdunwang\log\Log::ERROR );