<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題016</title>
</head>
<body>
    <?php
    class Food {
        private $name;
        private $price;

        public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function show_price(){
            echo $this->price;
        }

    }

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight)
        {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height(){
            echo $this->height;
        }
    }



    $onion = new Food('onion', 120);
    $cow = new Animal('cow', 150,200);

    print_r($onion);
    echo '<br>';
    print_r($cow);
    echo '<br>';

    $onion->show_price();
    echo '<br>';
    $cow->show_height();
    echo '<br>';

    ?>
</body>
</html>