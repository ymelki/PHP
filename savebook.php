<?php
// 1. get data from form
var_dump($_POST);
$title=$_POST['book_title'];
$description=$_POST['book_description'];
$author=$_POST['book_author'];


// 2. connect to B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

// 3. save data in B.D (insert into)
$query = "INSERT INTO book (title,description,id_author)
    VALUES (:title, :description,:id_author)";
$statement = $pdo->prepare($query);
$statement->bindValue(':title', $title, \PDO::PARAM_STR);
$statement->bindValue(':description', $description, \PDO::PARAM_STR);
$statement->bindValue(':id_author', $author, \PDO::PARAM_STR);

$statement->execute();

// 4. redirect to books.php
header('location:books.php');