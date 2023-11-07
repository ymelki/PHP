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
$query = "SELECT * FROM user";
$statement = $pdo->query($query);
$users = $statement->fetchAll(PDO::FETCH_ASSOC);
*/
$users=get("user");

var_dump($users);

// retrieve one information (title) from array
 
// retrieve all information (title) from array
echo "<hr>";
foreach ( $users as $user   ){
    echo  "User : ".$user['name'];
}
?>