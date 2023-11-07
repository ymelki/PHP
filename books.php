<?php
include "header.php";
?>
<hr>

<?php
/*
1. connect to database
*/
//$pdo=connect_bd();
// $pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');
// var_dump($pdo);

// query 


$books=get("book");
var_dump($books);
echo count([34,23,43]);

// retrieve one information (title) from array
 
// retrieve all information (title) from array
echo "<hr>";
foreach ( $books as $book   ){
    echo  "
   
    <hr> URL : book.php?id=".$book['id']."
    
    <a href=book.php?id=.$book[id].>Book  : ".$book['title']
    ."</a>"
    
    ;
}
?>