<?php 
   $database = require 'bootstrap.php';
   $tasks = $database->selectAll('login');
 
?>