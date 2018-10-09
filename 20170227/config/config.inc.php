<?php
if (!defined('SITE_PATH')) exit();
return array(
    // 数据库常用配置
    'DB_TYPE'       => 'mysql',       // 数据库类型

    'DB_HOST'   => '127.0.0.1', //服务器地址
    'DB_NAME'   => 'v20170227', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'b8f2c706cd',  // 密码

    'DB_PORT'       => 3306,        // 数据库端口
    'DB_PREFIX'     => 'ts_',// 数据库表前缀（因为漫游的原因，数据库表前缀必须写在本文件）
    'DB_CHARSET'    => 'utf8',      // 数据库编码
    'SECURE_CODE'   => '2353955a7c8910f67643232',  // 数据加密密钥
    'COOKIE_PREFIX' => 'TS4__',      // # cookie

    'exchange_type' => 5,  //智播积分兑换比例 20161030 bs
);
