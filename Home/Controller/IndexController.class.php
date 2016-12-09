<?php
/**
 * Created by PhpStorm.
 * User: francis and winnie
 * Date: 2016/11/12
 * Time: 23:10
 */
namespace Home\Controller;
use Core\Libs\Api;
use Core\libs\Conf;
use Core\libs\Model;
use Core\Libs\ValidateCode;
use Core\Libs\BaseController;
use Home\Model\IndexModel;

session_start();
class IndexController extends BaseController
{
    public function index()
    {
        $arr=array('a'=>'123','b'=>'234');
        $url='/index/doFuck/abc/abc';
        echo $url{0};
        $this->assign('url',InUrl($url));
        $this->assign('arr',$arr);
        $this->display('index.html');
    }
    public static function verifyCode()
    {

        $VCode=ValidateCode::getInstance();
        $VCode->doImg(5);
        $_SESSION['code']=$VCode->getCode();
    }
    public function not()
    {
        echo 'dir';
    }
    public function doFuck()
    {
        $arr=array('a'=>'123','b'=>'234');
        $url='/index/index/abc/abc';
        $this->assign('url',InUrl($url));
        $this->assign('arr',$arr);
        $this->display('index.html');
    }
}