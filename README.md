# think-wechat

企业微信SDK for ThinkPHP5，基于[pithyone/wechat](https://github.com/pithyone/wechat)

## 安装

```shell
composer require pithyone/think-wechat
```

## 配置

将 vendor/pithyone/think-wechat/src/config.php 拷贝到应用配置目录或者模块配置目录下面extra子目录下，并将文件名改成wechat.php。

## 用法

```php
<?php

use think\WeChat;

$user = WeChat::agent('test')->user;

$user->get($userid);

// ...
```

> 其他API接口用法同理

## License

MIT