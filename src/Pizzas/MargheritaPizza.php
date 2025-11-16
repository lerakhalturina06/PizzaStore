<?php

declare(strict_types=1);

namespace PizzaStoreLib\Pizzas;

use PizzaStoreLib\Pizza;

class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'Томатный';
        $this->toppings = ['Сыр Моцарелла', 'Свежие листья базилика', 'Оливковое масло'];
    }
}
