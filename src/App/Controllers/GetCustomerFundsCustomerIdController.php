<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\GetCustomerFundsCustomerId;

class GetCustomerFundsCustomerIdController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getGetCustomerFundsCustomerIds($request, $response, $args = []){
        try {
            $GetCustomerFundsCustomerIds = new GetCustomerFundsCustomerId();
            $GetCustomerFundsCustomerIds->CustomerFunds = 1;
            

 return $response->withJson(ResponseFormatter::successResponse($GetCustomerFundsCustomerIds,'GetCustomerFundsCustomerIds'));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getGetCustomerFundsCustomerId($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $GetCustomerFundsCustomerIds= GetCustomerFundsCustomerId::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($GetCustomerFundsCustomerIds,'GetCustomerFundsCustomerIds'));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createGetCustomerFundsCustomerId($request, $response, $args = []){
        try {
            $GetCustomerFundsCustomerId_details =  $request->getParsedBody();
            $GetCustomerFundsCustomerIds = new GetCustomerFundsCustomerId();
            $GetCustomerFundsCustomerIds->setCustomerFunds ($GetCustomerFundsCustomerId_details['Yemen']);
            
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($GetCustomerFundsCustomerIds,'GetCustomerFundsCustomerIds'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}