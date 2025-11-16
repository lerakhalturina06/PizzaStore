<?php

declare(strict_types=1);

namespace PizzaStoreLib;

abstract class Pizza
{
    protected string $name;

    protected string $sauce;

    /** @var array<string> */
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}" . PHP_EOL;
        echo "Добавлен соус {$this->sauce}" . PHP_EOL;

        $toppingsList = implode(', ', $this->toppings);
        echo "Добавлены топики: {$toppingsList}" . PHP_EOL;
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
