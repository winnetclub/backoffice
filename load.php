<?php
include_once "config.php";
include_once ABSPATH."/lib/ezSQL/ez_sql_core.php";
include_once ABSPATH."/lib/ezSQL/ez_sql_mysqli.php";
include_once ABSPATH."/lib/encrypt.php";
include_once ABSPATH."/inc/winnet_notification.class.php";
//include_once ABSPATH."/inc/winnet_member.class.php";

$db = new ezSQL_mysqli(DB_USER,DB_PASSWORD,DB_NAME,DB_HOST);
$notification=new Winnet_Notification();
$member=new Winnet_Member();



?>