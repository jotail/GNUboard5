<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/goaway.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>