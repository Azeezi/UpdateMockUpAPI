<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class DoUpdateIndividualEmailsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoUpdateIndividualEmails($request, $response, $args = []){
        try {
           
            $DoUpdateIndividualEmail="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"909\",\n            \"remarks\": \"EMAIL ADDRESS Update via API not permitted\"\n        }\n    ]\n}";
            $DoUpdateIndividualEmails= json_decode(($DoUpdateIndividualEmail));
            return $response->withJson(ResponseFormatter::successResponse($DoUpdateIndividualEmails, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
