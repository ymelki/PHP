<?php

// 1 connect to database
$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

$query = "SELECT * FROM book";
$statement = $pdo->query($query);
$books = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($books);
foreach ($books as $book){
    $id=$book['id'];
    $title=$book['title'];
    echo "<a href='book.php?id=$id'>" . $title . "   </a><hr>";
}

?>
<a href="book.php?id=1">livre test 1</a><hr>
<a href="book.php?id=2">livre test 2</a>