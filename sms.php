<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define base path
defined('BASEPATH')
|| define('BASEPATH', realpath(dirname(__FILE__) . '/../../'));


$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lcp2TsUAAAAAINMbWyEiRSpDtlM6a_M3XLvMt3q&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$captcha = json_decode($response);

if(!$captcha->success) {
    echo json_encode([
        'success' => false,
        'error' => 'Ошибка капчи, обновите страниц и повторите попытку',
    ]);
    exit(1);
}

echo json_encode([
    'success' => true,
]);

//
//// Autoloader
//require_once BASEPATH . '/vendor/autoload.php';
//
/*$src = '<?xml version="1.0" encoding="UTF-8"?>    */
//<SMS>
//<operations>
//<operation>SEND</operation>
//</operations>
//<authentification>
//<username></username>
//<password></password>
//</authentification>
//<message>
//<sender>SMS</sender>
//<text>Test message [UTF-8]</text>
//</message>
//<numbers>
//<number>380972920000</number>
//</numbers>
//</SMS>';
//
//$Curl = curl_init();
//$CurlOptions = array(
//    CURLOPT_URL=>'http://api.myatompark.com/members/sms/xml.php',
//    CURLOPT_FOLLOWLOCATION=>false,
//    CURLOPT_POST=>true,
//    CURLOPT_HEADER=>false,
//    CURLOPT_RETURNTRANSFER=>true,
//    CURLOPT_CONNECTTIMEOUT=>15,
//    CURLOPT_TIMEOUT=>100,
//    CURLOPT_POSTFIELDS=>array('XML'=>$src),
//);
//curl_setopt_array($Curl, $CurlOptions);
//if(false === ($Result = curl_exec($Curl))) {
//    throw new Exception('Http request failed');
//}
//
//curl_close($Curl);
//
//echo $Result;