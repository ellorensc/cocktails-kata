<?php

namespace tests;

use cocktails\cocktail\Cocktail;
use cocktails\common\GlobalVariables;
use cocktails\ingredient\Ingredient;
use PHPUnit_Framework_TestCase;

/**
 * Class CocktailTest
 *
 * @author      Eduardo Llorens <ellorensc@gmail.com>
 * @version     1.0
 *
 */
class CocktailTest extends PHPUnit_Framework_TestCase
{
    public function testCallOneInstanceCocktail()
    {
        $cocktail = new Cocktail(GlobalVariables::CAIPIRINHA);
        $this->assertSame($cocktail->getName(), $cocktail->getName());
    }

    public function testCocktailHassName()
    {
        $caipirinha = new Cocktail(GlobalVariables::CAIPIRINHA);
        $longIslandIcedTea = new Cocktail(GlobalVariables::LONG_ISLAND_ICE_TEA);

        $this->assertNotNull($caipirinha->getName());
        $this->assertNotNull($longIslandIcedTea->getName());
    }

    public function testCocktailHasIngredients()
    {
        $caipirinha = new Cocktail(GlobalVariables::CAIPIRINHA);
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_CACHACA, 2));
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_LIME, 2));

        $this->assertTrue($caipirinha->hasIngredients());
    }

    public function testCocktailSellingPriceIsGreaterThanRawPrice()
    {
        $caipirinha = new Cocktail(GlobalVariables::CAIPIRINHA);
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_CACHACA, 2));
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_LIME, 2));
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_REFINED_SUGAR, 2));

        $rawCostPrice = $caipirinha->getSellingPrice() * GlobalVariables::EXTRA_PRICE;

        $this->assertGreaterThan($rawCostPrice, $caipirinha->getSellingPrice());
    }
}
