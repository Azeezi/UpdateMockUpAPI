<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class CustomersController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getCustomers($request, $response, $args = []){
        try {
           
            $Customer="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetCustomer\": [\n                {\n                    \"CUSTOMER_ID\": \"000018\",\n                    \"CREATED_ON\": \"30-NOV-2019\",\n                    \"CUSTOMER_TYPE\": \"Corporate\",\n                    \"IS_MINOR\": \"No\",\n                    \"IS_STAFF\": \"No\",\n                    \"KYC_COMPLETED\": \"No\",\n                    \"IS_BLACKLISTED\": \"No\",\n                    \"BLACKLISTED_ON\": \"0\",\n                    \"CUSTOMER_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"CUSTOMER_ADDRESS\": \"3 KEYSTONE BANK CRESENT , OFF ADEYEMOALAKIJA, STREET, VICTORIA ISLAND  LAGOS, LAGOS, NIGERIA\",\n                    \"CUSTOMER_CITY\": \"LAGOS\",\n                    \"CUSTOMER_COUNTRY\": \"NIGERIA\",\n                    \"EMAIL_ADDRESS\": \"C.makata@aaafinancegroup.com\",\n                    \"PHONE_NUMBERS\": \"09070689999\",\n                    \"EXTERNAL_REFERENCE\": \"C0003\",\n                    \"KYC_STATUS\": \"Pending\"\n                }\n            ]\n        }\n    ]\n}";
            $Customers= json_decode($Customer);
            return $response->withJson(ResponseFormatter::successResponse($Customers, 'result'));
           
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


  
