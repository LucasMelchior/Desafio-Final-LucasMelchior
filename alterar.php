<?php 

    include 'conexao.php';
    include 'funcoes.php';
    // FORMATAÇÃO DATA NASCIMENTO
    $data_nascimento = explode("/", $_POST['datanasc']);    
    $data_nascimento_formatada = $data_nascimento[2] . '-' . $data_nascimento[1] . '-' . $data_nascimento[0];

    $db->query("update clientes set nome = '".$_POST['nome']."', datanasc = '".$_POST['datanasc']."', genero = '".$_POST['genero']."', status = '".$_POST['status']."', celular = '".$_POST['celular']."', cpf = '".$_POST['cpf']."', senha = '".$_POST['senha']."', email = '".$_POST['email']."' where idclientes = ".$_POST['idclientes']);

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

Cliente Salvo com Sucesso! 
<a href="clientesTela.php">VOLTAR</a>
