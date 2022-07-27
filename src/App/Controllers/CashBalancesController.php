<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class CashBalancesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getCashBalances($request, $response, $args = []){
        try {
           
            $CashBalance="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetCashAccountTransactionByCurrentDate\": [\n                {\n                    \"BUSINESS_DATE\": \"2021-09-30T00:00:00Z\",\n                    \"PROCESSING_DATE\": \"2021-09-30T00:00:00Z\",\n                    \"EFFECTIVE_DATE\": \"2021-09-30T00:00:00Z\",\n                    \"TRANSACTION_NUMBER\": 59451,\n                    \"TRANSACTION_TYPE\": \"Credit\",\n                    \"ACCOUNT_NO\": \"NPMF000018001\",\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"EXTERNAL_REFERENCE\": \"NPMMF000018001\",\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"TRANSACTION_DESCRIPTION\": \"Transfer from MMFPS to MMF\",\n                    \"TRANSACTION_AMOUNT\": 143.6,\n                    \"TRANSACTION_REFERENCE\": \"NPMMF000018001\",\n                    \"IS_REVERSED\": \"No\"\n                }\n            ]\n        }\n    ]\n}";
            $CashBalances= json_decode(($CashBalance));
            return $response->withJson(ResponseFormatter::successResponse($CashBalances, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
