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
    private function __construct()
    {
    }
    private function __clone()
    {

    }
    private static function _init()
    {
        self::_define();
        self::_path();
        DEBUG?ini_set('display_errors','On'):ini_set('display_errors','Off');
        date_default_timezone_set('Asia/Chongqing');
        $GLOBALS['StartTime'] = microtime(TRUE);
        define('MEMORY_LIMIT_ON',function_exists('memory_get_usage'));
        require CORE_PATH . 'Common/Function.php';
        if(MEMORY_LIMIT_ON)
        {
            $GLOBALS['StartUseMemory'] = memory_get_usage();
        }
        if(!is_dir(WEB_PATH))
        {
            mkdir(WEB_PATH, 0777, true);
            $conf= require CORE_PATH.'Common/Config/CatalogConfig.php';
            mkdir(WEB_PATH.$conf['MODEL'], 0777, true);
            mkdir(WEB_PATH.$conf['VIEW'], 0777, true);
            mkdir(WEB_PATH.$conf['CONTROLLER'], 0777, true);
            mkdir(WEB_PATH.$conf['COMMON'], 0777, true);
            mkdir(WEB_PATH.$conf['RUNNING'], 0777, true);
        }
    }
    public static function run()
    {
        self::_init();
        spl_autoload_register('\Core\MiloCore::_load');
        $route = Route::getInstance();
        $control=$route->getControl();
        $action=$route->getAction();
        $CtrlFile=WEB_PATH.'controller/'.$control.'Controller'.EXT;
        $CtrlClass=trim(trim(WEB_PATH,DIR),'/').'\Controller\\'.$control.'Controller';
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
        defined('EXTEND') or define('EXTEND',DIR.'/Extend/');
        defined('VENDOR') or define('VENDOR',DIR.'/Vendor/');
        defined('EXT') or define('EXT','.class.php');
        defined('CACHE_HTML') or define('CACHE_HTML',false);
        defined('CACHE_TIME') or define('CACHE_TIME',200);
        defined('ADMIN_SLD_NAME') or define('ADMIN_SLD_NAME',NULL);
        define('VERSION','1.0.0');
        define('MAGIC_GPC',ini_get('magic_quotes_gpc')?true:false);
        $SLD=explode('.',$_SERVER['HTTP_HOST'])[0];
        if($SLD!='localhost'&&$SLD!='127'&&strtolower($SLD)==strtolower(ADMIN_SLD_NAME)&&ADMIN_SLD_NAME!=NULL)
        {
            define('IS_ADMIN',true);
        }
        defined('IS_ADMIN') or define('IS_ADMIN',false);
    }
    private static function _path()
    {


        if (IS_ADMIN)
        {
            define('WEB_PATH',DIR.'/'.ADMIN_SLD_NAME.'/');
        }
        else
        {
            define('WEB_PATH',APP_PATH);
        }
    }
    
}