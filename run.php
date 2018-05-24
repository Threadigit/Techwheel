<?php
error_reporting(-1);
function sendPostData($url,$token, $data) {
  $opts = array('http' => array(
    'method' => 'POST',
    'header' =>
        "Authorization:".$token."\r\n".
        "Content-type: application/x-www-form-urlencoded\r\n".
        "Content-Length: ".strlen($data)."\r\n".
    'content' => $data,
    );
  $stream = stream_context_create($opts);
  $fp = fopen($url, 'rb', false, $stream);
  $reply = stream_get_contents($fp);

  return $reply;
}

$url = "http://gtweb.gtbank.com/CustomerDetails/Api/CustomerDetails";
$token = $_REQUEST['accessToken'];
$data = array('Nuban' =>'0130071685');

print_r(sendPostData($url,$token,$data));

 ?>
