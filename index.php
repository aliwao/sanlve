<?php
/**
 *  index.php SANLVE 入口
 *
 * @copyright			(C) 2016-2017 SANLVE
 * @license				http://www.contents.cn/license/
 * @lastmodify			2010-6-1
 */
 //SANLVE根目录

define('SL_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

include SL_PATH.'/contents/base.php';

pc_base::creat_app();

?>