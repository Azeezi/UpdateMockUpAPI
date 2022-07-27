<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class DoUpdateIndividualAddresesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoUpdateIndividualAddreses($request, $response, $args = []){
        try {
           
            $DoUpdateIndividualAddress="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"909\",\n            \"remarks\": \"Update of Address Details via API not permitted\"\n        }\n    ]\n}";
            $DoUpdateIndividualAddreses= json_decode(($DoUpdateIndividualAddress));
            return $response->withJson(ResponseFormatter::successResponse($DoUpdateIndividualAddreses, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
