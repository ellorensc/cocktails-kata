<?php

namespace cocktails\cocktail;

use cocktails\common\GlobalVariables;
use cocktails\ingredient\Ingredient;


/**
 * Class Cocktail
 *
 * @author      Eduardo Llorens <ellorensc@gmail.com>
 * @version     1.0
 *
 */
class Cocktail implements CocktailInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $ingredients = [];

    /**
     * Cocktail constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param Ingredient $ingredient
     */
    public function addIngredient(Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;
    }

    /**
     * @param int $position
     */
    public function removeIngredient($position)
    {
        array_splice($this->ingredients, $position, 1);
    }

    /**
     * @param $position
     * @param $newPosition
     */
    public function changeIngredientPosition($position, $newPosition)
    {
        $elementToReorder = array_splice($this->ingredients, $position, 1);
        array_splice($this->ingredients, $newPosition, 0, $elementToReorder);
    }

    /**
     * @return float
     */
    public function getSellingPrice()
    {
        $total = 0;

        /** @var Ingredient $ingredient */
        foreach($this->ingredients as $ingredient) {
            $total = $total + $ingredient->getRawPrice();
        }

        $total = $total + $total * GlobalVariables::EXTRA_PRICE;

        return $total;

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function hasIngredients()
    {
        return count($this->ingredients) > 0;
    }

    public function cocktailInfo()
    {
        print "Cocktail" . $this->getName() . ":" . '<br>';

        /** @var Ingredient $ingredient */
        foreach($this->ingredients as $position => $ingredient) {
            print $position+1 . ". " . $ingredient->getName() . ": " . $ingredient->getRawPrice()  . '<br>';
        }
        print 'Total price: ' . $this->getSellingPrice() . '<br><br>';
    }
}
