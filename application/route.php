<?php

use think\Route;

Route::get('/', function() {
    return '不提供主页, 请根据接口文档访问已提供的API!';
});

Route::get('banners/:id', 'api/v1.Banner/index');



