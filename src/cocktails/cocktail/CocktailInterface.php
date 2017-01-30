<?php

namespace cocktails\cocktail;

use cocktails\ingredient\Ingredient;


/**
 * Interface CocktailInterface
 *
 * @author      Eduardo Llorens <ellorensc@gmail.com>
 * @version     1.0
 *
 */
interface CocktailInterface
{
    /**
     * @param Ingredient $ingredient
     */
    public function addIngredient(Ingredient $ingredient);

    /**
     * @param int $position
     */
    public function removeIngredient($position);

    /**
     * @param $position
     * @param $newPosition
     */
    public function changeIngredientPosition($position, $newPosition);

    /**
     * @return float
     */
    public function getSellingPrice();
}
