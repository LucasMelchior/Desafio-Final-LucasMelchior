<?php

    include 'conexao.php';

    include 'funcoes.php';

    //print_r($_SESSION);

    verificaSessao();    

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="reset.css">
        <title>Clientes</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="logo_horizonta_fundo_branco.png" alt="Logo feras da tecnologia">
            </div> 
            <div class="deslogar">
                <a href="deslogar.php"><?php echo $_SESSION['usuario_logado']; ?></a>
                <img class="avatarusuario" src="avatar1.jpg">
            </div>
        </header>
        <main>
            <div class="fundocinza">
                <div>
                    <img class="avatarPreto" src="preto.png">
                </div>
                <div>
                    <h4>Clientes</h4>
                </div>
            </div>
            <div class="fundobege">
                <div class="tabelaTitulo">
                    <div>
                        <h1>Clientes</h1>
                    </div>
                    <div>
                        <button class="adicionar"><a class="verCliente" href="adicionarTela.php">+</a></button>
                    </div>
                </div>
                <div>
                    <table>
                        <thead>
                            <th class="esquerdo">NOME COMPLETO</th>
                            <th>CPF</th>
                            <th>CELULAR</th>
                            <th>E-MAIL</th>
                            <th>STATUS</th>
                            <th class="direito">AÇÃO</th>
                        </thead>
                        <?php include 'login.php'; ?>
                    </table>
                </div>
            </div>
        </main>
    </body>
    <style>

        Body {
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        main {
            display: flex;
            flex-direction: row;
        }
        
        h1 {
            color: #3C3A3C;
            font-weight: bold;
            font-size: 30px;
        }

        h4 {
            font-weight: bold
        }

        table {
            text-align: center;
            width: 100%;
        }

        thead {
            color: white;
            font-weight: bold;
            background-color: #3C3A3C;
        }

        th,td {
            padding: 12px;    
            border-top: 1px solid #EDF0EF; 
            font-size: 13px;       
        }

        .avatarPreto {
            width: 13px;
        }

        .tabelaTitulo {
            display: flex;
            width: 100%;
            justify-content: space-between;
            margin-bottom: 5px;
        }

        .fundobege {
            background-color: #EDF0EF;
            width: 100%;
            padding: 20px;
        }

        .esquerdo{
            border-radius: 10px 0px 0px 0px;
        }

        .direito{
            border-radius: 0px 10px 0px 0px;
        }

    
        .fundocinza{
            display: flex;
            background-color: #E0E0E0;
            width:19%;
            padding: 15px;
        }

        .fundologo {
            background-color: #3C3A3C;
            width: 17%;
            align-items: center;
        }

        .logo {
            background-color: #3C3A3C;
            width: 15%;
            display: flex;  
            justify-content: center;
            padding: 15px;
        }

        .tabela {
            background-color: white;      
        }

        .adicionar {
            color: white;
            background-color: orange;
            border-radius: 5px;
            width: 30px;
            height:30px;
            font-size: 20px;
            border: none;           
        }

        .adicionar:hover {
            cursor: pointer;
        }

        .verCliente {
            text-decoration: none;
            color: #fff;
        }

        .buttonAcao {
            background-color: orange;
            border: none;
            border-radius: 5px;
            padding: 5px;
        }
        
        .avatarusuario {
            width: 5%;
            border-radius: 15px;
        }

        .deslogar {
            display: flex;
            align-items: center;
            justify-content: end;
        }

    </style>
</html>