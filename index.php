<?php
include('db.php'); //we include the database file so we can call out the variable $conn.

$stmt = $conn -> prepare("SELECT * FROM user WHERE id = ?"); //this is like an empty placeholder where it tells the sql that we will use this later on

$id = 3;
$stmt -> bind_param('i', $id); //the first parameter means integer, so if it's string, it should be 's', the 2nd parameter is the variable which holds the value of id in our table 'user'.

$stmt -> execute(); //executes the query

$stmt -> store_result(); //stores it

$stmt -> bind_result($id, $name, $email); //binds the result, all the columns in our table should be included inside the parameter

$stmt -> fetch(); //then we take the data so we can echo it.

echo $name."'s email is ".$email;


?>