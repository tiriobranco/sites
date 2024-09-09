<?php
$nomeCompleto = $_POST['nomeCompleto'];
$cargo = $_POST['cargo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://unpkg.com/dom-to-image@2.6.0/src/dom-to-image.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/assinatura.css">
    <title>Assinatura de Email</title>
</head>

<body>

    <div id="html-content-holder">
        <div class="assinatura">
            <img id="image" src="img/riobranco.png" alt="Image">
            <table border="1" id="idTable">
                <label id="texto" for="dados">
                <tr>
                    <td id="nome"><p><?php echo $nomeCompleto ?></p></td>
                </tr>
                <tr>
                    <td id="cg"><p><?php echo $cargo ?></p></td>
                </tr>
                <tr>
                    <td id="tel"><p><?php echo $telefone ?></p></td>
                </tr>
                <tr>
                    <td id="email"><p><?php echo $email ?></p></td>
                </tr>
                </label>
            </table>
        </div>
    </div>
    <button id="btn-Preview-Image">Baixar a assinatura de email</button>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js" integrity="sha512-01CJ9/g7e8cUmY0DFTMcUw/ikS799FHiOA0eyHsUWfOetgbx/t6oV4otQ5zXKQyIrQGTHSmRVPIgrgLcZi/WMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="http://cdn.jsdelivr.net/g/filesaver.js"></script>
<script lang="javascript">
    $(document).ready(function() {
        $("#btn-Preview-Image").click(function() {
            domtoimage.toBlob(document.getElementById('html-content-holder')).then(function(blob) {
                window.saveAs(blob, "assinatura.png")
            })
        })
    })
</script>

</html>