<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Restaurante\Bill;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $menus;
    private $bill;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->menus = [];
        $this->bill = new Bill();
    }

    /**
     * @When /^los siguientes menús:$/
     */
    public function losSiguientesMenús(TableNode $table)
    {
        foreach($table->getHash() as $item) {
            $this->menus[$item['numero']] = new \Restaurante\Menu($item['numero'], $item['precio']);
        }
    }

    /**
     * @When /^que he comprado (\d+) menús del número (\d+)$/
     */
    public function queHeCompradoMenúsDelNúmero($arg1, $arg2)
    {
        for($i = 0; $i < $arg1; $i++) {
            $menu = $this->menus[$arg2];
            $this->bill->addItem($menu);
        }
    }

    /**
     * @When /^pido la cuenta recibo una factura de (\d+) euros$/
     */
    public function pidoLaCuentaReciboUnaFacturaDeEuros($arg1)
    {
        \PHPUnit_Framework_Assert::assertEquals($arg1, $this->bill->getTotal());
    }

    /**
     * @When /^pago en efectivo con (\d+) euros$/
     */
    public function pagoEnEfectivoConEuros($arg1)
    {
        $this->bill->paidWithCash($arg1);
    }

    /**
     * @When /^la factura está pagada$/
     */
    public function laFacturaEstáPagada()
    {
        \PHPUnit_Framework_Assert::assertEquals(0, $this->bill->getUnpaid());
    }

    /**
     * @When /^he obtenido (\d+) puntos$/
     */
    public function heObtenidoPuntos($arg1)
    {
        \PHPUnit_Framework_Assert::assertEquals(50, $this->bill->getPoints());
    }
}
