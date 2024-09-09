<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>RIO BRANCO - ASSINATURA DE EMAIL</title>
</head>
<body>
    <form class="form1" method="POST" action="assinatura.php">
        <img id="logo" src="img/logo-responsive.png" alt="Rio Branco">
        <h1 class="h3 mb-3 font-weight-normal text-center"> Formulario para Assinatura de Email</h1>
        <input class="form-control" type="text" name="nomeCompleto" id="nomeCompleto" maxlength="30" placeholder="Digite seu Nome" required>
        <input class="form-control" type="text" name="cargo" id="cargo" maxlength="30" placeholder="Qual e o seu cargo" required >
        <input class="form-control" type="text" name="telefone" id="telefone" maxlength="30" placeholder="telefone para contato" required>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu email" required>
        <input class="form-control btn-outline-danger" type="submit" value="enviar">
    </form>
</body>
</html>