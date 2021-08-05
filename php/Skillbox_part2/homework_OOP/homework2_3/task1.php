<?php

class Box
{

    public function putBall(Ball $ball)
    {
        echo "В корзину добавлен мяч" . PHP_EOL;
    }
}

class Ball
{
    private static $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}

$box = new Box;
$balls = [];
$n = mt_rand(1, 20);
for ($i = 0; $i < $n; $i++) {
    $balls[$i] = new Ball;
    $box->putBall($balls[$i]);
    echo "<br>";
}
echo "Всего мячей: " . Ball::getCount() . PHP_EOL;