<?php
/**
 * Created by PhpStorm.
 * User: francis and winnie
 * Date: 2016/11/12
 * Time: 23:10
 */
namespace Home\Controller;
use Core\libs\BaseController;
use Core\libs\Log;

class IndexController extends BaseController
{
    public function index()
    {
        $arr=array('a'=>'123','b'=>'234');
        $this->assign('data','hello view');
        $this->assign('arr',$arr);
        $this->display('index.html');
    }
}