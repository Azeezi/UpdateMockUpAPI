<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    TransactionByNumbersController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getTransactionByNumbers($request, $response, $args = []){
        try {
           
            $TransactionByNumber="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"902\",\n            \"remarks\": \"API/Online Lien processing not allowed\"\n        }\n    ]\n}";
            $TransactionByNumbers= json_decode(($TransactionByNumber));
            return $response->withJson(ResponseFormatter::successResponse($TransactionByNumbers, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
