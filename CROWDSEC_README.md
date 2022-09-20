# `crowdsec/magento-symfony-cache`

This fork was created to resolve some composer conflicts arising since Magento 2.4.4.

## Why `crowdsec/magento-symfony-cache` ?

The [Magento  2 `CrowdSec_Bouncer` module](https://github.com/crowdsecurity/cs-magento-bouncer/) depends on the 
[CrowdSec PHP library `crowdsec/bouncer`](https://github.com/crowdsecurity/php-cs-bouncer) that comes with 
`symfony/cache` as dependency (`v5` or `v6`).
Since Magento `2.4.4`, a fresh installation on PHP 8 will lock a `3.0.0` version of `psr/cache`. 
And it will also install a `v2.2.11` version of `web-token/jwt-framework` that locks a `v4.4.45` version of 
`symfony/http-kernel`.


As a `v5` version of `symfony/cache` required `^1.0|^2.0` version of `psr/cache`, and a `v6` version of 
`symfony/cache` conflicts with `symfony/http-kernel` <5.4, it is impossible to require any version of the 
`symfony/cache` package.

That's why we needed to create a fork of `symfony/cache` that we called `crowdsec/magento-symfony-cache`.

The `v1` version of `crowdsec/magento-symfony-cache` only requires some specific `5.x.y` version of `symfony/cache` 
and is only available for PHP < `8.0.2`. 

For PHP >= `8.0.2`, we provide a compatible `v2` version of 
`crowdsec/magento-symfony-cache`.
This `v2` version replaces the specified `5.x.y` version of `symfony/cache` : we use a copy of `5.x.y` files and 
allow `psr/cache` `3.0`. We also copy some `6.0.z` files to have compatible PHP 8 method signatures.

As we replace a specific `5.x.y` version , we have to require this version in the `composer.json` file of 
`crowdsec/bouncer`package too:

```
"require": {
    "php": ...,
    "symfony/config": ...,
    "symfony/cache": "^5.x.y || ^6.a.b",
    "monolog/monolog": ...,
    ...
}
```


