<?php

namespace Quantr\PhpIsDead;

class Router
{
	private $routes = [];

	public function add($path, $func)
	{
		$routes[$path] = $func;
	}

	public function toString()
	{
		$str = "";
		var_dump($this->routes);
		foreach ($this->routes as $key => $value) {
			$str .= $key . ' -> ' . $value . '\n';
		}
		return trim($str);
	}
}
