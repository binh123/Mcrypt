<?php 

$request_params = array(
 'controller' => 'todo',
 'action' => 'read',
 'username' => "bl",
 'userpass' => "a1"
); 
 $private_key = "28e336ac6c9423d946ba02d19c6a2632"; 
 //encrypt request
$enc_request = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $private_key, json_encode($request_params), MCRYPT_MODE_ECB));
echo "CRYPT:".$enc_request."<br/>";
 //decrypt request
$params = json_decode(trim(mcrypt_decrypt( MCRYPT_RIJNDAEL_256, $private_key, base64_decode($enc_request), MCRYPT_MODE_ECB )),true);
echo "ENCRYPT:<br/>";
 //print result
var_dump($params);
