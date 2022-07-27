<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    DoAMTBillPurchasesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoAMTBillPurchases($request, $response, $args = []){
        try {
           
            $DoAMTBillPurchase="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"00500\",\n            \"remarks\": \"System error encountered\"\n        }\n    ]\n}";
            $DoAMTBillPurchases= json_decode(($DoAMTBillPurchase));
            return $response->withJson(ResponseFormatter::successResponse($DoAMTBillPurchases, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
