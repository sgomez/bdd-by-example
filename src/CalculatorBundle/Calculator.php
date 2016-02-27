<?php
/*
 * This file is part of the bdd-by-example.
 *
 * (c) Sergio Gómez <sergio@uco.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace CalculatorBundle;


class Calculator
{
    public function add($number1, $number2)
    {
        if(!is_numeric($number1) || !is_numeric($number2))
        {
            return false;
        }

        return $number1 + $number2;
    }
}