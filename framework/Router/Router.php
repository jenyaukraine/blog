<?php

namespace Framework\Router;

use Framework\DI\Service;
/**
 * Router.php
 */
class Router{

	/**
	 * @var array
	 */
	protected static $map = array();

	/**
	 * Class construct
	 */
	public function __construct($routing_map = array()){

		self::$map = $routing_map;
	}

	/**
	 * Parse URL
	 *
	 * @param $url
	 */

	public function parseRoute($url = ''){

		$url = empty($url) ? $_SERVER['REQUEST_URI'] : $url;

		$route_found = null;

		foreach(self::$map as $route){

			$pattern = $this->prepare($route);

			if(preg_match($pattern, $url, $params)){

				// Get assoc array of params:
				preg_match($pattern, str_replace(array('{','}'), '', $route['pattern']), $param_names);
				$params = array_map('urldecode', $params);
				$params = array_combine($param_names, $params);
				array_shift($params); // Get rid of 0 element

				$route_found = $route;
				$route_found['params'] = $params;

				break;
			}

		}
		Service::set('route_controller', $route_found);
		return $route_found;
	}

	public function buildRoute($route_name, $params = array()){
		// @TODO: Your code...
	}

	private function prepare($route){

		$pattern = preg_replace('~\{[\w\d_]+\}~Ui','([\w\d_]+)', $route['pattern']);

		$pattern = '~^'. $pattern.'$~';

		return $pattern;
	}

}
