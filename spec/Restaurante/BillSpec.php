<?php

namespace spec\Restaurante;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Restaurante\Priced;

class BillSpec extends ObjectBehavior
{
    function let(Priced $priced)
    {
        $priced->getPrice()->willReturn(10);
        $this->addItem($priced);
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType('Restaurante\Bill');
    }

    function it_adds_an_item(Priced $priced)
    {
        $this->getItems()->shouldHaveCount(1);
    }
    
    function it_gets_total(Priced $priced)
    {
        $this->getTotal()->shouldBeFloat(11.0);
    }

    function it_can_be_paid(Priced $priced)
    {
        $this->paidWithCash(11.0);
        $this->getPaid()->shouldBeFloat(11.0);
    }

}
