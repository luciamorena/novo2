<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        if ( isset($_POST) ) {
            echo 'NOME: ' . $_POST['nome']  . '<hr>';
        } else {
            echo 'NADA' . '<hr>';
        }

    ?>

    <form action="/" method="POST">
        <input type="text" name="nome">
        <input type="submit" value="LOGIN">
    </form>
</body>
</html>