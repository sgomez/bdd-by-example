<?php

namespace spec\Restaurante;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MenuSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(1, 10);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Restaurante\Menu');
        $this->shouldHaveType('Restaurante\Priced');
    }

    function it_has_a_number()
    {
        $this->getNumber()->shouldReturn(1);
    }

    function it_has_a_price()
    {
        $this->getPrice()->shouldReturn(10);
    }
}
