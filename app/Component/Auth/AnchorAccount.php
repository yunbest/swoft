<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/26
 * Time: 23:27
 */

namespace App\Component\Auth;

use Swoft\Auth\Bean\AuthResult;
use Swoft\Auth\Mapping\AccountTypeInterface;

class AnchorAccount implements  AccountTypeInterface
{

    public  function login(array $data):AuthResult{
         //验证当前的密码是否正确
    }
}