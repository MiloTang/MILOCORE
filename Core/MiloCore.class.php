<?php
/**
 * Created by PhpStorm.
 * User: Milo
 * Date: 2016/11/12
 * Time: 20:39
 */

namespace Core;
defined('CORE_PATH') or exit();
use Core\libs\Route;

class MiloCore
{
    private static $_classMap= array();
    private static function _init()
    {
        self::_define();
        DEBUG?ini_set('display_errors','On'):ini_set('display_errors','Off');
        date_default_timezone_set('Asia/Chongqing');
        $GLOBALS['StartTime'] = microtime(TRUE);
        define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
        require CORE_PATH . 'Common/Function.php';
        if(MEMORY_LIMIT_ON)
        {
            $GLOBALS['StartUseMemory'] = memory_get_usage();
        }
        if(!is_dir(APP_PATH))
        {
            mkdir(APP_PATH, 0777, true);
            $conf= require CORE_PATH.'Common/Config/CatalogConfig.php';
            mkdir(APP_PATH.$conf['MODEL'], 0777, true);
            mkdir(APP_PATH.$conf['VIEW'], 0777, true);
            mkdir(APP_PATH.$conf['CONTROLLER'], 0777, true);
            mkdir(APP_PATH.$conf['COMMON'], 0777, true);
            mkdir(APP_PATH.$conf['RUNNING'], 0777, true);
        }

    }
    public static function run()
    {
        self::_init();
        spl_autoload_register('\Core\MiloCore::_load');
        $route = Route::getInstance();
        $control=$route->getControl();
        $action=$route->getAction();
        $CtrlFile=APP_PATH.'controller/'.$control.'Controller'.EXT;
        $CtrlClass=trim(trim(APP_PATH,DIR),'/').'\Controller\\'.$control.'Controller';
        if (is_file($CtrlFile))
        {
            require_once $CtrlFile;
            $ctrl = new $CtrlClass();
            if (method_exists($ctrl,$action))
            {
                $ctrl->$action();
            }
            else
            {
                GetError($action.' 方法不存在');
            }
        }
        else
        {
            GetError($control.' 控制器不存在');
        }
    }
    private static function _load(string $class) : bool
    {
        if(isset($_classMap[$class]))
        {
            return true;
        }
        else
        {
            $class=str_replace('\\','/',DIR.'/'.$class);
            $file=$class.EXT;
            if(is_file($file))
            {
                require_once $file;
                self::$_classMap[$class]=$class;
                return true;
            }
            else
            {
                GetError('文件不存在 '.$file);
            }
            return false;
        }
    }
    private static function _define()
    {
        defined('APP_PATH') or define('APP_PATH',DIR.'/Home/');
        defined('DEBUG') or define('DEBUG',false);
        defined('URL_SECRET') or define('URL_SECRET',false);
        defined('EXTEND') or define('PUBLIC',DIR.'/Public/');
        define('EXTEND',DIR.'/Extend/');
        define('VENDOR',DIR.'/Vendor/');
        define('EXT','.class.php');
        define('VERSION','1.0.0');
        define('MAGIC_GPC',ini_get('magic_quotes_gpc')?true:false);
    }
    
}