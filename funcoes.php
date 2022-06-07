<?php 

    function verificaCelular($celular) {

        if(strlen($celular) == 11) {
            return true;
        } else {
            return false;
        }
    }

    function verificaCpf($cpf) {

        if(strlen($cpf) == 11) {
            return true;
        } else {
            return false;
        }
    }

    function verificaSenha($senha) {

        if(strlen($senha) <= 12 && strlen($senha) >= 6 ) {
            return true;
        } else {
            return false;
        }
    }

    function verificaGenero($genero) {

        if(strlen($genero) == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    function verificaSessao() {

        if($_SESSION['usuario_logado'] == ''){
            header('location:telalogin.php');
    }
    }
?>