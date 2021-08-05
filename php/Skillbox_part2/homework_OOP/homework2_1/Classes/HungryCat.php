<?php

class HungryCat
{
    public $name;
    public $color;
    public $food;

    public function __construct($name, $color, $food)
    {
        $this->name = $name;
        $this->color = $color;
        $this->food = $food;
    }

    public function eat($food)
    {
        ?>
        <p>
        <?php
        echo "Голодный кот ", $this->name, ". Особые приметы: цвет - ", $this->color, ", съел ", $food;
        if ($food === $this->food) {
            echo " и замурчал 'мррррр' от своей любимой еды!"; ?>
            </p>
            <?php
        }
    }
}
