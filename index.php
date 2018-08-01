<?php


$result = call('App\Lib\TestInterface', '1.0.2', 'getUser', ['1']);
var_dump($result);


function call(string $interface, string $version, string $method, array $params = [])
{
    $fp = stream_socket_client('tcp://127.0.0.1:8099', $errno, $errstr);
    if (!$fp) {
        throw new Exception("stream_socket_client fail errno={$errno} errstr={$errstr}");
    }

    $data = [
        'interface' => $interface,
        'version'   => $version,
        'method'    => $method,
        'params'    => $params,
        'logid'     => uniqid(),
        'spanid'    => 0,
    ];

    $data = json_encode($data, JSON_UNESCAPED_UNICODE);
    fwrite($fp, $data);
    $result = fread($fp, 1024);
    fclose($fp);
    return $result;
}