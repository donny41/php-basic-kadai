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

        function sort_2way(array $array, bool $order)
        {
            if ($order == true) {
                echo '昇順にソートします。<br>';

                sort($array);
                foreach ($array as $a) {
                    echo "{$a}<br>";
                }
            } else {
                echo '降順にソートします。<br>';

                rsort($array);
                foreach ($array as $a) {
                    echo "{$a}<br>";
                }
            }
        }

        sort_2way($nums, true);
        sort_2way($nums, false);

        ?>
    </p>
</body>

</html>