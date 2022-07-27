<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    DoNewGLBatchsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoNewGLBatchs($request, $response, $args = []){
        try {
           
            $DoNewGLBatch="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"500\",\n            \"remarks\": \"Transactions are not balanced DR[0] CR[100]\"\n        }\n    ]\n}";
            $DoNewGLBatchs= json_decode(($DoNewGLBatch));
            return $response->withJson(ResponseFormatter::successResponse($DoNewGLBatchs, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
