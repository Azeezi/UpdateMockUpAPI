<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    TransactionByDatesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getTransactionByDates($request, $response, $args = []){
        try {
           
            $TransactionByDate="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"902\",\n            \"remarks\": \"API/Online Lien processing not allowed\"\n        }\n    ]\n}";
            $TransactionByDates= json_decode(($TransactionByDate));
            return $response->withJson(ResponseFormatter::successResponse($TransactionByDates, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
