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
function getAllRows($table)
{
    $pdo=connect_bd();
    $query = "SELECT * FROM $table";
    $statement = $pdo->query($query);
    $array = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $array;
}

function getRow($table , $id )
{
    // 1 connect to D.B.
    $pdo=connect_bd();

    // Query : SELECT * FROM book where id=$id;
    /*
    $query = "SELECT * FROM book where id=$id";
    $statement = $pdo->query($query);
    $book = $statement->fetch(PDO::FETCH_ASSOC);
    */

    // query with id 
    $query = "SELECT * FROM $table where id=:myId";
    // query prepare with PDO 
    $statement = $pdo->prepare($query);
    // definie ":myid"
    $statement->bindValue(':myId', $id, \PDO::PARAM_INT);
    // execute
    $statement->execute();
    // get data 
    $array = $statement->fetch(PDO::FETCH_ASSOC);
    return $array;
}

function deleteRow($table , $id)
{
    // 1 connect to D.B.
    $pdo=connect_bd();

    // connect to db
    //$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

    // query
    $query = "DELETE FROM $table where id=:myId";
    // query prepare with PDO 
    $statement = $pdo->prepare($query);
    // definie ":myid"
    $statement->bindValue(':myId', $id, \PDO::PARAM_INT);
    // execute
    $statement->execute();    
}



  
?>