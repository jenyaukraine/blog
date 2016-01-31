<?php
/**
 * Clomment
 * /
class Loader{

	protected static $instance = null;
	protected static $namespaces = array();

	public static function getInstance(){
		if(empty(self::$instance)){
			self::$instance = new self();
		}

		return self::$instance;
	}

	public static function load($classname){
		//
		$path = str_replace('Framework','',$classname);
		$path = __DIR__ . str_replace("\\","/", $path) . '.php';

		if(file_exists($path)){
			include_once($path);
		}
	}

	public static function load2($classname){
		//
		$path = str_replace('Framework','',$classname);
		$path = __DIR__ . str_replace("\\","/", $path) . '.php';

		if(file_exists($path)){
			include_once($path);
		}

	}

	private function __construct(){
		// Init
		spl_autoload_register(array(__CLASS__, 'load'));
		spl_autoload_register(array(__CLASS__, 'load2'));
	}

	private function __clone(){
		// lock
	}

	public static function addNamespacePath($namespace, $path){
		//...
	}
}

Loader::getInstance();
