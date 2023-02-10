<?php
    $pdo = new PDO('mysql:host=localhost;dbname=root', 'user', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //Insert
    if(isset($_POST['nome'])){
        $sql = $pdo->prepare("INSERT INTO clientes VALUES (null,?,?)");
        $sql->execute(array($_POST['nome'],$_POST['email']));
        echo 'Formulário preenchido com sucesso :)';
    }
?>

<form method="post">
    <input type="text" name="nome">
    <input type="text" name="email">
    <input type="submit" value="Enviar">
</form>