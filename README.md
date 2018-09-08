[![Latest Stable Version](https://poser.pugx.org/pithyone/think-wechat/v/stable)](https://packagist.org/packages/pithyone/think-wechat)
[![Latest Unstable Version](https://poser.pugx.org/pithyone/think-wechat/v/unstable)](https://packagist.org/packages/pithyone/think-wechat)
[![License](https://poser.pugx.org/pithyone/think-wechat/license)](https://packagist.org/packages/pithyone/think-wechat)

# think-wechat

企业微信SDK for ThinkPHP5，基于 [pithyone/wechat](https://github.com/pithyone/wechat)

> 理论上支持 ThinkPHP 5.1.x 所有版本

## 安装

``` bash
composer require pithyone/think-wechat
```

## 配置

1. 创建配置文件

将 `vendor/pithyone/think-wechat/src/config.php` 拷贝至应用配置目录，然后重命名为 `wework.php`

2. 在 `provider.php` 绑定类库

```php
return [
    // ...
    'wework' => \think\WeWork::class,
];
```

## 用法

以获取 access_token 为例：

```php
app('wework')->get('token')->get();
```

使用其他应用时，改变默认设置即可，假设有一个测试应用为 `test`

```php
app('wework', ['test'], true)->get('token')->get();
```

更多用法请参考：https://pithyone.github.io/wechat/

## License

[MIT](https://github.com/pithyone/think-wechat/blob/master/LICENSE)
