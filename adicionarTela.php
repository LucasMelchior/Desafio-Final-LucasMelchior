<?php
    include 'conexao.php';
    include 'funcoes.php';
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
                        <button class="adicionar"><a class="verCliente" href="clientesTela.php"><</a></button>
                    </div>
                </div>
                <h5>VER</h5>
                <form action="cadastro.php" method="post">    
                    <div class="flex">                   
                        <div>
                            <label class="texto" for="nome">Nome completo</label>
                            <input type="text" class="inputPadrao" name="nome" id="nome" placeholder="Insira o Nome">
                        </div>
                        <div>
                            <label class="texto" for="datanasc">Data de nascimento</label>
                            <input type="text" class="inputPadrao" name="datanasc" id="datanasc" placeholder="Data de nascimento">
                        </div>
                        <div>
                            <label class="texto" for="genero">Gênero</label>
                            <input type="text" class="inputPadrao" name="genero" id="genero" placeholder="Gênero">
                        </div>
                        <div>
                            <label class="texto" for="cpf">CPF</label>
                            <input type="text" class="inputPadrao" name="cpf" id="cpf" placeholder="Insira o CPF">   
                        </div>
                    </div>
                    <div class="flex">
                        <div>            
                            <label class="texto" for="celular">Celular</label>
                            <input type="text" class="inputPadrao" name="celular" id="celular" placeholder="Celular">
                        </div>
                        <div>
                            <label class="texto" for="email">E-mail</label>
                            <input type="email" class="inputPadrao" name="email" id="email" placeholder="Insira o E-mail"> 
                        </div>
                        <div>
                            <label class="texto" for="senha">Senha</label>
                            <input type="text" class="inputPadrao" name="senha" id="senha" placeholder="Insira a senha">
                        </div>
                        <div>
                            <label class="texto" for="status">Status</label>
                            <input type="text" class="inputPadrao" name="status" id="status" placeholder="Ativo ou Inativo?">
                        </div>
                    </div>
                    <div class="flex2">
                        <div class="flex">
                            <input type="submit" class="salvar" value="Salvar">
                        </div>
                    </div> 
                </form>
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

        h5 {
            background-color: #3C3A3C;
            color: white;
            font-weight: bold;
            border-radius: 5px 5px 0px 0px;
            padding: 3px;
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

        form {
            display: block;
            flex-direction: column;
            background-color: white;
            margin-left
        }

        label {
            font-weight: bold;
            display: block;
        }

        .texto {
            padding-bottom: 5px;
        }

        .flex2 {
            display: flex;
            flex-direction: row-reverse;
        }

        .flex {
            display: flex;
            justify-content: space-evenly;
            padding: 15px;
        }

        .salvar {
            border: none;
            color: white;
            font-weight: bold;
            background-color: orange;
            border-radius: 5px;
            padding: 10px 50px 10px 50px;
        }

        .salvar:hover {
            cursor: pointer;
        }

        .inputPadrao {
            border: 1px solid #cecece;
            width: 120%;
            border-radius: 5px;
            padding: 5px;
            border-color: #BCBDC7;
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