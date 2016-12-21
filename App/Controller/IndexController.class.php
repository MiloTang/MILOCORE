<?php
namespace App\Controller;
use Core\Libs\BaseController;
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
          'javascript'=>$prefix.InUrl('/index/lists/art/javascript.html'),
          'jquery'=>$prefix.InUrl('/index/lists/art/jquery.html'),
          'html'=>$prefix.InUrl('/index/lists/art/html.html'),
          'html5'=>$prefix.InUrl('/index/lists/art/html5.html'),
          'css'=>$prefix.InUrl('/index/css.html'),
          'css3'=>$prefix.InUrl('/index/lists/art/css3.html'),
          'ajax'=>$prefix.InUrl('/index/lists/art/ajax.html'),
          'php'=>$prefix.InUrl('/index/lists/art/php.html')
      );
      $this->assign('url',$url);
      $this->display('index.html');
   }
   public function javascript()
   {
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
}