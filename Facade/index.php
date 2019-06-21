<?php

/**
 * Design pattern "Facade" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Unit 1
 */
class Unit1
{
    public function run()
    {
        echo 'Unit1 run <br>';
    }
}

/**
 * Unit 2
 */
class Unit2
{
    public function show()
    {
        echo 'Unit2 show <br>';
    }
}

/**
 * Unit 3
 */
class Unit3
{
    public function out()
    {
        echo 'Unit3 out <br>';
    }
}

/**
 * Facade start all units
 */
class Facade
{
    protected $unit1;
    protected $unit2;
    protected $unit3;

    public function __construct()
    {
        $this->unit1 = new Unit1();
        $this->unit2 = new Unit2();
        $this->unit3 = new Unit3();
    }

    public function start()
    {
        $this->unit1->run();
        $this->unit2->show();
        $this->unit3->out();
    }
}

/**
 * demo
 */

$f = new Facade();
$f->start();
/*
    Unit1 run
    Unit2 show
    Unit3 out
 */

 
# end of file