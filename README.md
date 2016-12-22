# 日志管理

##介绍
网站错误日志处理组件

[TOC]
#开始使用

####安装组件
使用 composer 命令进行安装或下载源代码使用。

```
composer require houdunwang/log
```
> HDPHP 框架已经内置此组件，无需要安装

####创建对象
```
$obj = new \houdunwang\log\Log();
```

####配置
以下代码用一设置日志存储目录

```
$obj->config( [ 'dir' => 'storage' ] );
```

####写入日志
执行以下方法将直接写入日志到文件中。

```
$obj->write('系统错误',\houdunwang\log\Log::ERROR);
//参数说明: a: 错误内容  b:错误等级
```

####记录日志
记录日志会在请求结束时自动加入文件中

```
$obj->record('系统错误',\houdunwang\log\Log::ERROR);
```