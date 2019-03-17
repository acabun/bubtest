<?php


 //http://newco.weddsystem.com/api/v1/calendario?
  
  
  
  // HKVsXDQ!GZ4VjpVk8Rx!s9aS#vtKavvX!

$postdata = http_build_query(
    array(
        'email' => 'gogogo@gmail.com',
        //'password' => 'Xu!A5yVq',
		//'device_id' => 1
    )
);

$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);
 
$context  = stream_context_create($opts);

$cont = file_get_contents('http://newco.weddsystem.com/api/v1/first_login', false, $context);

print $cont;