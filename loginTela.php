<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">    
    <title>Login</title>
</head>
<body class="fundo">    
    <form action="autenticar.php" method="post">
        <div class="logo">
            <img src="logo_horizonta_fundo_branco@2x.png" alt="Logo feras da tecnologia">  
        </div>
        <h3>Bem-vindo</h3>
        <div class="inputs">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="input-padrao" placeholder="seuemail@dominio.com">

            <label for="senha">Senha</label>
            <input type="password" name="senha" class="input-padrao" placeholder="********"> 

            <input type="submit" value="Login" class="login">           
        </div>
    </form>
</body>
</html>