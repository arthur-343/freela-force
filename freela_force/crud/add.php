<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Data</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #333333; /* Fundo cinza quase preto */
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

table {
    margin: auto; /* Centralizando a tabela */
}

td {
    padding: 5px;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    color: #000; /* Texto preto */
    background-color: #ffd700; /* Botão amarelo */
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #ffd700; /* Botão amarelo */
    color: #000; /* Texto preto */
}
</style>
</head>
<body>
<form method="post" action="action_add.php">
   <table border="0" width="500">
      <tr>
         <td>Title</td>
         <td>:</td>
         <td><input type="text" name="title"></td>
      </tr>
      <tr>
         <td>Link of a image</td>
         <td>:</td>
         <td><input type="text" name="thumbnail"></td>
      </tr>
      <tr>
         <td>Expiration date</td>
         <td>:</td>
         <td><input type="text" name="year"></td>
      </tr>
      <tr>
         <td>Description</td>
         <td>:</td>
         <td><input type="text" name="rating"></td>
      </tr>
      <tr>
         <td colspan="3" align="center"><input type="submit" value="SAVE"></td>
      </tr>
   </table>
</form>
</body>
</html>
