<?php

class Route
{
    private $uri;
    private $routes;

    public function __construct()
    {
        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public static function get()
    {

    }

    public static function post()
    {
        
    }

    public static function put()
    {
        
    }
        
    public static function patch()
    {
        
    }

    public static function delete()
    {
        
    }
}
