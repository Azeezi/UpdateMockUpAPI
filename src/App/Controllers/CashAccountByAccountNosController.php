<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class CashAccountByAccountNosController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getCashAccountByAccountNos($request, $response, $args = []){
        try {
           
            $CashAccountByAccountNo="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetCashAccountByAccountNo\": [\n                {\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NO\": \"NPMF000018001\",\n                    \"ACCOUNT_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"EXTERNAL_REFERENCE\": \"NPMMF000018001\",\n                    \"AVAILABLE_BALANCE\": 143.6,\n                    \"CURRENT_BALANCE\": 143.6,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"NPMF\",\n                    \"PRODUCT_NAME\": \"NOVA PRIME MONEY MARKET FUND\",\n                    \"DATE_OPENED\": \"2021-09-30T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2021-09-30T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2021-09-30T00:00:00Z\",\n                    \"BOA_ID\": \"GL04\",\n                    \"SOURCE_APP\": \"AM\",\n                    \"SOURCE_REF\": \"NPMMF000018001\"\n                }\n            ]\n        }\n    ]\n}";
            $CashAccountByAccountNos= json_decode(($CashAccountByAccountNo));
            return $response->withJson(ResponseFormatter::successResponse($CashAccountByAccountNos, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
