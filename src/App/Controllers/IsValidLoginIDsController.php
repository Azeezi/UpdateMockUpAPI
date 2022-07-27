<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class IsValidLoginIDsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getIsValidLoginIDs($request, $response, $args = []){
        try {
           
            $IsValidLoginID= "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"IsValidLoginID\": \"YES\"\n        }\n    ]\n}";
            $IsValidLoginIDs= json_decode(($IsValidLoginID));
            return $response->withJson(ResponseFormatter::successResponse($IsValidLoginIDs, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
