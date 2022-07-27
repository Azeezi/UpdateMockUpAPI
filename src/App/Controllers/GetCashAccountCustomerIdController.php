<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\GetCashAccountCustomerId;

class GetCashAccountCustomerIdController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getGetCashAccountCustomerIds($request, $response, $args = []){
        try {
            $GetCashAccountCustomerIds = new GetCashAccountCustomerId();
            $GetCashAccountCustomerIds->CUSTOMER_NO = 1;
            $GetCashAccountCustomerIds->ACCOUNT_NO = '001';
            $GetCashAccountCustomerIds->ACCOUNT_NAME = 'Regular';
            $GetCashAccountCustomerIds->AVAILABLE_BALANCE = 'Yeye';
            $GetCashAccountCustomerIds->CURRENT_BALANCE = '001';
            $GetCashAccountCustomerIds->ACCRUED_CREDIT_INTEREST = 'NGN';
            $GetCashAccountCustomerIds->ACCRUED_DEBIT_INTEREST = 'Yeye';
            $GetCashAccountCustomerIds->CURRENCY_ID = '001';
            $GetCashAccountCustomerIds->CURRENCY_NAME = 'NGN';
            $GetCashAccountCustomerIds->PRODUCT_ID = 'Yeye';
            $GetCashAccountCustomerIds->PRODUCT_NAME = '001';
            $GetCashAccountCustomerIds->DATE_OPENED = 'NGN';
            $GetCashAccountCustomerIds->LAST_DEBIT_DATE = 'Yeye';
            $GetCashAccountCustomerIds->LAST_CREDIT_DATE = '001';
            
 return $response->withJson(ResponseFormatter::successResponse($GetCashAccountCustomerIds ,'GetCashAccountCustomerIds'));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getGetCustomerId($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $GetCashAccountCustomerIds= GetCashAccountCustomerId::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($GetCashAccountCustomerIds ,'GetCashAccountCustomerIds'));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createGetCashAccountCustomerId($request, $response, $args = []){
        try {
            $GetCashAccountCustomerId_details =  $request->getParsedBody();
            $GetCashAccountCustomerIds = new GetCashAccountCustomerId();
            $GetCashAccountCustomerIds->setCUSTOMER_NO($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setACCOUNT_NO ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setACCOUNT_NAME ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setAVAILABLE_BALANCE ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setCURRENT_BALANCE ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setACCRUED_CREDIT_INTEREST ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setACCRUED_DEBIT_INTEREST ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setCURRENCY_ID ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setCURRENCY_NAME($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setPRODUCT_ID ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setPRODUCT_NAME ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setDATE_OPENED ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setLAST_DEBIT_DATE ($GetCashAccountCustomerId_details['yemen']);
            $GetCashAccountCustomerIds->setLAST_CREDIT_DATE ($GetCashAccountCustomerId_details['yemen']);
            
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($GetCashAccountCustomerIds ,'GetCashAccountCustomerIds'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}