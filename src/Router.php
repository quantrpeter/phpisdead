<?php

namespace Quantr\PhpIsDead;

class Router
{
	private $routes = [];

	public function add($path, $func)
	{
		$this->routes[$path] = $func;
	}

	public function toString()
	{
		$str = "";
		foreach ($this->routes as $key => $value) {
			$str .= "> " . $key . ' -> ' . $value . "\n";
		}
		return trim($str);
	}
}
