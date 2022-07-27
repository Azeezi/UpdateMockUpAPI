<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class    DoCashLienPlacesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoCashLienPlaces($request, $response, $args = []){
        try {
           
            $DoCashLienPlace="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"902\",\n            \"remarks\": \"API/Online Lien processing not allowed\"\n        }\n    ]\n}";
            $DoCashLienPlaces= json_decode(($DoCashLienPlace));
            return $response->withJson(ResponseFormatter::successResponse($DoCashLienPlaces, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
