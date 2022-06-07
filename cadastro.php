<?php
    include 'conexao.php';
    include 'funcoes.php';

    $db->query("insert into clientes (`nome`,`datanasc`,`genero`,`status`,`celular`,`cpf`,`senha`,`email`) values ('".$_POST['nome']."', '".$_POST['datanasc']."', '".$_POST['genero']."', '".$_POST['status']."', '".$_POST['celular']."', '".$_POST['cpf']."', '".$_POST['senha']."', '".$_POST['email']."')");

    if(verificaCelular($_POST['celular']) == false) {
        die('Celular invalido');
    }

    if(verificaCpf($_POST['cpf']) == false) {
        die('CPF invalido');
    }

    if(verificaSenha($_POST['senha']) == false) {
        die('Tamanho da senha invalido');
    }

    if(verificaGenero($_POST['genero']) == false) {
        die('Gênero invalido');
     }

?>

Cliente criado com Sucesso! 
<a href="clientesTela.php">VOLTAR</a>