<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <form action="/" method="POST">
        <span>Digite um site</span>
        <input type="text" name="site" id="site" placeholder="site">
        <input type="submit" value="Enviar">
    </form>

 <a href="/teste.php"><span>Clique aqui para a cópia</span></a>
<?php
    include 'pyForm.php';
    ?>


    <?php
    // include 'phpForm.php';
    ?>

</body>

</html>