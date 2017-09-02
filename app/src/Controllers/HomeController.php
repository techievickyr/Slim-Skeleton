<?php
namespace App\Controllers;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeController 
{
   protected $db;
   protected $view;
   protected $container;

   // constructor receives container instance
   public function __construct(ContainerInterface $c) {
        $this->db = $c->get('db');
        $this->view = $c->get('view');
        $this->container = $c;
   }
}