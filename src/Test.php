<?php
namespace joune90\test;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/3
 * Time: 15:24
 */
use yii\base\Component;

class Test extends Component
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

    //获取分组
    public function GetGroup($start = 0, $num = 1)
    {
        $this->getAipHandler();
        return $this->aipNFace->GetGroup($start, $num);
    }

    //获取分组下的所有用户
    public function GetGroupUsers($groupId)
    {
        return $this->aipNFace->GetGroupUsers($groupId);
    }

}
