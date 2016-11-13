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
    public function __construct()
    {

    }
    public function assign(string $name,$data)
    {
        $this->data[$name]=$data;
    }
    public function display($view)
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
    public function filterParams(array $params)
    {

    }
    public function filterParam(string $param)
    {

    }
}