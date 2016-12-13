<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 12/9/2016
 * Time: 10:53 AM
 */
namespace Admin\Controller;

use Core\libs\BaseController;

class IndexController extends BaseController
{
    public function index()
    {
        $this->display('index.php');
    }
    public function sayHi()
    {
        echo 'just say hi';
    }
}