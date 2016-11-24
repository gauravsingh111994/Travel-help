<?php


$url=$_GET['url'];



unlink($url);

$ur=$_SESSION['url'];

location('location:$url');

?>