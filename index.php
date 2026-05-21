<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "sistema_simples";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    die("Erro na conexão");
}else{
    // echo "<p>Banco:OK</p>";
    echo "<script>console.log('Banco:OK');</script>";
}

if($_SERVER["REQUEST_METHOD"] == "POST"){  //quando no seu servidor tipo de requisição for POST
    $usuario = $_POST["usuario"]; //recebe usuario
    $senha = $_POST["senha"]; //recebe senha
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login com o Banco</title>
</head>
<body>

    <h2>Login com PHP</h2>

    <form method="POST">
        <label for="usuario">Usuário</label>
        <input type="text" name="usuario">

        <br><br>

        <label for="senha">Senha</label>
        <input type="password" name="senha">

        <br><br>
        <button type="submit">Entrar</button>

    </form>

</body>
</html>