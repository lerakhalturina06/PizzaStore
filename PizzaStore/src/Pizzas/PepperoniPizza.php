<?php

declare(strict_types=1);

namespace PizzaStore\Pizzas;

use PizzaStore\Pizza;

/**
 * Класс пиццы Пепперони.
 */
class PepperoniPizza extends Pizza
{
    /**
     * Конструктор класса PepperoniPizza.
     */
    public function __construct()
    {
        $this->name = 'Пепперони';
        $this->sauce = 'томатный';
        $this->toppings = ['пепперони', 'моцарелла', 'орегано'];
    }
}
