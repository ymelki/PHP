<?php
// connect to db
function connect_bd() : PDO
{
    require_once '_connec.php';
    $pdo = new \PDO(DSN, USER, PASS);
    return $pdo;
} 

function displayHello()
{
    echo "Hello";
}

function getAge()
{
    $age=34;
    return $age;
}
function displayHelloL($lastname)
{
   echo "Hello ".$lastname;
}
// get data from table
function get($table)
{
    $pdo=connect_bd();
    $query = "SELECT * FROM $table";
    $statement = $pdo->query($query);
    $array = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}

  
?>