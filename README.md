# think-wechat

[![StyleCI](https://styleci.io/repos/98778383/shield?branch=master&style=flat)](https://styleci.io/repos/98778383)
[![Latest Stable Version](https://poser.pugx.org/pithyone/think-wechat/v/stable)](https://packagist.org/packages/pithyone/think-wechat)
[![Latest Unstable Version](https://poser.pugx.org/pithyone/think-wechat/v/unstable)](https://packagist.org/packages/pithyone/think-wechat)
[![License](https://poser.pugx.org/pithyone/think-wechat/license)](https://packagist.org/packages/pithyone/think-wechat)

企业微信SDK for ThinkPHP5，基于 [pithyone/wechat](https://github.com/pithyone/wechat)

> 理论上支持 ThinkPHP 5.0.x 所有版本

## Installation

```shell
composer require pithyone/think-wechat
```

## Configuration

将 `vendor/pithyone/think-wechat/src/extra/work_wechat.php` 拷贝至扩展配置目录 `extra` 下

## Usage

```php
<?php

use think\WeChat;

$user = WeChat::agent('contacts')->user;

$user->get('zhangsan'); // 读取成员
```

更多用例请参考：[pithyone/wechat](https://github.com/pithyone/wechat/blob/master/examples/index.md)

## License

MIT
