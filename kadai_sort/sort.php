<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題sort</title>
</head>

<body>
    <p>
        <?php

        $nums = [15, 4, 18, 23, 10];

        echo '昇順にソートします。<br>';
        sort($nums);
        foreach($nums as $n){
            echo "{$n}<br>";
        }

        echo '降順にソートします。<br>';
        rsort($nums);
        foreach($nums as $n){
            echo "{$n}<br>";
        }


        ?>


    </p>
</body>

</html>