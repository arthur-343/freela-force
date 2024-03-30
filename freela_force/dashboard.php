<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Freela-Force</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333333; /* Alterado para cinza quase preto */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .welcome-message {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        .welcome-message h1 {
            color: #ffd700; /* Alterado para amarelo */
        }

        .welcome-message p {
            color: #333;
            font-size: 1.2em;
        }

        .user-message {
            text-align: center;
            margin-top: 20px;
        }
        .php-message {
            position: absolute;
            top: 0;
            left: 0;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        /* Estilos para o botão */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ffd700; /* Alterado para amarelo */
            color: #333; /* Alterado para preto */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ffd700; /* Alterado para amarelo */
            color: #fff; /* Alterado para branco */
        }
    </style>
</head>
<body>
    <div class="welcome-message">
        <h1>Welcome to Freela-Force</h1>
        <p>Your journey starts here</p>
        <!-- Botão de "Vagas" -->
        <a href="crud\index.php" class="btn">job vacancies</a>
      <!-- Botão de "Logout" -->
      <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>
