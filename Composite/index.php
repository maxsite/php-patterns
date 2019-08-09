<?php

/**
 * Design pattern "Composite" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Composite methods
 */
interface CompositeInterface
{
    public function run();
}

/**
 * Composite run
 */
class Composite implements CompositeInterface
{
    private $classes;

    /**
     * Add class to list
     */
    public function addClass(CompositeInterface $class)
    {
        $this->classes[] = $class;
    }

    /**
     * running all classes
     */
    public function run()
    {
        foreach ($this->classes as $class) {
            $class->run();
        }
    }
}

/**
 * Demo Class1
 */
class Class1 implements CompositeInterface
{
    public function run()
    {
        echo 'Class1 run <br>';
    }
}

/**
 * Demo Class2
 */
class Class2 implements CompositeInterface
{
    public function run()
    {
        echo 'Class2 run <br>';
    }
}

/**
 * demo
 */

// create Composite
$a = new Composite(); 

// add classes
$a->addClass(new Class1());
$a->addClass(new Class2());

// run all
$a->run();
/*
    Class1 run
    Class2 run
 */

# end of file