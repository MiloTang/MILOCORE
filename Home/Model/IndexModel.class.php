<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 11/22/2016
 * Time: 5:24 PM
 */
namespace Home\Model;
defined('CORE_PATH') or exit();
use Core\libs\Conf;
use Core\libs\Model;

class IndexModel
{

    public function lists():array
    {
        $conf=Conf()->conf('DBConfig');
        $model= Model($conf);
        return $model->doSql('select * from shotblog',null,false);
    }
    public function one():array
    {

        $model=Model::getInstance();
        $parms=array(':blogid'=>1);
        return $model->doSql('select * from shotblog where blogid=:blogid',$parms,false);
    }
}