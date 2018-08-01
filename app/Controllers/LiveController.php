<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Controllers;

use Swoft\App;
use Swoft\Auth\Mapping\AuthManagerInterface;
use Swoft\Http\Message\Server\Request;
use Swoft\Http\Server\Bean\Annotation\Controller;
use Swoft\Http\Server\Bean\Annotation\RequestMapping;
use Swoft\Http\Server\Bean\Annotation\RequestMethod;
use Swoft\Rpc\Server\Rpc\RpcServer;
use Swoft\Tcp\Server\Tcp\TcpServer;

// use Swoft\View\Bean\Annotation\View;
// use Swoft\Http\Message\Server\Response;

/**
 * Class LiveController
 * @Controller(prefix="live")
 * @package App\Controllers
 */
class LiveController{
    /**
     * this is a example action. access uri path: live
     * @RequestMapping(route="live", method=RequestMethod::GET)
     * @return array
     */
    public function index(Request $request)
    {

       // $username = $request->getAttribute(AuthConstants::BASIC_USER_NAME) ?? '';
        //$password = $request->getAttribute(AuthConstants::BASIC_PASSWORD) ?? '';

        //生成token

        $username='peter';
        $password='123456';
        if(!$username || !$password){
            return [
                "code"=>ErrorCodes::POST_DATA_NOT_PROVIDED,
                "message"=>"Basic Auth:{username,password}"
            ];
        }

        //从容器当中获取，自定义的manage对象
        $manager = App::getBean(AuthManagerInterface::class);

        /** @var AuthSession $session  自定义的方法*/

        $session = $manager->adminLogin($username,$password);


        $data = [
            'token'=>$session->getToken(),
            'expire'=>$session->getExpirationTime()
        ];
        return $data;



         //return view('live/index');
    }
}
