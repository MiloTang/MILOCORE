<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 11/22/2016
 * Time: 6:26 PM
 */
namespace Home\Controller;
use Core\Libs\Api;
use Core\libs\BaseController;
use Home\Model\IndexModel;

class ApiController extends BaseController
{
public function api()
{
    $model=new IndexModel();
    $api=Api::getInstance();

    $arr=array(
        'id'=>1,
        'name'=>'huhansan',
        'type'=>array(1,2,3,4),
        'test'=>array(1,2,56,22=>array(123,'milo'))
    );
    $api->getApi(200,'d',$model->Lists(),$this->params()['type']);
    //$api->getXml(200,'diu',$model->Lists());
}

}