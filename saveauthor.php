<?php
// 1. get data from form
var_dump($_POST);
$name=$_POST['author_name'];


// 2. connect to B.D.
$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

// 3. save data in B.D (insert into)
$query = "INSERT INTO author (name)
    VALUES (:name_author)";
$statement = $pdo->prepare($query);
$statement->bindValue(':name_author', $name, \PDO::PARAM_STR);
$statement->execute();

// 4. redirect to books.php
header('location:authors.php');