<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    DoCashDepositsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoCashDeposits($request, $response, $args = []){
        try {
           
            $DoCashDeposit="{\n  \"deposit\": [\n    {\n      \"customer\": \"000001\",\n      \"account\": \"string\",\n      \"date\": \"2022-07-21\",\n      \"amount\": \"10000\",\n      \"description\": \"Testing\",\n      \"reference\": \"C0003\",\n      \"contra\": \"\"\n    }\n  ]\n}";
            $DoCashDeposits= json_decode(($DoCashDeposit));
            return $response->withJson(ResponseFormatter::successResponse($DoCashDeposits, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
