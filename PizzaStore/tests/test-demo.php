<?php

require_once 'vendor/autoload.php';

class MyPizzaStore extends PizzaStore\PizzaStore 
{
    protected function createPizza(string $type): PizzaStore\Pizza
    {
        return match ($type) {
            'margherita' => new PizzaStore\Pizzas\MargheritaPizza(),
            'pepperoni' => new PizzaStore\Pizzas\PepperoniPizza(),
            'hawaiian' => new PizzaStore\Pizzas\HawaiianPizza(),
            default => throw new InvalidArgumentException("Unknown pizza type: {$type}"),
        };
    }
}

$store = new MyPizzaStore();
$pizza = $store->orderPizza('margherita');