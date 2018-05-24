<?php
error_reporting(-1);

$url = "http://gtweb.gtbank.com/CustomerDetails/Api/CustomerDetails";
$token = "3490oihtbgbgutt9";
$data = array('Nuban' =>'0130071685');

  $opts = array('http' => array(
    'method' => 'POST',
    'header' =>
        "Authorization:".$token."\r\n".
        "Content-type:  application/json\r\n".
        "Content-Length: ".strlen($data)."\r\n".
    'content' => $data,
    );
  $stream = stream_context_create($opts);
  $fp = fopen($url, 'rb', false, $stream);
  $reply = stream_get_contents($fp);

echo "i am good";
 ?>
