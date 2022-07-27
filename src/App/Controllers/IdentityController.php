<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
//use Mock\Controllers\ActionController;
use Mock\Models\Identity;

class IdentityController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getIdentities($request, $response, $args = []){
        try {
            // $Identi = new Identity();
            // $Identi->id = 1;
            // $Identi->IDENTIFICATION_CD = '001';
            // $Identi->IDENTIFICATION_DSC = 'Naira';
           $identity="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"identity\": [\n                {\n                    \"IDENTIFICATION_CD\": \"004\",\n                    \"IDENTIFICATION_DSC\": \"Driver's License\"\n                },\n                {\n                    \"IDENTIFICATION_CD\": \"003\",\n                    \"IDENTIFICATION_DSC\": \"INEC\"\n                },\n                {\n                    \"IDENTIFICATION_CD\": \"001\",\n                    \"IDENTIFICATION_DSC\": \"International Passport\"\n                },\n                {\n                    \"IDENTIFICATION_CD\": \"002\",\n                    \"IDENTIFICATION_DSC\": \"National Identity Management System\"\n                }\n            ]\n        }\n    ]\n}";
        
           $identitys=json_decode(($identity));
            return $response->withJson(ResponseFormatter::successResponse($identitys));
           
           

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getIdentity($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Identy = Identity::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Identy));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createIdentity($request, $response, $args = []){
        try {
            $Identity_details =  $request->getParsedBody();
            //$create = Currency::create($Currency_details);
            $Identity = new Identity();
            $Identity->setId(1);
            $Identity->setIDENTIFICATION_CD($Identity_details['Naira']);
            $Identity->setIDENTIFICATION_DSC($Identity_details['Dollar']);
            //$Identity->setCURRENCY_LOCAL_CURRENCY_YN($Identity_details['yeye']);

            return $response->withJson(ResponseFormatter::successResponse($Identity_details), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}