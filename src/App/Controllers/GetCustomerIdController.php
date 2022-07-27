<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\GetCustomerId;

class GetCustomerIdController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getGetCustomerIds($request, $response, $args = []){
        try {
            $GetCustomerIds = new GetCustomerId();
            $GetCustomerIds->CUSTOMER_ID = 1;
            $GetCustomerIds->CREATED_ON = '001';
            $GetCustomerIds->CUSTOMER_TYPE = 'Regular';
            $GetCustomerIds->IS_MINOR = 'Yeye';
            $GetCustomerIds->IS_STAFF = '001';
            $GetCustomerIds->KYC_COMPLETED = 'NGN';
            $GetCustomerIds->IS_BLACKLISTED = 'Yeye';
            $GetCustomerIds->BLACKLISTED_ON = '001';
            $GetCustomerIds->CUSTOMER_NAME = 'NGN';
            $GetCustomerIds->FIRST_NAME = 'Yeye';
            $GetCustomerIds->LAST_NAME = '001';
            $GetCustomerIds->BIRTH_DATE = 'NGN';
            $GetCustomerIds->CURRENT_AGE = 'Yeye';
            $GetCustomerIds->NATIONALITY = '001';
            $GetCustomerIds->CUSTOMER_ADDRESS = 'NGN';
            $GetCustomerIds->EMAIL_ADDRESS = 'Yeye';
            $GetCustomerIds->PHONE_NUMBERS = 'Yeye';

 return $response->withJson(ResponseFormatter::successResponse($GetCustomerIds,'GetCustomerIds'));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getGetCustomerId($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $GetCustomerIds= GetCustomerId::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($GetCustomerIds,'GetCustomerId'));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createGetCustomerId($request, $response, $args = []){
        try {
            $GetCustomerId_details =  $request->getParsedBody();
            $GetCustomerIds = new GetCustomerId();
            $GetCustomerIds->setCUSTOMER_ID ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setCREATED_ON($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setCUSTOMER_TYPE ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setIS_MINOR ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setIS_STAFF($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setKYC_COMPLETED ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setIS_BLACKLISTED ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setBLACKLISTED_ON ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setCUSTOMER_NAME ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setFIRST_NAME ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setLAST_NAME ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setBIRTH_DATE ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setCURRENT_AGE ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setNATIONALITY ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setCUSTOMER_ADDRESS($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setEMAIL_ADDRESS ($GetCustomerId_details['Yemen']);
            $GetCustomerIds->setPHONE_NUMBERS ($GetCustomerId_details['Yemen']);
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($GetCustomerIds,'GetCustomerId'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}