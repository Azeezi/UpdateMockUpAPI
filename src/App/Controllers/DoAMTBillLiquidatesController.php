<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class   DoAMTBillLiquidatesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoAMTBillLiquidates($request, $response, $args = []){
        try {
           
            $DoAMTBillLiquidate="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"00500\",\n            \"remarks\": \"System error encountered\"\n        }\n    ]\n}";
            $DoAMTBillLiquidates= json_decode(($DoAMTBillLiquidate));
            return $response->withJson(ResponseFormatter::successResponse($DoAMTBillLiquidates, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
