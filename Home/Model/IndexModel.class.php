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

    public function Lists():array
    {
        $model= Model::getInstance(Conf::getInstance()->all('DBConfig'));
        return $model->doSql('select * from shotblog',null,false);
    }
}