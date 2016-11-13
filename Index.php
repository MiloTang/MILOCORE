<?php
/**
 * Created by PhpStorm.
 * User: Milo
 * Date: 2016/11/12
 * Time: 20:26
 */
if(version_compare(PHP_VERSION,'7.0.0','<'))  die('require PHP > 7.0.0 !');
define('DIR',__DIR__);
define('APP_PATH',DIR.'/Home/');
define('CORE_PATH',DIR.'/Core/');
define('DEBUG',true);
require CORE_PATH . 'MiloCore.class.php';
\Core\MiloCore::run();





