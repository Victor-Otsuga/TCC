<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/LoginErro.css">
    <title>Login</title>
</head>
<body id="lateral" id="homerro">

    <div id="bg">
    <div id="login-container"> 
        <img src="../IMG/trevoice.png" alt="">
        <form action="login.php" method="POST">
        <label>Usuário</label>
        <input name="email" autocomplete="off">

        <label>Senha</label>
        <input type="password" value="123" name="senha" class="txtlog" autocomplete="off"><br><br>

       <input  type="submit" value="Entrar">

       <p>E-mail e/ou senha inválido(s)</p>

       <a href="#" style="text-decoration:none" id="forgotpass">Esqueci minha senha</a>
    </form>
    </div>
</div>
</body>
</html>