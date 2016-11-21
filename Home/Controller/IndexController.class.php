<?php
/**
 * Created by PhpStorm.
 * User: francis and winnie
 * Date: 2016/11/12
 * Time: 23:10
 */
namespace Home\Controller;
use Core\Libs\ValidateCode;
use Core\Libs\BaseController;

class IndexController extends BaseController
{
    public function index()
    {

        $v=ValidateCode::getInstance();
        //$v->doImg(5);
        echo $v->getCode();
        $arr=array('a'=>'123','b'=>'234');
        $url='/index/verifyCode/abc/abc';
        $url=$this->secret($url);
        $this->assign('data',$url);
        $this->assign('arr',$arr);
        $this->display('index.html');
        PrintFm($this->params());
        echo $this->encrypt('123');
    }
    public function verifyCode()
    {
        $VCode=ValidateCode::getInstance();
        $VCode->doImg(5);
        $_SESSION['ValidateCode']=$VCode->getCode();
    }
}