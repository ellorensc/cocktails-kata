<?php

namespace cocktails\ingredient;

/**
 * Class Ingredient
 *
 * @author      Eduardo Llorens <ellorensc@gmail.com>
 * @version     1.0
 *
 */
class Ingredient
{
    /** @var  string */
    protected $name;

    /** @var float */
    protected $rawPrice;

    /**
     * Ingredient constructor
     *
     * @param $name
     * @param $rawPrice
     * @throws IngredientException
     */
    public function __construct($name, $rawPrice)
    {
        if (empty($name)) {
            throw new IngredientException('The Ingredient name should be filled');
        }

        if (empty($rawPrice)) {
            throw new IngredientException('The Ingredient raw cost price should be filled');
        }

        if (!is_float($rawPrice) && !is_int($rawPrice)) {
            throw new IngredientException('The Ingredient raw cost price should be a number');
        }

        $this->name = $name;
        $this->rawPrice = $rawPrice;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRawPrice()
    {
        return $this->rawPrice;
    }

    /**
     * @param mixed $rawPrice
     */
    public function setRawPrice($rawPrice)
    {
        $this->rawPrice = $rawPrice;
    }
}
