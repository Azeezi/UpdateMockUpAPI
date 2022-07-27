<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class DoNewJointsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoNewJoints($request, $response, $args = []){
        try {
           
            $DoNewJoint="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"00500\",\n            \"remarks\": \"System error encountered\"\n        }\n    ]\n}";
            $DoNewJoints= json_decode(($DoNewJoints));
            return $response->withJson(ResponseFormatter::successResponse($DoNewJoints, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
