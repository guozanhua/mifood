<?php
header("Content-type: text/html; charset=utf-8");

$url  = (isset($_GET['url'])) ? $_GET['url'] : '';
$type = getimagesize($url);
$type = $type['mime'];
header("Content-type: " . $type);

$httpheader = array();
$ch         = curl_init($url);
curl_setopt($ch, CURLOPT_REFERER, 'http://meituan.com/');
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-FORWARDED-FOR:106.46.136.91', 'CLIENT-IP:106.46.136.91'));   //设置referer
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
//curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
curl_exec($ch);
curl_close($ch);
