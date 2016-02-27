<?php

namespace spec\HelloWorld;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Alice');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('HelloWorld\Person');
    }

    function it_returns_is_name()
    {
        $this->getName()->shouldReturn('Alice');
    }

}
