<?php

/**
 * Design pattern "Observer" (Behavioral)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Observable use standart interface SplSubject
 */
class Observable implements \SplSubject
{
    /** 
     * list of observers
     */
    private $observers;

    /**
     * create standart class SplObjectStorage
     */
    function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * standart method of SplObjectStorage
     */
    function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * standart method of SplObjectStorage
     */
    function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * send notify
     */
    function notify()
    {
        foreach ($this->observers as $obj) {
            $obj->update($this);
        }
    }
}

/**
 * Observer use standart interface SplObserver
 */
class Observer1 implements \SplObserver
{
    /**
     * get notify from Observable
     */
    function update(SplSubject $subject)
    {
        echo 'update Observer1<br>';
    }
}

/**
 * another class for Observer
 */
class Observer2 implements \SplObserver
{
    function update(SplSubject $subject)
    {
        echo 'update Observer2<br>';
    }
}

/**
 * demo
 */

/**
 * create Observable
 */
$observable = new Observable();

/**
 * create Observers
 */
$o1 = new Observer1();
$o2 = new Observer2();

/**
 *  attach Observers to Observable
 */
$observable->attach($o1);
$observable->attach($o2);

/**
 * send notify
 */
$observable->notify();
/*
    update Observer1
    update Observer2
 */

/**
 * exclude Observer1
 */
$observable->detach($o1);

/**
 * send notify
 */
$observable->notify();
/*
    update Observer2
 */


# end of file