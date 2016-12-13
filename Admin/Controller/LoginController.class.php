<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 12/13/2016
 * Time: 1:22 PM
 */
namespace Admin\Controller;
class LoginController
{
    public function sayHi()
    {
        echo 'just say hi';
    }
    function __destruct()
    {
        // TODO: Implement __destruct() method.
        PrintFm($this);
        unset($this);
    }
}