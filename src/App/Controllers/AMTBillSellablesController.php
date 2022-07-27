<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    AMTBillSellablesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getAMTBillSellables($request, $response, $args = []){
        try {
           
            $AMTBillSellable="{\n    \"status\": \"success\",\n    \"result\": []\n}";
            $AMTBillSellables= json_decode(($AMTBillSellable));
            return $response->withJson(ResponseFormatter::successResponse($AMTBillSellables, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
