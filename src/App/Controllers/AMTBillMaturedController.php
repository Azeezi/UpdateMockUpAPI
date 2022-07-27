<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    AMTBillMaturedController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getAMTBillMatured($request, $response, $args = []){
        try {
           
            $AMTBillMature="{\n    \"status\": \"success\",\n    \"result\": []\n}";
            $AMTBillMatured= json_decode(($AMTBillMature));
            return $response->withJson(ResponseFormatter::successResponse($AMTBillMatured, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
