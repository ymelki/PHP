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
// $id contains id from url
$id=$_GET['id'];

// 1 connect to D.B.
//$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

// Query : SELECT * FROM book where id=$id;
/*
$query = "SELECT * FROM book where id=$id";
$statement = $pdo->query($query);
$book = $statement->fetch(PDO::FETCH_ASSOC);
*/

// query with id 
//$query = "SELECT * FROM book where id=:myId";
// query prepare with PDO 
//$statement = $pdo->prepare($query);
// definie ":myid"
//$statement->bindValue(':myId', $id, \PDO::PARAM_INT);
// execute
//$statement->execute();
// get data 
//$book = $statement->fetch(PDO::FETCH_ASSOC);
$book=getRow("book", $id);
var_dump($book);

echo "ID : " . $book['id'] . "<br>".
     "Title :  " . $book['title'] . "<br>".
     "Description :  " . $book['description'] . "<br>";
?>