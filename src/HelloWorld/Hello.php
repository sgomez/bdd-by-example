<?php

namespace HelloWorld;

class Hello
{
    /**
     * @var Logger
     */
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function greet(Person $person = null)
    {
        $greeting = 'Hello';

        if ($person) {
            $greeting .= ', ' . $person->getName();
        }

        $this->logger->log($greeting);

        return $greeting;
    }
}
