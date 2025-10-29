<?php

declare(strict_types=1);

namespace PizzaStore\Pizzas;

use PizzaStore\Pizza;

/**
 * Класс Гавайской пиццы.
 */
class HawaiianPizza extends Pizza
{
    /**
     * Конструктор класса HawaiianPizza.
     */
    public function __construct()
    {
        $this->name = 'Гавайская';
        $this->sauce = 'томатный';
        $this->toppings = ['ветчина', 'ананасы', 'моцарелла'];
    }
}
