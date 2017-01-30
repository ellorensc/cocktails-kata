<?php

namespace tests;

use cocktails\common\GlobalVariables;
use cocktails\ingredient\Ingredient;
use PHPUnit_Framework_TestCase;

/**
 * Class IngredientTest
 *
 * @author      Eduardo Llorens <ellorensc@gmail.com>
 * @version     1.0
 *
 */
class IngredientTest extends PHPUnit_Framework_TestCase
{
    public function testCallOneInstanceIngredient()
    {
        $ingredient = new Ingredient(GlobalVariables::INGREDIENT_GOMME_SYRUP, 10);
        $this->assertSame($ingredient->getName(), $ingredient->getName());
    }

    public function testIngredientHasName()
    {
        $ingredient = new Ingredient(GlobalVariables::INGREDIENT_GOMME_SYRUP, 10);
        $this->assertNotNull($ingredient->getName());
    }

    public function testIngredientHasRawCostPrice()
    {
        $ingredient = new Ingredient(GlobalVariables::INGREDIENT_GOMME_SYRUP, 10);
        $this->assertNotNull($ingredient->getRawPrice());
    }

    public function testIngredientRawCostPriceIsNumeric()
    {
        $ingredient = new Ingredient(GlobalVariables::INGREDIENT_GOMME_SYRUP, 10);
        $anotherIngredient = new Ingredient(GlobalVariables::INGREDIENT_LEMON_JUICE, 2.5);

        $this->assertInternalType("int", $ingredient->getRawPrice());
        $this->assertInternalType("float", $anotherIngredient->getRawPrice());
    }
}
