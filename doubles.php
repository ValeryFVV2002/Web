<?php
header('Content-Type: text/html; charset=utf-8');
set_time_limit(36000000);

header('Content-type: text/html; charset=utf-8');
include __DIR__ . "/inc/includes.php";



$g_log = [];
$crawler = new regionalNewsCrawler();

$crawler->clearDoubles();

//$crawler->showSqlLog();
