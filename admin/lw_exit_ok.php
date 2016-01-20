<?php
session_start();
$_SESSION=array();
session_destroy();
echo "<script language='javascript' type='text/javascript'>window.location.href='../index.html';</script>";
?>