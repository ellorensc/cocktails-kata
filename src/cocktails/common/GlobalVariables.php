<?php

namespace cocktails\common;

/**
 * GlobalVariables definition class
 *
 * @author      Eduardo Llorens <ellorensc@gmail.com>
 * @version     1.0
 *
 */
class GlobalVariables
{
    const CAIPIRINHA = 'Caipirinha';
    const LONG_ISLAND_ICE_TEA = 'Long Island Iced Tea';

    const EXTRA_PRICE = 0.25;

    const INGREDIENT_CACHACA = 'Cachaca';
    const INGREDIENT_LIME = 'Lime';
    const INGREDIENT_REFINED_SUGAR = 'Refined sugar';
    const INGREDIENT_VODKA = 'Vodka';
    const INGREDIENT_TEQUILA = 'Tequila';
    const INGREDIENT_WHITE_RUM = 'White rum';
    const INGREDIENT_TRIPLE_SEC = 'Triple sec';
    const INGREDIENT_GIN = 'Gin';
    const INGREDIENT_LEMON_JUICE = 'Lemon juice';
    const INGREDIENT_GOMME_SYRUP = 'Gomme syrup';
    const INGREDIENT_SPLASH_OF_COKE = 'Splash of coke';

    public $caipirinhaIngredientsOrder = [
        0 => self::INGREDIENT_CACHACA,
        1 => self::INGREDIENT_LIME,
        2 => self::INGREDIENT_REFINED_SUGAR,
    ];
}
