<?php
include "header.php";
?>
<hr>
<?php
/*
1. connect to database
*/

//$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');
// var_dump($pdo);

// query 
/*
$query = "SELECT * FROM author";
$statement = $pdo->query($query);
$authors = $statement->fetchAll(PDO::FETCH_ASSOC);
*/
$authors=get("author");

var_dump($authors);

// retrieve one information (title) from array
 
// retrieve all information (title) from array
echo "<hr>";
foreach ( $authors as $author   ){
    echo  "AuthoR  : ".$author['name'];
}
?>