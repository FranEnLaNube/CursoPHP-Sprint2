<?php
// Start the session
session_start();
// Bringing $name value
$name = $_POST["name"];
$_SESSION["username"] = $name;
$username = $_SESSION["username"];
// Bringing $language value
$language = $_POST["language"];
$_SESSION["choosen_lang"] = $language;
$choosen_lang = $_SESSION["choosen_lang"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salida Formulario - Ejercicio 1, Nivel 1, Tema 6, Sprint 1, PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Formulario completado</h1>
    <p>Hola <?php echo $username?>, elegiste <?php echo $choosen_lang?>!, Suerte con eso...</p>
</body>