<?php

/**
 * Design pattern "Template method" (Behavioral)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Base class
 */
abstract class AlgorithmAbstract
{
    // abstract methods
    abstract function step1();
    abstract function step2();

    // method with implement
    function baseOperation()
    {
        echo 'AlgorithmAbstract baseOperation<br>';
    }

    // free method
    function hook() {}
    
    // Run all Actions — this is algorithm
    function run()
    {
        $this->step1();
        $this->step2();
        $this->baseOperation();
        $this->hook();
    }
}

/**
 * Class1 for sample
 */
class Class1 extends AlgorithmAbstract
{
    function step1()
    {
        echo 'Class1 step1<br>';
    }

    function step2()
    {
        echo 'Class1 step2<br>';
    }
}

/**
 * Class2 for sample
 */
class Class2 extends AlgorithmAbstract
{
    function step1()
    {
        echo 'Class2 step1<br>';
    }

    function step2()
    {
        echo 'Class2 step2<br>';
    }

    function hook()
    {
        echo 'Class2 hook<br>';
    }

    function baseOperation()
    {
        echo 'Class2 baseOperation<br>';
    }
}

/**
 * Class3 for sample
 */
class Class3 extends Class2
{
    // replace method in Class2
    function step2()
    {
        echo 'Class3 step2<br>';
    }
}

/**
 * demo
 */

$a = new Class1();
$a->run();
/*
    Class1 step1
    Class1 step2
    AlgorithmAbstract baseOperation
*/

$b = new Class2();
$b->run();
/*
    Class2 step1
    Class2 step2
    Class2 baseOperation
    Class2 hook
*/

$c = new Class3();
$c->run();
/*
    Class2 step1
    Class3 step2
    Class2 baseOperation
    Class2 hook
*/

# end of file