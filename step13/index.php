<?php
try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=registration','root','');

}catch (PDOException $e){
    die($e->getMessage());
}
$statement = $pdo->prepare('select * from login');

$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($results)
?>