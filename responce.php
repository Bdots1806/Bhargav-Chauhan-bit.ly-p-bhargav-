<?php

define ('url',"https://api.telegram.org/bot1831600053:AAEQrIzkB_e-P_cWY6JTrRIAd0ozonhovWU/");
$name = $_GET['name'];
$email = $_GET['email'];
$subject = $_GET['subject']
$message = $_GET['message'];
$chat_id = '1049447685';
$message = urlencode("Name:".$name."\n email : ".$email "\n subject : ".$subject "\n Message : ".$message);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

?>