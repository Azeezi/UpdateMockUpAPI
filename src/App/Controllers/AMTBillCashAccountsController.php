<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    AMTBillCashAccountsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getAMTBillCashAccounts($request, $response, $args = []){
        try {
           
            $AMTBillCashAccount="{\n    \"status\": \"success\",\n    \"result\": []\n}";
            $AMTBillCashAccounts= json_decode(($AMTBillCashAccount));
            return $response->withJson(ResponseFormatter::successResponse($AMTBillCashAccounts, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
