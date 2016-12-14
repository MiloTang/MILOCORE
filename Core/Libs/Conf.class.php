<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 11/1/2016
 * Time: 5:27 PM
 */
namespace Core\libs;
defined('CORE_PATH') or exit();
class Conf
{
    private static $conf;
    private static $_instance;
    private function __construct()
    {

    }
    public static  function getInstance()
    {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    private function __clone()
    {

    }
    static public function conf(string $name):array
    {
        if(isset(self::$conf[$name]))
        {
            return self::$conf[$name];
        }
        else
        {
            $file = WEB_PATH.'/Common/Config/'.$name.'.php';
            if (is_file($file))
            {
                $conf = require_once $file.'';
                self::$conf[$name] = $conf;
                return $conf;
            }
            else
            {
                $file = CORE_PATH.'/Common/Config/'.$name.'.php';
                if (is_file($file))
                {
                    $conf = require_once $file.'';
                    self::$conf[$name] = $conf;
                    return $conf;
                }
                else
                {
                    GetError('配置文件不存在'.$name);
                    return null;
                }
            }
        }
    }
}