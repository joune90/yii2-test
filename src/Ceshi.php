<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/3
 * Time: 15:59
 */
namespace joune\test;
use yii\base\Component;
class Ceshi extends Component
{
    private $aipNFace = null;
    public $access_key = '';
    public $secret_key = '';

    public function init()
    {
        if (null === $this->aipNFace) {
            $this->aipNFace = new AipNFace($this->access_key, $this->secret_key);
        }
        return $this->aipNFace;
    }

}