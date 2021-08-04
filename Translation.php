<?php

ob_start();
include 'fullNews.php';
$link = '/fullNews.php';
ob_end_clean();//стер буфер, чтобы страница полной новости не склеилась с обрезанной новостью
echo $b = substr_replace(mb_strimwidth($a, 0, 180, "..."), '<a href="' . $link . '"> ', stripos($a, 'по мне'), 0);



