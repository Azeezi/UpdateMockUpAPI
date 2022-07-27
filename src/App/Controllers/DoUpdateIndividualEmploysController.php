<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class DoUpdateIndividualEmploysController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoUpdateIndividualEmploys($request, $response, $args = []){
        try {
           
            $DoUpdateIndividualEmploy="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"909\",\n            \"remarks\": \"EMPLOYMENT DETAILS Update via API not permitted\"\n        }\n    ]\n}";
            $DoUpdateIndividualEmploys= json_decode(($DoUpdateIndividualEmploys));
            return $response->withJson(ResponseFormatter::successResponse($DoUpdateIndividualEmploys, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
