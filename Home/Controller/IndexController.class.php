<?php
/**
 * Created by PhpStorm.
 * User: francis and winnie
 * Date: 2016/11/12
 * Time: 23:10
 */
namespace Home\Controller;
use Core\libs\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        echo ((htmlspecialchars('\aa\aaaaaaa\\aasdd.sd<a href="IndexController.class.php">55</a>a>e34530954325@!#@#$#$%$#^')));
        $arr=array('a'=>'123','b'=>'234');
        $this->assign('data','hello view');
        $this->assign('arr',$arr);
        $this->display('index.html');
        PrintFm($this->params());
    }
}