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
        $arr=array('a'=>'123','b'=>'234','c'=>'789','d'=>'index');
        $url='/index/doFuck/abc/abc';
<<<<<<< HEAD
        echo $url{0};
        $this->assign('url',InUrl($url));
        $this->assign('arr',$arr);
        $this->display('index.html');
=======
        echo '<hr>'.'index';
        $this->assign('url',InUrl($url));
        $this->assign('arr',$arr);
        $this->display('index.php');
        echo '</br>';
        PrintFm($this->params());
        echo '</br>';
        var_dump(\PDO::getAvailableDrivers());
        $pattern='/[0-9]{2}/';
        echo '<hr>';
        $subject='psadsa213l22l2p';
        $macth1=$macth2=array();
        echo preg_match($pattern,$subject,$macth1);
        echo '<hr>';
        echo preg_match_all($pattern,$subject,$macth2);
        echo '<hr>';
        PrintFm($macth1);
        echo '<hr>';
        PrintFm($macth2);
        echo '<hr>';
        $subject=array('psads','a213','l22l2p');
        $replacement='PPP';
        PrintFm(preg_filter($pattern,$replacement,$subject));//只保留被替换的数组字符串
        echo '<hr>';
        PrintFm(preg_replace($pattern,$replacement,$subject));
        echo '<hr>';
        PrintFm(preg_grep($pattern,$subject));
        echo '<hr>';
        $subject='psad{sa}2[13b]22b2p';
        PrintFm(preg_split($pattern,$subject));
        echo '<hr>';
        PrintFm(preg_quote($subject));
        echo '<hr>';
        $subject='psad{sa}2[13b]22b2p月';
        $pattern='/[\{\[p]sa/';
        echo preg_match_all($pattern,$subject);
        echo '<hr>';
        $pattern='/[^0-9A-Za-z]/';
        echo preg_match_all($pattern,$subject);
        echo '<hr>';
        $pattern='/milo.+2016/';
        $subject='milo_201620162016';
        preg_match_all($pattern,$subject,$macth1);
        PrintFm($macth1);
        $pattern='/milo.+2016/U';
        preg_match_all($pattern,$subject,$macth1);
        PrintFm($macth1);
        $pattern='/^\w+(\.\w+)*@\w+(\.\w+)+$/';
        $subject='dasc@dsd.co';
        echo preg_match_all($pattern,$subject,$macth2);
        PrintFm($macth2);
        $backtrace = debug_backtrace();
        PrintFm($backtrace);

>>>>>>> 1fc33571e78ddd69fbd575a0610ca315d9ec4116
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
        $arr=array('a'=>'123','b'=>'doFuck');
        $url='/index/buffer/abc/abc';
        $this->assign('url',InUrl($url));
        $this->assign('arr',$arr);
        $this->display('index.php');
    }
    public function buffer()
    {
        $arr=array('a'=>'123','b'=>'buffer');
        $url='/index/index/abc/abc';
        $this->assign('url',InUrl($url));
        $this->assign('arr',$arr);
        $this->display('index.php');
    }
}