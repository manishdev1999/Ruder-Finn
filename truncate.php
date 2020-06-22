<?php
 
//Instantiate our PDO object and create a new MySQL connection.
$pdo = new PDO('mysql:host=localhost;dbname=import_csv', 'root', 'babusudha');
 
//Our SQL statement. This will empty / truncate the table "videos"
$sql = "TRUNCATE TABLE `users`";
 
//Prepare the SQL query.
$statement = $pdo->prepare($sql);
 
//Execute the statement.
$statement->execute();


header("Location: index.php");
?>