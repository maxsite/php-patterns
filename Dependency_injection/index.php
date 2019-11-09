<?php
/**
 * Design pattern "Dependency injection" (Structural)
 * This is demo code
 * See for details: http://maxsite.org/page/php-di
 * https://en.wikipedia.org/wiki/Dependency_injection
 */

// type Configuration
interface ConfigurationInterface
{
	public function getKey1();
	public function getKey2();
}

// class for configuration
class ConfigurationOne implements ConfigurationInterface
{
    private $key1;
    private $key2;

    public function __construct($key1, $key2)
    {
        $this->key1 = $key1;
        $this->key2 = $key2;
    }

    public function getKey1()
    {
        return $this->key1;
    }

    public function getKey2()
    {
        return $this->key2;
    }
}

// Connection use Configuration data
class Connection
{
    private $configuration;

    public function __construct(ConfigurationInterface $config)
    {
        $this->configuration = $config;
    }

	// something to do
    public function run()
    {
        return [
            $this->configuration->getKey1(),
            $this->configuration->getKey2()
        ];
    }
}

/**
 * demo
 */
$config = new ConfigurationOne('myKey1', 'myKey2');
$connection = new Connection($config);

echo '<pre>';
print_r($connection->run());
/*
Array ( 
	[0] => myKey1
	[1] => myKey2
)
*/

# end of file