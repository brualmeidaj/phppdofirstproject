<?php
    $pdo = new PDO('mysql:localhost;dbname=root', 'user', '');

    //Insert
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" value="Enviar">
</form>