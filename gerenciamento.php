<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    

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
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            text-align: center;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/qrious@4.0.2/dist/qrious.min.js"></script>
    <script>
        
        function gerarQRCode(numeroAssento, canvasId) {
            var inputText = "Assento " + numeroAssento;
            var qrCodeCanvas = document.getElementById(canvasId);

            // Cria uma instância do objeto QRious
            var qr = new QRious({
                element: qrCodeCanvas,
                value: inputText,
                size: 200,
                level: 'H'
            });
        }
        function mostrarModal(numeroAssento) {
            // Gera o QR code no modal
            gerarQRCode(numeroAssento, 'modalQRCode');
            // Exibe o modal
            var modal = document.getElementById('modal');
            document.getElementById('modal').style.display = 'flex';
            
            modal.addEventListener('click', function (event) {
                if (event.target === modal) {
                    fecharModal();
                }
            });    
        }

        function fecharModal() {
            // Fecha o modal
            document.getElementById('modal').style.display = 'none';
        }
        
    </script>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/poltronas.png" alt="IMG">
                </div>
                <form class="login100-form validate-form">
                    <span class="login100-form-title">Mapa de Poltronas:</span>
                    <div class="column">
                        <?php
                        $total_seats = 46;
                        for ($i = 1; $i <= $total_seats; $i++) {
                            $seat_class = ($i % 2 == 0) ? 'aisle' : 'window';
                            echo '<button type="button"class="seat ' . $seat_class . '" onclick="mostrarModal(' . $i . ')">' . $i . '</button>';
                            if ($i % 4 == 0) {
                                echo '</div><div class="column">';
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h2>QR Code</h2>
            <canvas id="modalQRCode" width="200" height="200"></canvas>
        </div>
    </div>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>