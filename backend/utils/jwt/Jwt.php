<?php

namespace app\utils\jwt;

use app\utils\base\Base;
use Lcobucci\JWT\Token;
use yii\base\BaseObject;
use Yii;

class Jwt extends Base
{
    /**
     * 加密算法
     *
     * @var string
     */
    public  $alg = 'HS256';

    /**
     * 有效时间
     *
     * @var int
     */
    public  $expire = 86400;

    /**
     * 要加密的数据 eg.
     * ```
     * ['uid' => 10, 'role' => '超级管理员']
     * ```
     *
     * @var array
     */
    public  $claims = [];

    /**
     * @var string
     */
    public  $identifiedBy = 'n1Yco9ClURcwLPa5';

    /**
     * Jwt constructor.
     *
     * @param array $config
     */
    public function __construct($config = [])
    {
        parent::__construct($config);
    }

    /**
     * @return Token
     */
    public function generateToken(): Token
    {
        $jwt    = Yii::$app->jwt;
        $singer = $jwt->getSigner('HS256');
        $key    = $jwt->getKey();
        $time   = time();
        $model  = $jwt->getBuilder()
            ->identifiedBy($this->identifiedBy, true)
            ->issuedAt($time)
            ->expiresAt($time + intval($this->expire));
        foreach ($this->claims as $k => $v) {
            $model = $model->withClaim($k, $v);
        }
        return $model->getToken($singer, $key);
    }

}
