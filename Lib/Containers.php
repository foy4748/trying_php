<?php

namespace Lib;

use Exception;

class Containers
{
	protected $bindings = [];

	public function bind($key, $resolver)
	{
		$this->bindings[] = [
			$key => $resolver
		];
	}

	public function resolve($key)
	{
		if (!array_key_exists($key, $this->bindings))
			throw new Exception("Resolver Not Found");
		$resolver = $this->bindings[$key];
		return call_user_func($resolver);
	}
}
