<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>login page</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #333333; /* Alterado para cinza quase preto */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

h2 {
    margin-bottom: 20px;
    color: #ffd700; 
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    color: #333; /* Alterado para preto */
    background-color: #ffd700; /* Alterado para amarelo */
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #ffd700; /* Alterado para amarelo */
    color: #fff; /* Alterado para branco */
}

a {
    text-decoration: none;
    color: #007BFF;
}

a:hover {
    color: #0056b3;
}
</style>
</head>
<body>
<form method="post" action="login_action.php">
<h2>LOGIN FORM</h2>
<label>Email</label><br>
<input type="text" name="email"><br>
<label>Password</label><br>
<input type="password" name="password"><br>
<input type="submit" value="LOGIN"><br><br>
Don't have an account yet? <a href="signup.php">Sign up</a>
</form>
</body>
</html>
