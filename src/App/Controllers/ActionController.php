<?php
namespace Mock\Controllers;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Interop\Container\ContainerInterface as ContainerInterface;

abstract class ActionController {

    protected $ci;

    public function __construct($ci) {
        $this->ci = $ci;
    }

    abstract public function __invoke($request, $response, $args = []);
}