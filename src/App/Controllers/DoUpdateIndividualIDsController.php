<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class DoUpdateIndividualIDsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoUpdateIndividualIDs($request, $response, $args = []){
        try {
           
            $DoUpdateIndividualID="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"909\",\n            \"remarks\": \"CUSTOMER IDENTIFICATION Update via API not permitted\"\n        }\n    ]\n}";
            $DoUpdateIndividualIDs= json_decode(($DoUpdateIndividualID));
            return $response->withJson(ResponseFormatter::successResponse($DoUpdateIndividualIDs, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
