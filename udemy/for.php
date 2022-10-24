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
    //繰り返し処理
    $i = 1;
    // for ($i = 1; $i < 366; $i = $i + 1) :
    //     echo $i . '<br>';
    // endfor;

    // for ($i = 1; $i < 10; $i++) :
    //     echo $i . '<br>';
    // endfor;

    //クオーテーションの違い
    //シングル
    echo '$i.個';
    echo '<br>';
    //ダブル
    //ダブルの場合は変数と定数を混在させることができる
    echo "$i個";




    ?>
</body>

</html>