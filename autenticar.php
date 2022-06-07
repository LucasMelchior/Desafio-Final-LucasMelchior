<?php

    include 'conexao.php';

    $result = $db->query("select * from clientes where email = '".$_POST['email']."'");

    $cliente = $result->fetch_assoc();

    if($cliente != '' && $cliente['senha'] == $_POST['senha']) {
        $_SESSION['usuario_logado'] = $cliente['nome'];
        header('location:clientesTela.php');
    } else {
        die('Login e senha invalidos');
    }
    
?>

