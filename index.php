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
    <form action="index.php" method="POST">
        <input type="text" name="nome" id="nome" placeholder="nome">
        <input type="submit" value="Enviar">
    </form>

    <?php
    include 'phpForm.php';
    ?>

</body>

</html>