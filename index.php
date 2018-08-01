<?php
/*
*@content 接口文件
*@time 2018/7/4
*@author zh
*                           _ooOoo_
*                          o8888888o
*                          88" . "88
*                          (| -_- |)
*                          O\  =  /O
*                       ____/`---'\____
*                     .'  \\|     |//  `.
*                    /  \\|||  :  |||//  \
*                   /  _||||| -:- |||||-  \
*                   |   | \\\  -  /// |   |
*                   | \_|  ''\---/''  |   |
*                   \  .-\__  `-`  ___/-. /
*                 ___`. .'  /--.--\  `. . __
*              ."" '<  `.___\_<|>_/___.'  >'"".
*             | | :  `- \`.;`\ _ /`;.`/ - ` : | |
*             \  \ `-.   \_ __\ /__ _/   .-` /  /
*        ======`-.____`-.___\_____/___.-`____.-'======
*                           `=---='
*        ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
*           佛祖保佑       永无BUG    但愿佛祖不入魔
*
*             当我写下这个的时候，只有上帝和我能够看懂
*             现在，只有上帝能看懂了
*/
//定义应用目录
define('APP_PATH', __DIR__."/");

// echo APP_PATH;
//定义debug是否开启
define("DEBUG", true);
// var_dump(DEBUG);

// var_dump($config);
//引入函数文件
include APP_PATH.'vender/framework/function.php';

// $db = C('db');
// var_dump($db);die;
//引入应用目录
include './vender/Application.php';

$obj = new vender\Application();
echo $obj->run();
// var_dump($obj);

?>