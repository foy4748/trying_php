<?php

namespace Lib;

class App
{
	static protected $container;

	public static function setContainer($container)
	{
		static::$container = $container;
	}

	public static function bind($key, $resolver)
	{
		static::$container->bind($key, $resolver);
	}

	public static function resolve($key)
	{
		return static::$container->resolve($key);
	}
}
