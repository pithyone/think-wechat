# think-wechat

企业微信SDK for ThinkPHP5，基于[pithyone/wechat](https://github.com/pithyone/wechat)

## 安装

```shell
composer require pithyone/think-wechat
```

## 配置

将 `vendor/pithyone/think-wechat/src/config.php` 

拷贝到

应用配置目录或者模块配置目录下面 `extra` 子目录下

并将文件名改成 `wechat.php`

## 使用

> 理论上支持 ThinkPHP 5.0.x 所有版本

以读取成员信息为例：

```php
<?php

use think\WeChat;

$user = WeChat::agent('test')->user;

$user->get($userid);

// ...
```

更多 SDK 的具体使用请参考：[pithyone/wechat](https://github.com/pithyone/wechat)

## License

MIT