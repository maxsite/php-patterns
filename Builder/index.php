<?php

/**
 * Design pattern "Builder" (Creational)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Sample Product
 */
class Product
{
    private $list;

    public function add($elem)
    {
        $this->list[] = $elem;
    }

    public function getProduct()
    {
        foreach ($this->list as $el) {
            echo $el . '<br>';
        }
    }
}

/**
 * Director use builder
 */
class Director
{
    public function setConstruct($builder)
    {
        $builder->buildPartA();
        $builder->buildPartB();
    }
}

/**
 * base for Builder
 */
abstract class BuilderAbstract
{
    public function buildPartA()
    {
    }

    public function buildPartB()
    {
    }

    abstract public function getResult();
}

/**
 * Builder1 knows how to make a product
 */
class ConcreteBuilder1 extends BuilderAbstract
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        $this->product->add('Builder First Part A');
    }

    public function buildPartB()
    {
        $this->product->add('Builder First Part B');
    }

    public function getResult()
    {
        return $this->product;
    }
}

/**
 * Builder2 knows how to make a product
 */
class ConcreteBuilder2 extends BuilderAbstract
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function buildPartA()
    {
        $this->product->add('Builder Second Part A');
    }

    public function buildPartB()
    {
        $this->product->add('Builder Second Part B');
    }

    public function getResult()
    {
        return $this->product;
    }
}


/**
 * demo
 */

/**
 * set director
 */
$director = new Director();

/**
 * set builders
 */
$builder1 = new ConcreteBuilder1();
$builder2 = new ConcreteBuilder2();

/**
 * set Construct
 */
$director->setConstruct($builder1);

/**
 * get product
 */
$product1 = $builder1->getResult();
$product1->getProduct();
/*
    Builder First Part A
    Builder First Part B
 */

/**
 * use builder2 for other product2
 */
$director->setConstruct($builder2);
$product2 = $builder2->getResult();
$product2->getProduct();
/*
    Builder Second Part A
    Builder Second Part B
 */


# end of file