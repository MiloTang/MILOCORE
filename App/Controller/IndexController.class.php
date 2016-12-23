<?php
namespace App\Controller;
use Core\Libs\BaseController;
use Core\libs\Conf;
use Core\Libs\ImageZh;
use Core\libs\Model;
use Core\Libs\RandomImage;
use Core\libs\Route;
class IndexController extends BaseController
{
   public function __construct()
   {
      $this->assign('cssLink1','http://www.tb.com/'.substr(InUrl('App/Common/Static/CSS/myStyle.css'),0,-5));
   }
   public function index()
   {
      $prefix='http://'.$_SERVER['HTTP_HOST'];
      $url=array(
          'javascript'=>$prefix.InUrl('/index/javascript.html'),
          'jquery'=>$prefix.InUrl('/index/lists/art/jquery.html'),
          'html'=>$prefix.InUrl('/index/lists/art/html.html'),
          'html5'=>$prefix.InUrl('/index/lists/art/html5.html'),
          'css'=>$prefix.InUrl('/index/css.html'),
          'css3'=>$prefix.InUrl('/index/css3.html'),
          'ajax'=>$prefix.InUrl('/index/lists/art/ajax.html'),
          'php'=>$prefix.InUrl('/index/lists/art/php.html'),
          '抽奖'=>$prefix.InUrl('/index/lottery.html')
      );
      $this->assign('url',$url);
      $this->display('index.html');
   }
   public function javascript()
   {
      $this->assign('title',Route()->getAction());
      $this->display('javascript.html');
   }
   public function lists()
   {
      $prefix='http://'.$_SERVER['HTTP_HOST'];
      $url=array(
          'index'=>$prefix.InUrl('/index/index.html')
      );
      $this->assign('title', $this->params()['art']);
      $this->assign('url',$url);
      $this->display('list.html');
   }
   public function css()
   {
      $prefix='http://'.$_SERVER['HTTP_HOST'];
      $url=array(
          'index'=>$prefix.InUrl('/index/index.html')
      );
      $this->assign('title',Route()->getAction());
      $this->assign('url',$url);
      $this->display('css.html');
   }
   public function css3()
   {
      $prefix='http://'.$_SERVER['HTTP_HOST'];
      $url=array(
          'index'=>$prefix.InUrl('/index/index.html')
      );
      $this->assign('title',Route()->getAction());
      $this->assign('url',$url);
      $this->display('css3.html');
   }
   public function lottery()
   {
      $this->display('lottery.html');
   }
   public function newMassage()
   {
      header('Content-Type: text/event-stream');
      header('Cache-Control: no-cache');
      echo 'data: '.'你有新信息'." \n\n";
       flush();
   }
   public static function randomCode()
   {
      $arr=array('法拉利','福特','大众','宝马','莲花','宾利','凯迪拉克','菲亚特','奥迪','劳斯莱斯');
      $img=RandomImage::getInstance();
      $img->doImgZh($arr[mt_rand(0,9)],5);
   }


}