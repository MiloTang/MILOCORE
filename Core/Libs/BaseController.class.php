<?php
/**
 * Created by PhpStorm.
 * User: francis and winnie
 * Date: 2016/11/3
 * Time: 22:45
 */
namespace Core\libs;
defined('CORE_PATH') or exit();
class BaseController
{
    private $data;
    private $class;
    private $function;
    public function __construct()
    {
        $route=Route::getInstance();
        $this->class=$route->getControl();
        $this->function=$route->getAction();
        $this->cacheCheck(CACHE_TIME);
    }
    public function assign(string $name,$data)
    {
        $this->data[$name]=$data;
    }
    public function display(string $view)
    {
        if (CACHE_HTML)
        {
            $this->createHtml($view);
        }
        else
        {
            extract($this->data);
            $file=APP_PATH.'Views/Templates/'.$view;
            if(file_exists($file))
            {
                require_once $file;
            }
            else
            {
                PrintFm($view.' 模板不存在');
            }
        }

    }
    public function params():array
    {
        $params=array();
        if($_SERVER['REQUEST_METHOD']=='GET')
        {
            $route=Route::getInstance();
            return $params=$route->getParams();

        }
        elseif($_SERVER['REQUEST_METHOD']=='POST')
        {
            return $params=$_POST;
        }
        if(MAGIC_GPC)
        {
            return $this->filterGPCParams($params);
        }
        else
        {
            return $this->filterParams($params);
        }

    }
    private function filterParams(array $params):array
    {
        foreach ($params as $key=>$value)
        {
            if(is_string($value))
            {
                $params[$key]=addslashes(strip_tags(htmlentities($value,ENT_QUOTES)));

            }
            elseif(is_array($value))
            {
                $params[$key]=$this->filterParams($value);
            }
        }
        return $params;
    }
    private function filterGPCParams(array $params):array
    {
        foreach ($params as $key=>$value)
        {
            if(is_string($value))
            {
                $params[$key]=strip_tags(htmlentities($value,ENT_QUOTES));
            }
            elseif(is_array($value))
            {
                $params[$key]=$this->filterGPCParams($value);
            }
        }
        return $params;
    }
    private function createHtml(string $view)
    {
        $FName=md5($this->class.$this->function);
        $cacheFile=APP_PATH.'Views/Cache/'.$FName.'.html';
        $file=APP_PATH.'Views/Templates/'.$view;
        extract($this->data);
        if(file_exists($file))
        {
            ob_start();
            require_once $file;
            $contents = ob_get_contents();
            file_put_contents($cacheFile,$contents);
            ob_end_flush();
        }
        else
        {
            GetError($view.' 模板不存在');
        }
    }
    public function cacheCheck(int $cacheTime=200)
    {
        if(CACHE_HTML)
        {
            $FName=md5($this->class.$this->function);
            $cacheFile=APP_PATH.'Views/Cache/'.$FName.'.html';
            if (is_file($cacheFile))
            {
                $aTime=fileatime($cacheFile);
                if ((time()-$aTime)>$cacheTime)
                {
                    unlink($cacheFile);
                }
                else
                {
                    require_once $cacheFile;
                    exit();
                }
            }
        }
    }
}