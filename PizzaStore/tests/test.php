<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PizzaStore\PizzaStore;
use PizzaStore\Pizza;
use PizzaStore\Pizzas;

class MyPizzaStore extends PizzaStore 
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'margherita' => new Pizzas\MargheritaPizza(),
            'pepperoni' => new Pizzas\PepperoniPizza(),
            'hawaiian' => new Pizzas\HawaiianPizza(),
            default => throw new InvalidArgumentException("Unknown pizza type: {$type}"),
        };
    }
}

echo "=== Pizza Store Library Demo ===" . PHP_EOL . PHP_EOL;

$store = new MyPizzaStore();

echo "1. Ordering Margherita Pizza:" . PHP_EOL;
$margherita = $store->orderPizza('margherita');

echo PHP_EOL . "2. Ordering Pepperoni Pizza:" . PHP_EOL;
$pepperoni = $store->orderPizza('pepperoni');

echo PHP_EOL . "3. Ordering Hawaiian Pizza:" . PHP_EOL;
$hawaiian = $store->orderPizza('hawaiian');

echo PHP_EOL . "=== Demo Complete ===" . PHP_EOL;