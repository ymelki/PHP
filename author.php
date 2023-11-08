<?php
include "header.php";
var_dump($_GET);
$id=$_GET['id'];
$author=getRow("author", $id);
var_dump($author);
