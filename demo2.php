<?php 

//指定初始化向量iv的大小：
$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
//创建初始化向量：
$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
//加密密码：
$key = "123qwe.019860905061x";
//原始内容（未加密）：
$text = "My name is Adam Li!";
echo $text. "<br>\n";
//加密后的内容：
$crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);
echo $crypttext. "\n<br>";
//解密已经加密的内容：
$str_decrypt = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $crypttext, MCRYPT_MODE_ECB, $iv);
echo $str_decrypt;
