<?php
$access_token = '++KmUFiyG2B3+zILm8irtifpjihNlcy+A4PiksZ+WQdKAst+5Ur4n657X46/n9s8pS9itNCnzVaF36TdVrdUSxG0M24rYyZdO/yLHXzYOhShKtG4RHKDt7JdLyzBQYj0KZDby8jKjEfvn+s3LJcIlgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
