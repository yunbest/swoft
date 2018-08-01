<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Pool;

use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Pool;
use App\Pool\Config\UserPoolConfig;
use Swoft\Rpc\Client\Pool\ServicePool;

/**
 * the pool of user service
 *
 * @Pool(name="test")
 */
class TestServicePool extends ServicePool
{
    /**
     * @Inject()  //注入
     *
     * @var UserPoolConfig
     */
    protected $poolConfig;
}