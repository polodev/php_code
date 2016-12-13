<?php 
class Router {
	protected $routes = [];
	public function __construct($routes)	 {
		$this->routes = $routes;
	}
	public function direct($uri)	 {
		$trim_uri = trim($uri, '/');
		if(array_key_exists($trim_uri, $this->routes)) {
			return $this->routes[$trim_uri];
		}
	}
}

$routes = [
	'' => 'home.view.php',
	'about' => 'about.view.php',
	'contact' => 'contact.view.php',
];
$router = new Router($routes);
require $router->direct($_SERVER['REQUEST_URI']);