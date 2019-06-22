<?php

/**
 * Design pattern "Fluent interface" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 * https://en.wikipedia.org/wiki/Fluent_interface
 */

/**
 * Any class
 */
class MyName
{
    private $FirstName = '';
    private $LastName = '';

    /** 
     * return $this
     */
    public function __construct()
    {
        return $this;
    }

    /** 
     * return $this
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;
        return $this;
    }

    /** 
     * return $this
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
        return $this;
    }

    /** 
     * return result
     */
    public function getResult()
    {
        return $this->FirstName . ' ' . $this->LastName;
    }
}


/**
 * demo
 */

$fullName = (new MyName())->setFirstName('Don')->setLastName('Joe')->getResult();

echo $fullName; // Don Joe

# end of file
