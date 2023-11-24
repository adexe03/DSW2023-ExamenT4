<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen UT4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Examen Tema 4</h1>
    </header>
    <?php
    @$link = new mysqli('localhost', 'root', '', 'filmdb');
    $error = $link->connect_error;
    ?>