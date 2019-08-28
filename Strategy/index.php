<?php

/**
 * Design pattern "Strategy" (Behavioral)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Methods of Strategy
 */
interface Strategy
{
    public function execute();
}

/**
 * Strategy A
 */
class StrategyA implements Strategy
{
    public function execute()
    {
        echo 'StrategyA execute<br>';
    }
}

/**
 * Strategy B
 */
class StrategyB implements Strategy
{
    public function execute()
    {
        echo 'StrategyB execute<br>';
    }
}

/**
 * Base Context
 */
class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function execute()
    {
        $this->strategy->execute();
    }
}

/**
 * demo
 */

$context = new Context(new StrategyA()); // first strategy
$context->execute();
/*
    StrategyA execute
 */

$context = new Context(new StrategyB()); // other strategy
$context->execute();
/*
    StrategyB execute
 */

# end of file