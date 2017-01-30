<?php

namespace cocktails\app;

use cocktails\cocktail\Cocktail;
use cocktails\common\GlobalVariables;
use cocktails\ingredient\Ingredient;

/**
 * CocktailKata definition class
 *
 * @author      Eduardo Llorens <ellorensc@gmail.com>
 * @version     1.0
 *
 */
class CocktailKata
{
    private function __construct()
    {

    }

    public static function run()
    {
        $instance = new CocktailKata();
        $instance->init();
    }

    public static function init()
    {
        $caipirinha = self::buildCaipirinha();
        $longIslandIcedTea = self::buildLongIslandIcedTea();

        /**
         * @var array[Cocktail] $cocktails
         */
        $cocktails = [
            $caipirinha,
            $longIslandIcedTea,
        ];

        self::showCocktailDetails($cocktails);

        // Removing ingredients
        $caipirinha->removeIngredient(0);
        $longIslandIcedTea->removeIngredient(2);

        self::showCocktailDetails($cocktails);

        // Changing order
        $longIslandIcedTea->changeIngredientPosition(1, 0);

        self::showCocktailDetails($cocktails);
    }

    private static function buildCaipirinha()
    {
        $caipirinha = new Cocktail(GlobalVariables::CAIPIRINHA);
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_CACHACA, 2));
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_LIME, 2));
        $caipirinha->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_REFINED_SUGAR, 2));

        return $caipirinha;
    }

    private static function buildLongIslandIcedTea()
    {
        $longIslandIcedTea = new Cocktail(GlobalVariables::LONG_ISLAND_ICE_TEA);
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_VODKA, 1));
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_TEQUILA, 1));
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_WHITE_RUM, 1));
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_TRIPLE_SEC, 1));
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_GIN, 2));
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_LEMON_JUICE, 1));
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_GOMME_SYRUP, 0.5));
        $longIslandIcedTea->addIngredient(new Ingredient(GlobalVariables::INGREDIENT_SPLASH_OF_COKE, 0.5));

        return $longIslandIcedTea;
    }

    private static function showCocktailDetails($cocktails)
    {
        /** @var Cocktail $cocktail */
        foreach($cocktails as $cocktail) {
            $cocktail->cocktailInfo();
        }
    }
}
