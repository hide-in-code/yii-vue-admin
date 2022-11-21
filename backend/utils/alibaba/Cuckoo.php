<?php

namespace app\utils\alibaba;

use app\utils\general\PlatformAppInterface;
use yii\base\BaseObject;

/**
 * Cuckoo 阿里巴巴开房平台应用名称 中文名称 布谷鸟
 */
class Cuckoo extends BaseApp
{

    /**
     * 应用的 App Key
     *
     * @see https://open.1688.com/doc/guide.htm
     * @var string
     */
    public string $client_id = '1111';

    /**
     * 应用秘钥 App Secret
     *
     * @see https://open.1688.com/doc/guide.htm
     * @var string
     */
    public string $app_secret = 'Abshfsdhjf123123';

    /**
     * @var string 参数标识当前授权的站点，直接填写1688
     */
    public string $site = '1688';

    /**
     * 授权登录后重定向url
     *
     * @var string
     */
    public string $redirect_url = 'http://fly.com/auth';

    /**
     * 自定义参数
     *
     * @var string
     */
    public string $state = 'code123';

}