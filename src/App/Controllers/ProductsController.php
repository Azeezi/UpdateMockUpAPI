<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class ProductsController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getProducts($request, $response, $args = []){
        try {
           
            $Product="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"version\": \"3.0\"\n        }\n    ]\n";
            $Products= json_decode($Product);
            return $response->withJson(ResponseFormatter::successResponse($Products, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }


    // public function getBank($request, $response, $args = []){   
    //     try {
    //         $id = $args['id'];
    //         $Bank = Bank::where('id', '=', $id)->get();
    //         return $response->withJson(ResponseFormatter::successResponse($Bank));

    //     } catch (\Exception $e) {
    //         return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
    //     }
    // }


    public function createBank($request, $response, $args = []){
        try {
            $Bank_details =  $request->getParsedBody();
            //$Banks = new Banks(1, $Bank_details['BANK_CD'],$Bank_details['BANK_DSC'],$Bank_details['BANK_TYPE_DSC']);
            $Banks = new Bank();
            $Banks->setId(1);
            $Banks->setBANK_CD($Bank_details['BANK_CD']);
            $Banks->setBANK_DSC($Bank_details['BANK_DSC']);
            $Banks->setBANK_TYPE_DSC($Bank_details['BANK_TYPE_DSC']);

            //$create = Bank::create($Bank_details);
            return $response->withJson(ResponseFormatter::successResponse($Banks), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}


  
