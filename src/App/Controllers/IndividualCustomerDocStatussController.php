<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class IndividualCustomerDocStatussController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getIndividualCustomerDocStatuss($request, $response, $args = []){
        try {
           
            $IndividualCustomerDocStatus= "{\n    \"status\": \"success\",\n    \"result\": []\n}";
            $IndividualCustomerDocStatuss= json_decode(($IndividualCustomerDocStatus));
            return $response->withJson(ResponseFormatter::successResponse($IndividualCustomerDocStatuss, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
