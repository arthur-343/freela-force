<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de Cadastro</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="sign.css">
</head>
<body>
<div class="container">
    <div class="leftContainer">
        <video autoplay muted loop>
            <source src="../../img/loginvideo.mp4" type="video/mp4">
        </video>
    </div>
    <div class="rightContainer">
      <div class="rightContent">
      <button class="backButton">
          <svg class="icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <g data-name="1" id="_1">
                <path d="M353,450a15,15,0,0,1-10.61-4.39L157.5,260.71a15,15,0,0,1,0-21.21L342.39,54.6a15,15,0,1,1,21.22,21.21L189.32,250.1,363.61,424.39A15,15,0,0,1,353,450Z"/>
            </g>
          </svg>
        Back
      </button>
        <form method="post" action="signup_action.php">
            <h1>Cadastro</h1>
            <h2>Porfavor preencha com seu nome completo, email e senha para criar a sua conta.</h2>
            <label>Nome Completo</label><br>
            <input type="text" name="name"><br>
            <label>Email</label>
            <input type="text" name="email">
            <label>Senha</label>
            <input type="password" name="password">
            <input type="submit" value="Sign Up"><br><br>
            Já tem uma conta? <a href="entrar.php" style="color: #118ab2;">Entrar</a>
        </form>
      </div>
    </div>
</div> 
</body>
</html>
