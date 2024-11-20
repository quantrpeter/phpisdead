![](img/phpisdead.png)

PhpIsDead is a php framework

# Dev

1. run "composer dump-autoload -o" instead of "composer dump-autoload" to see if any error to generate the autoloader

2. push to github

3. click "update" in https://packagist.org/packages/quantr/phpisdead

4. in your project, rm -fr package.lock vendor

5. composer install

6. you can see the changes


# Useful link

https://dev.to/joemoses33/create-a-composer-package-how-to-29kn

# The framework

## Install

Create sample project by 

```
composer create-project quantr/phpisdead-sample-project:dev-main
```

## Startup

The main file is index.php

```php
<?php

require_once 'vendor/autoload.php';

use \Quantr\PhpIsDead\PhpIsDead;
use \Quantr\PhpIsDead\Controller;
use \Quantr\PhpIsDead\Request;

class IndexController extends Controller
{
	function index(Request $request) {}
	public static function a(Request $request)
	{
		echo "this is a<br>";
	}
}

$phpIsDead = new PhpIsDead();
$phpIsDead->start();
$phpIsDead->router->add('/index', IndexController::class, 'index');
echo $phpIsDead->router->toString();

$phpIsDead->router->process($_SERVER['REQUEST_URI']);
```

## Route

To add a route to a class function, do this

```php
$phpIsDead->router->add('/index', IndexController::class, 'index');
```


## Authentication

## Authorization

## Model

## Controller

## ORM

## DB Migration

## Notification

## Mail

## Storage

## Queue

## Task Scheduling

## Testing

## Events & WebSocket

## Log

## API

## CSRF

## Session

## Template Engine
