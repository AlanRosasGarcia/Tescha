<?php
namespace App\Http;
class Request 
{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct(){
        $this->segments = explode('/',$_SERVER['RECUEST_URI']);

        $this->setController();
        $this->setMethod();
    }
}