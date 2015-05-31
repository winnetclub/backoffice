<?php
session_start();
if($_SESSION['role'] <> "member")   {
ob_start();
header( 'Location: /index.php?q=login' );
exit();
}
?>