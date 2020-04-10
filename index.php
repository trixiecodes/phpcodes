<?php

//include the database file so we can call out the variable $conn
include('db.php');

$stmt = $conn -> prepare("SELECT * FROM users WHERE id = ?"); //this is like an empty placeholder where it tells the sql that we will use this later on

$id = 2; //example, this should echo the data which has the id of 2
$stmt -> bind_param('i',$id); //the first parameter means integer, so if it's string, it should be 's', the 2nd parameter is the variable which holds the value of id in our talbe 'user'.

$stmt -> execute(); //executes the query

$stmt -> store_result();

$stmt -> bind_result($id, $name, $email);//binds the result, all the columns in our talbe should be included inside the parameter

$stmt -> fetch(); //then we take the data so we can echo it 

echo $name."'s email is ".$email;
//this should echo the data which has the id of 2
?>
