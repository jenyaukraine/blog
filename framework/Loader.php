<?php
/**
 * Clomment
 */
class Loader
{
  protected static $_instance;
  protected static $_namespacePath = array();
    
  private function __construct()
  {
    spl_autoload_register(array(__CLASS__, 'loader'));
  }
  
  public static function addNamespacePath($name, $path)
  {
    self::$_namespacePath[$name] = $path;
  }
  
  private function loader($class)
  {
    $class_path = str_replace('\\', '/', $class);
    if (file_exists('../'.lcfirst($class_path).'.php'))
    {
      include_once '../'.lcfirst($class_path).'.php';
    }
    else
    {
      foreach(self::$_namespacePath as $name => $path)
      {
        $name = str_replace('\\', '', $name);
        include_once $path.str_replace($name, '', $class_path).'.php';
      }
    }
  }
   
    private function __clone(){}
    
    public static function getInstance() {        
    if (null === self::$_instance) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }
}
Loader::getInstance();
