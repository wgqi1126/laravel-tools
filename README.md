# Laravel Tools Set

Laravel 开发工具集。  
主要是为了方便新的项目创建的时候，不用重新拷贝之前项目的一些公共部分。从而从原来积累的基础上快速开发项目。

**目前只适配 Laravel 5.7 版本，不保证其他版本能运行**

**目前只是实验性目的，欢迎添砖加瓦，把轮子整合起来**

## Install

Require this package with composer.

```bash
composer require wgqi1126/laravel-tools
```

## Commands

* `ltools:dev:reset-db`  
重置数据库。执行 `migrate:reset` 删除所有表，然后执行 `migrate` 重新创建表，最后执行 `db:seed` 生成数据。

## TODOs

* 将 laravel-ide-helper 集成进来
* 添加 laravel-debugbar
