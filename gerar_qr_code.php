<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>

    <style>
        .seat {
            width: 40px;
            height: 40px;
            margin: 5px;
            background-color: #ccc;
            text-align: center;
            line-height: 40px;
            cursor: pointer;
            display: inline-block;
        }
        .window {
            background-color: #0099FF; /* Azul para janelas (números ímpares) */
        }
        .aisle {
            background-color: #FF6600; /* Laranja para corredores (números pares) */
        }
        .column {
            float: left;
        }
    </style>
</head>
<body>
    <h1>Gerador de QR Code</h1>
    <p>Escaneie o QR Code para visualizar a informação da poltrona selecionada.</p>

    <canvas id="qrcode" width="200" height="200"></canvas>


    <script>
        // Função para gerar o QR Code com base na informação da poltrona
        
        // Função para obter a informação da poltrona a partir do parâmetro na URL
        function getPoltronaInfoFromURL() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get("poltronaInfo");
        }

        // Obter a informação da poltrona a partir da URL
        const poltronaInfo = getPoltronaInfoFromURL();

        if (poltronaInfo) {
            generateQRCode(poltronaInfo);
        } else {
            alert("Nenhuma informação da poltrona foi encontrada.");
        }
    </script>
    <script type="text/javascript"></script>
</body>
</html>