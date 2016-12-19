<?php
namespace App\Controller;
use Core\Libs\BaseController;
use Core\libs\Route;

class IndexController extends BaseController
{
   public function __construct()
   {
      $this->assign('cssLink1','http://www.tb.com/'.substr(InUrl('App/Common/Static/CSS/myStyle.css'),0,-5));
      $this->assign('title', Route()->getAction());
   }
   public function index()
   {
      $url=array(
          'javascript'=>InUrl('index/javascript.html'),
          'jquery'=>InUrl('index/jquery.html'),
          'html'=>InUrl('index/html.html'),
          'html5'=>InUrl('index/html5.html'),
          'css'=>InUrl('index/css.html'),
          'css3'=>InUrl('index/css3.html'),
          'ajax'=>InUrl('index/ajax.html'),
          'php'=>InUrl('index/php.html')
      );
      $this->assign('url',$url);
      $this->display('index.html');
   }
   public function javascript()
   {
      $this->display('javascript.html');
   }
   public function jquery()
   {
      $this->display('jquery.html');
   }
   public function html()
   {
      $this->display('html.html');
   }
   public function html5()
   {
      $this->display('html5.html');
   }
   public function css()
   {
      $this->display('css.html');
   }
   public function css3()
   {
      $this->display('css3.html');
   }
   public function ajax()
   {
      $this->display('ajax.html');
   }
   public function php()
   {
      $this->display('php.html');
   }
}