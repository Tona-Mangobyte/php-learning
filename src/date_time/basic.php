<?php
try {
    $dt = new DateTime("2019-06-27 16:42:33", new DateTimeZone("America/Halifax"));
    print_r($dt);
} catch (Exception $e) {
    print_r($e);
}
try {
    $dt_pp = new DateTime("2022-10-23 15:30:35", new DateTimeZone("Asia/Phnom_Penh"));
    print_r($dt_pp);
    $tz = ini_get('date.timezone');
    $dtz = new DateTimeZone($tz);
    $dt = new DateTime("2022-06-27 16:42:33", $dtz);
    print_r($dt);
    $dt_now = new DateTime("now", $dtz);
    print_r($dt_now);
} catch (Exception $e) {
    print_r($e);
}

