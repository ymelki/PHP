<?php
include "header.php";
if (!empty($_GET['message'])){
    if ($_GET['message']==="success"){
        echo " this book has removed !";
    }
}
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

$books=getAllRows("book");
var_dump($books);
echo count([34,23,43]);

// retrieve one information (title) from array
 
// retrieve all information (title) from array
echo "<hr>";
foreach ( $books as $book   ){
    echo  "
   
    <hr> URL : book.php?id=".$book['id']."
    
    <a href=book.php?id=$book[id]>Book  : ".$book['title']
    ."</a>
     - 
     <a href=deletebook.php?id=$book[id]>   
     Remove
     </a>
    
    "
    
    ;
}
?>