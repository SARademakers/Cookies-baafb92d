<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>
        <form action="cart.php" method="post" class="form">
            <label for="keuze">Keuze: </label>
            <input type="text" name="keuze" value="" required>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>

<?php
session_start();
$cookie1 = "Skateboard";
$cookie2 = "Basketbal";
$cookie3 = "Skeelers";    
setcookie ("#1" , $cookie1);    
setcookie ("#2" , $cookie2);
setcookie ("#3" , $cookie3);
if (isset($_POST["submit"])) {
    $input = $_POST["keuze"];
    if ($_COOKIE[$input]) {
        echo "<h1>Gekozen item: " . $_COOKIE[$input] . "</h1>";
    }else {
        echo "<h1>Er bestaat geen item met dat nummer </h1>";
    }
}
?>