<?php
namespace App\Services;
use App\Lib\TestInterface;
use Swoft\Core\ResultInterface;
use Swoft\Rpc\Server\Bean\Annotation\Service;
/**
 *
 * @method ResultInterface deferGetTest(string $ids)
 * @method ResultInterface deferGetLive($server, $fd, $data)
 * @Service()
 */
class TestService implements TestInterface
{

    public function getLive($server,$fd,$data)
    {
        return 1;
    }
}