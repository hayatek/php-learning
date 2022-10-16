<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB接続</title>
</head>

<body>
    <?php
    $db = new mysqli('localhost:8889', 'root', 'root', 'myDB');
    echo "DBに接続しました。"
    ?>

</body>

</html>