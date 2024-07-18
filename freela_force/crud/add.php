<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/add.css">
<link rel="stylesheet" href="../style.css">
<title>Add Data</title>
</head>
<body>
    <main>
    <form method="post" action="action_add.php">
        <h2>Título</h2>
         <input type="text" placeholder="digite o título aqui..." name="title"></input>
         <h2>Foto de capa</h2>
         <input type="text" placeholder="Coloque o link de uma imagem aqui..." name="thumbnail">
         <h2>Descrição</h2>
         <textarea rows="10" placeholder="Digite sua descrição aqui..." name="description"></textarea>
         <h2>Data</h2>
         <input placeholder="exemplo: 17/07/2024" type="text" name="year"></input>
         <input type="submit" value="Confirmar"></td>
    </form>
    </main>
</body>
</html>
