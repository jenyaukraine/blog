<?php
namespace Framework\Request;
class Request
{
    public function __construct(){
      return $_REQUEST;
    }

    public static function create()
    {
      return new Request();
    }

    public function isPost()
    {
        return $_SERVER["REQUEST_METHOD"] == "POST";
    }

    public function post($name, $filter = 'STRING')
    {
        return $_POST[$name];
    }
    protected function filter($value, $filter = 'STRING')
    {

    }
    public function get($name)
    {
        return $_GET[$name];
    }
}
