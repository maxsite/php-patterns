<?php

/**
 * Design pattern "Flyweight" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Small Classes 
 */
class ClassA
{
    public function run()
    {
        echo 'ClassA run <br>';
    }
}

class ClassB
{
    public function run()
    {
        echo 'ClassB run <br>';
    }
}

class ClassC
{
    public function run()
    {
        echo 'ClassC run <br>';
    }
}

/**
 * Factory for small classes
 */
class FlyweightFactory
{
    private $allObj = [];

    public function getObj($key)
    {
        if (!isset($this->allObj[$key])) {
            switch ($key) {
                case 'A':
                    $this->allObj[$key] = new ClassA();
                    break;
                case 'B':
                    $this->allObj[$key] = new ClassB();
                    break;
                case 'C':
                    $this->allObj[$key] = new ClassC();
                    break;
            }
        }

        return $this->allObj[$key];
    }
}


/**
 * demo
 */

$factory = new FlyweightFactory();

$keys = ['A', 'B', 'C'];

foreach ($keys as $key) {
    $obj = $factory->getObj($key);
    $obj->run();
}

/**
ClassA run 
ClassB run 
ClassC run 
 */

# end of file
