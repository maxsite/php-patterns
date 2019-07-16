<?php

/**
 * Pattern "Registry" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-patterns
 */

/**
 * Registry use Multiton
 */
trait MultitonTrait
{
	private static $list;

	public static function getInstance(string $instance = 'default')
	{
		if (empty(self::$list[$instance])) self::$list[$instance] = new static();
		return self::$list[$instance];
	}

	private function __construct()
	{ 
	}
	private function __clone()
	{ 
	}
	private function __wakeup()
	{ 
	}
}

/**
 * Class Registry
 */
class Registry
{
	use MultitonTrait;

	private $registry = [];

	public function set(string $key, $val)
	{
		$this->registry[$key] = $val;
	}

	public function get(string $key, $default = false)
	{
		if (isset($this->registry[$key]))
			return $this->registry[$key];
		else
			return $default;
	}

	public function getAll()
	{
		return $this->registry;
	}

	public function unset(string $key)
	{
		if (isset($this->registry[$key]))
			unset($this->registry[$key]);
	}
}

/**
 * demo
 */

echo '<pre>'; // for print in browser

# $r = new Registry(); // Error: Call to private Registry::__construct()

/**
 * get instance
 */
$r1 = Registry::getInstance(); // "default" instance

$r1->set('key', 'value');

print_r($r1->get('key'));
/**
  value
 */

$r1->set('key1', 'value1');
print_r($r1->get('key1'));
/**
  value1
 */

print_r($r1->getAll());
/**
Array
(
	 [key] => value
	 [key1] => value1
	 )
 */

echo '<hr>';

$r2 = Registry::getInstance('myData');

print_r($r2->getAll());
/**
Array
(
)
 */

$r2->set('key22', 'value22');
print_r($r2->getAll());
/**
Array
(
    [key22] => value22
)
 */

# end of file
