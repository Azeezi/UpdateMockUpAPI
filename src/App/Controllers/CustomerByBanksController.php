<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class CustomerByBanksController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getCustomerByBanks($request, $response, $args = []){
        try {
           
            $CustomerByBank="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetCustomerByBank\": [\n                {\n                    \"CUSTOMER_ID\": \"000001\",\n                    \"CREATED_ON\": \"30-NOV-2019\",\n                    \"CUSTOMER_TYPE\": \"Individual\",\n                    \"IS_MINOR\": \"No\",\n                    \"IS_STAFF\": \"Yes\",\n                    \"KYC_COMPLETED\": \"No\",\n                    \"IS_BLACKLISTED\": \"No\",\n                    \"BLACKLISTED_ON\": \"0\",\n                    \"CUSTOMER_NAME\": \"ABIRI Ediri\",\n                    \"FIRST_NAME\": \"EDIRI\",\n                    \"LAST_NAME\": \"ABIRI\",\n                    \"BIRTH_DATE\": \"27-NOV-1977\",\n                    \"CURRENT_AGE\": \"45.00\",\n                    \"NATIONALITY\": \"NIGERIA\",\n                    \"CUSTOMER_ADDRESS\": \"19 ROAD 3 WESTEND ESTATE IKOTA VILLA, LEKKI, NIGERIA\",\n                    \"CUSTOMER_CITY\": \"LEKKI\",\n                    \"CUSTOMER_COUNTRY\": \"NIGERIA\",\n                    \"EMAIL_ADDRESS\": \"ENYGMAKRAFT@YAHOO.COM\",\n                    \"PHONE_NUMBERS\": \"08064007048\",\n                    \"BANK_BVN\": \"22217535030\",\n                    \"EXTERNAL_REFERENCE\": \"NOVAMMPS-08\",\n                    \"KYC_STATUS\": \"Pending\",\n                    \"LOGIN_ID\": \"C2100001\"\n                }\n            ]\n        }\n    ]\n}";
            $CustomerByBanks=json_decode(($CustomerByBank));
            return $response->withJson(ResponseFormatter::successResponse($CustomerByBanks, 'result'));
           
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


  
