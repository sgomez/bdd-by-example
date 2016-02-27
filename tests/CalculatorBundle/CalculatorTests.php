<?php
/*
 * This file is part of the bdd-by-example.
 *
 * (c) Sergio Gómez <sergio@uco.es>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Tests\CalculatorBundle;


use CalculatorBundle\Calculator;

class CalculatorTests extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Calculator
     */
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }
}