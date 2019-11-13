<?php
/**
 * Created by PhpStorm.
 * User: lmaster
 * Date: 2019/11/13
 * Time: 9:47
 */

/**
 * 自定义辅助函数文件测试函数
 * @return string
 */
function test_helper ()
{
	return 'OK';
}

/**
 * 路由转换函数 由 CSS 类名决定
 * @return mixed
 */
function route_class ()
{
	return str_replace('.' , '-' , Route::currentRouteName());
}