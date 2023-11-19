
<html lang="pt">
<head>
	<title>configuração</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 400px;
            background-color: #fff;
            margin: 30px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
            outline: none;
        }
        button {
            display: block;
            width: 100%;
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
                <span class="login100-form-title" style="font-size: 24px; color: #007BFF;">
                    Configuração de Conta
                </span>

					<form>
						<label for="nome">Nome:</label>
						<input type="text" id="nome" name="nome" placeholder="Seu Nome" required>
			
						<label for="email">E-mail:</label>
						<input type="email" id="email" name="email" placeholder="Seu E-mail" required>
                        <br>
                        <label >mudar senha</label>
                        <br>
						<label for="senha">Senha atual :</label>
						<input type="password" id="senha" name="senha" placeholder="Sua Senha" required>
                        <label for="senha">nova senha :</label>
						<input type="password" id="senha" name="senha" placeholder="Sua Senha" required>
			
						<label for="endereco">Endereço:</label>
						<textarea id="endereco" name="endereco" placeholder="Seu Endereço"></textarea>
			
						<button type="submit">Salvar Configurações</button>
					</form>

					
						
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>