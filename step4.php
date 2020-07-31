<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;

    }
    </style>
</head>
<body>
<header>
<h1>Gathering Form Input: GET</h1>
<form method="get">
<p>
    <label for="searchterm">Find Employee:</label>
    <input type="search" name="searchterm" id="searchterm">
    <input type="submit" name="search" id="search" value="search">
</p>
<?php if(isset($_GET['searchterm'])) {?>
    <p> You searched for <?php echo $_GET['searchterm']; ?>.</p>
    <?php

}

?>
</header>
     
</body>
</html>