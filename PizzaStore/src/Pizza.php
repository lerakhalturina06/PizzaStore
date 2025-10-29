<?php

declare(strict_types=1);

namespace PizzaStore;

/**
 * Базовый класс Пиццы.
 */
abstract class Pizza
{
    /**
     * @var string
     */
    protected string $name = '';

    /**
     * @var string
     */
    protected string $sauce = '';

    /**
     * @var array<string>
     */
    protected array $toppings = [];

    /**
     * Подготовка пиццы к выпеканию.
     *
     * @return void
     */
    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}" . PHP_EOL;
        echo "Добавлен соус {$this->sauce}" . PHP_EOL;

        $toppingsString = implode(', ', $this->toppings);
        echo "Добавлены топики: {$toppingsString}" . PHP_EOL;
    }

    /**
     * Нарезка пиццы.
     *
     * @return void
     */
    public function cut(): void
    {
        echo 'Данную пиццу нарезают по диагонали' . PHP_EOL;
    }

    /**
     * Получить название пиццы.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Получить соус пиццы.
     *
     * @return string
     */
    public function getSauce(): string
    {
        return $this->sauce;
    }

    /**
     * Получить топпинги пиццы.
     *
     * @return array<string>
     */
    public function getToppings(): array
    {
        return $this->toppings;
    }
}
