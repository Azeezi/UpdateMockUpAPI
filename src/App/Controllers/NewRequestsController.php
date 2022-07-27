<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class   NewRequestsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getNewRequests($request, $response, $args = []){
        try {
           
            $NewRequest="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"00500\",\n            \"remarks\": \"System error encountered\"\n        }\n    ]\n}";
            $NewRequests= json_decode(($NewRequest));
            return $response->withJson(ResponseFormatter::successResponse($NewRequests, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
