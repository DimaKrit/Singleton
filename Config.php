<?php

class Config
{
	private $props = [];
	private static $instance;

	private function _construct() {}

	public static function getInstance()
	{
		if (empty(self::$instance)) {
			self::$instance = new Config();
		}

		return self::$instance;
	}

	public function setProperty($key, $value)
	{
		$this->props[$key] = $value;
	}

	public function getProperty($key)
	{
		return $this->props[$key];
	}

	private function __clone () {}
	private function __wakeup () {}

}


$conf = Config::getInstance();
$conf->setProperty('domain', 'google');
