<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class DoNewIndividualsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoNewIndividuals($request, $response, $args = []){
        try {
           
            $DoNewIndividual= "{\n    \"status\": \"success\",\n    \"result\": []\n}";
            $DoNewIndividuals= json_decode(($DoNewIndividuals));
            return $response->withJson(ResponseFormatter::successResponse($DoNewIndividuals, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
