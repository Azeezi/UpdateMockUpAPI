<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    AMTBillActivesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getAMTBillActives($request, $response, $args = []){
        try {
           
            $AMTBillActive="{\n    \"status\": \"success\",\n    \"result\": []\n}";
            $AMTBillActives= json_decode(($AMTBillActive));
            return $response->withJson(ResponseFormatter::successResponse($AMTBillActives, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
