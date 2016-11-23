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
    static public function all(string $file):array
    {
        if(isset(self::$conf[$file]))
        {
            return self::$conf[$file];
        }
        else
        {
            $path = CORE_PATH.'/Common/Config/'.$file.'.php';
            if (is_file($path))
            {
                $conf = require_once $path;
                self::$conf[$file] = $conf;
                return $conf;
            }
            else
            {
                GetError('配置文件不存在'.$file);
                return null;
            }

        }
    }
}