<?php 
/*

<1>由例子中可看到，使用PHP加密扩展库Mcrypt对数据加密和解密之前，首先创建了一个初始化向量，简称为iv。由 $iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher,$modes),MCRYPT_RAND);可见创建初始化 向 量需要两个参数：size指定了iv的大小；source为iv的源，其中值MCRYPT_RAND为系统随机数。
<2>函数mcrypt_get_iv_size($cipher,$modes)返回初始化向量大小，参数cipher和mode分别指算法和加 密模式。
<3>加密函数$str_encrypt = mcrypt_encrypt($cipher,$key,$str,$modes,$iv); 该函数的5个参数分 别如下：cipher——加密算法、key——密钥、data(str)——需要加密的数据、mode——算法模式、 iv——初始化向量
<4>解密函数 mcrypt_decrypt($cipher,$key,$str_encrypt,$modes,$iv); 该函数和加密函数的参数几乎 一样，唯一不同的是data，也就是说data为需要解密的数据$str_encrypt，而不是原始数据$str。


**/
$str = "我是李云";

$key = "123qw5061Xwdf205dfgwe456";
$cipher = MCRYPT_RIJNDAEL_128;
$mode = MCRYPT_MODE_ECB;
$iv = mcrypt_create_iv(mcrypt_get_iv_size($cipher,$mode),MCRYPT_RAND); 
echo "原文：".$str."<br>";
$str_encrypt = mcrypt_encrypt($cipher,$key,$str,$mode,$iv);
echo "加密后的内容是：".$str_encrypt."<br>";
$str_decrypt = mcrypt_decrypt($cipher,$key,$str_encrypt,$mode,$iv);
echo "解密后的内容：".$str_decrypt."<br>";
