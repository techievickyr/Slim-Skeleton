<?php
namespace App\Controllers\Api;

use Interop\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class ExampleController 
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
   
   public function sample(Request $request, Response $response, $args) {
       
        $data = [
            'method' => 'GET',
            'path' => '/sample',
            'desciption' => 'This is a sample response data.',
        ];
        
        // Response payload json
        $payload = [
            'program' => 'slim3-skeleton',
            'version' => '1.0.1',
            'release' => '1',
            'object' => 'sample',
            'datetime' => '2017-09-02T00:00:01+05:30',
            'timestamp' => 1504290601,
            'status' => 'success',  // Status Code (i.e. success, fail or error
            'code' => 0,  // Numeric code corresponding to the error in an error result
            'message' => 'OK',  // A meaningful, end-user-readable message, explaining the current status
            'data' => $data,  // Data payload - a generic container for data returned for success, fail or error
        ];
        return $response->withJson($payload);
   }
}