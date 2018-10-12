<?php

date_default_timezone_set("Asia/Kolkata");
$timestamp=time();
$date = date('d-m-Y', $timestamp);
$time = date('Gi.s', $timestamp);
echo $time;


?>
