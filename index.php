<?php
require_once('./vendor/autoload.php');
define('CACHE_DIR','./temp/cache');

date_default_timezone_set('Asia/Tokyo');
$smarty = new Smarty();
$smarty->config_dir= './conf/';
$smarty->template_dir = './conf/';
$smarty->compile_dir = './temp/smarty/compile/';
$smarty->cache_dir = './temp/smarty/cache/';
$smarty->left_delimiter = '<!--{';
$smarty->right_delimiter = '}-->';


$smarty->assign("page_title","ハローワールド");
$smarty->display("index.tpl");

function DEBUG($line){
  echo "<!doctype html>\n<html>\n<head>\n<meta charset='utf-8'>\n</head>\n<body>\n";
  echo "<pre>";
  var_dump($line);
  echo "</pre></body></html>";
  exit();
}
exit();
