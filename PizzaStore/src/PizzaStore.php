<?php

declare(strict_types=1);

namespace PizzaStore;

/**
 * Абстрактный класс Магазина Пиццерии.
 */
abstract class PizzaStore
{
    /**
     * Заказ пиццы определенного типа.
     *
     * @param string $type Тип пиццы
     *
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->cut();

        return $pizza;
    }

    /**
     * Фабричный метод для создания пиццы.
     *
     * @param string $type Тип пиццы
     *
     * @return Pizza
     */
    abstract protected function createPizza(string $type): Pizza;
}
