<?php
// test = $_GET
/*
/book.php
/book.php?id=3
/book.php?name=yoel
/book.php?id=3&name=yoel
book.php?id=3&name=yoel&lastname="melki"
*/
var_dump($_GET);
echo $_GET['id'];
?>