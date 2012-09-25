<?php
header("Content-type: text/html; charset=utf-8");
echo "s";
include "./sdk/TopSdk.php";
include "./sdk/top/TopClient.php";
echo "s";
//将下载SDK解压后top里的TopClient.php第8行$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest,
//正式环境时需要将该地址设置为:http://gw.api.taobao.com/router/rest
 
//实例化TopClient类
$c = new TopClient;
echo "s";
$c->appkey = "21152817";
$c->secretKey = "fa0cde9f9c4cecd4414d8187f8743b48";
 
//实例化具体API对应的Request类
$req = new UserGetRequest;
$req->setFields("nick,sex,uid,created");
$req->setNick("sandbox_c_1");
 
//执行API请求并打印结果
$resp = $c->execute($req);
echo "result:";
print_r($resp);
echo "<br>";
echo "nick:".$req->getNick();