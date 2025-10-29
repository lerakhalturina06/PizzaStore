<?php

declare(strict_types=1);

namespace PizzaStore\Pizzas;

use PizzaStore\Pizza;

/**
 * Класс пиццы Маргарита.
 */
class MargheritaPizza extends Pizza
{
    /**
     * Конструктор класса MargheritaPizza.
     */
    public function __construct()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'томатный';
        $this->toppings = ['моцарелла', 'помидоры', 'базилик'];
    }
}
