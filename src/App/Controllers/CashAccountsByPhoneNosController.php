<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class CashAccountsByPhoneNosController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getCashAccountsByPhoneNos($request, $response, $args = []){
        try {
           
            $CashAccountsByPhoneNo="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetCashAccountsByPhoneNo\": [\n                {\n                    \"CUSTOMER_NO\": \"000001\",\n                    \"ACCOUNT_NO\": \"NMPS000001001\",\n                    \"ACCOUNT_NAME\": \"ABIRI Ediri\",\n                    \"EXTERNAL_REFERENCE\": \"NOVAMMPS-08\",\n                    \"AVAILABLE_BALANCE\": 3.54,\n                    \"CURRENT_BALANCE\": 3.54,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"NMPS\",\n                    \"PRODUCT_NAME\": \"NOVA MONEY MARKET PORTFOLIO SERVICE\",\n                    \"DATE_OPENED\": \"2019-11-30T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2021-09-29T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2021-09-29T00:00:00Z\",\n                    \"BOA_ID\": \"GL05\",\n                    \"SOURCE_APP\": \"AM\",\n                    \"SOURCE_REF\": \"NMMPS000001001\",\n                    \"CUSTOMER_ID\": \"000001\",\n                    \"CREATED_ON\": \"2019-11-30T00:00:00Z\",\n                    \"CUSTOMER_TYPE\": \"Individual\",\n                    \"IS_MINOR\": \"No\",\n                    \"IS_STAFF\": \"Yes\",\n                    \"KYC_COMPLETED\": \"No\",\n                    \"IS_BLACKLISTED\": \"No\",\n                    \"BLACKLISTED_ON\": \"0\",\n                    \"CUSTOMER_NAME\": \"ABIRI Ediri\",\n                    \"FIRST_NAME\": \"EDIRI\",\n                    \"LAST_NAME\": \"ABIRI\",\n                    \"BIRTH_DATE\": \"1977-11-27T00:00:00Z\",\n                    \"CURRENT_AGE\": 45,\n                    \"NATIONALITY\": \"NIGERIA\",\n                    \"CUSTOMER_ADDRESS\": \"19 ROAD 3 WESTEND ESTATE IKOTA VILLA, LEKKI, NIGERIA\",\n                    \"CUSTOMER_CITY\": \"LEKKI\",\n                    \"CUSTOMER_COUNTRY\": \"NIGERIA\",\n                    \"EMAIL_ADDRESS\": \"ENYGMAKRAFT@YAHOO.COM\",\n                    \"PHONE_NUMBERS\": \"08064007048\",\n                    \"BANK_BVN\": \"22217535030\",\n                    \"KYC_STATUS\": \"Pending\",\n                    \"LOGIN_ID\": \"C2100001\"\n                },\n                {\n                    \"CUSTOMER_NO\": \"000001\",\n                    \"ACCOUNT_NO\": \"NPMF000001001\",\n                    \"ACCOUNT_NAME\": \"ABIRI Ediri\",\n                    \"EXTERNAL_REFERENCE\": \"NOVAMMPS-08\",\n                    \"AVAILABLE_BALANCE\": 683.14,\n                    \"CURRENT_BALANCE\": 683.14,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"NPMF\",\n                    \"PRODUCT_NAME\": \"NOVA PRIME MONEY MARKET FUND\",\n                    \"DATE_OPENED\": \"2021-09-29T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2021-10-05T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2021-10-05T00:00:00Z\",\n                    \"BOA_ID\": \"GL04\",\n                    \"SOURCE_APP\": \"AM\",\n                    \"SOURCE_REF\": \"NPMMF000001001\",\n                    \"CUSTOMER_ID\": \"000001\",\n                    \"CREATED_ON\": \"2019-11-30T00:00:00Z\",\n                    \"CUSTOMER_TYPE\": \"Individual\",\n                    \"IS_MINOR\": \"No\",\n                    \"IS_STAFF\": \"Yes\",\n                    \"KYC_COMPLETED\": \"No\",\n                    \"IS_BLACKLISTED\": \"No\",\n                    \"BLACKLISTED_ON\": \"0\",\n                    \"CUSTOMER_NAME\": \"ABIRI Ediri\",\n                    \"FIRST_NAME\": \"EDIRI\",\n                    \"LAST_NAME\": \"ABIRI\",\n                    \"BIRTH_DATE\": \"1977-11-27T00:00:00Z\",\n                    \"CURRENT_AGE\": 45,\n                    \"NATIONALITY\": \"NIGERIA\",\n                    \"CUSTOMER_ADDRESS\": \"19 ROAD 3 WESTEND ESTATE IKOTA VILLA, LEKKI, NIGERIA\",\n                    \"CUSTOMER_CITY\": \"LEKKI\",\n                    \"CUSTOMER_COUNTRY\": \"NIGERIA\",\n                    \"EMAIL_ADDRESS\": \"ENYGMAKRAFT@YAHOO.COM\",\n                    \"PHONE_NUMBERS\": \"08064007048\",\n                    \"BANK_BVN\": \"22217535030\",\n                    \"KYC_STATUS\": \"Pending\",\n                    \"LOGIN_ID\": \"C2100001\"\n                }\n            ]\n        }\n    ]\n}";
            $CashAccountsByPhoneNos= json_decode(($CashAccountsByPhoneNo));
            return $response->withJson(ResponseFormatter::successResponse($CashAccountsByPhoneNo, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
