<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class CustomerDetailsController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getCustomerDetails($request, $response, $args = []){
        try {
           
            $CustomerDetail="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetCustomerDetails\": [\n                {\n                    \"CUS_K\": \"1,006,573.00\",\n                    \"NOK_K\": \"1,006,571.00\",\n                    \"CREATED_ON\": \"30-NOV-2019\",\n                    \"CUSTOMER_ID\": \"000001\",\n                    \"CUSTOMER_TYPE\": \"Individual\",\n                    \"IS_STAFF\": \"Yes\",\n                    \"IS_MINOR\": \"No\",\n                    \"IS_KYC\": \"0\",\n                    \"IS_KYC_STATUS\": \"Pending\",\n                    \"KYC_COMPLETED\": \"No\",\n                    \"IS_BLACKLISTED\": \"No\",\n                    \"TITLE_NAME\": \"Mr.\",\n                    \"LAST_NAME\": \"ABIRI\",\n                    \"FIRST_NAME\": \"EDIRI\",\n                    \"CUSTOMER_TITLE\": \"Mr.\",\n                    \"GENDER_NAME\": \"Male\",\n                    \"MARITAL_STATUS_CD\": \"Married\",\n                    \"BIRTH_DATE\": \"27-NOV-1977\",\n                    \"NATIONALITY_CD\": \"NIGERIA\",\n                    \"MOBILE_PHONE_NO\": \"08064007048\",\n                    \"PRIMARY_EMAIL_ADDRESS\": \"ENYGMAKRAFT@YAHOO.COM\",\n                    \"ADDRESS_STREET\": \"19 ROAD 3 WESTEND ESTATE IKOTA VILLA\",\n                    \"ADDRESS_CITY\": \"LEKKI\",\n                    \"ADDRESS_COUNTRY\": \"NIGERIA\",\n                    \"ADDRESS_COUNTRY_CD\": \"NIGERIA\",\n                    \"BANK_ID\": \"NOVA\",\n                    \"BANK_NAME\": \"NOVA Merchant Bank\",\n                    \"BANK_ACCOUNT_NAME\": \"Abiri Ediri\",\n                    \"BANK_ACCOUNT_NO\": \"1003010146\",\n                    \"BANK_ADDRESS_DETAILS\": \" \",\n                    \"BANK_BVN_NO\": \"22217535030\",\n                    \"NEXT_OF_KIN_EXISTS_YN\": \"1\",\n                    \"NEXT_OF_KIN_TITLE_NAME\": \"Mrs\",\n                    \"NEXT_OF_KIN_LAST_NAME\": \"ABIRI\",\n                    \"NEXT_OF_KIN_FIRST_NAME\": \"UZOMA\",\n                    \"NEXT_OF_KIN_GENDER_CD\": \"Female\",\n                    \"NEXT_OF_KIN_RELATIONSHIP_NAME\": \"Spouse\",\n                    \"EXTERNAL_REFERENCE1\": \"NOVAMMPS-08\",\n                    \"CUSTOMER_NAME\": \"ABIRI Ediri\",\n                    \"CURRENT_AGE\": \"45.00\",\n                    \"NATIONALITY\": \"NIGERIA\",\n                    \"BANK_BVN\": \"22217535030\",\n                    \"LOGIN_ID\": \"C2100001\"\n                }\n            ]\n        }\n    ]\n}";
            $CustomerDetails= json_decode(($CustomerDetail));
            return $response->withJson(ResponseFormatter::successResponse($CustomerDetails, 'result'));
           
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


  
