<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class CashAccountsController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getCashAccounts($request, $response, $args = []){
        try {
           
            $CashAccount="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetCashAccounts\": [\n                {\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NO\": \"NPMF000018001\",\n                    \"ACCOUNT_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"EXTERNAL_REFERENCE\": \"NPMMF000018001\",\n                    \"AVAILABLE_BALANCE\": 143.6,\n                    \"CURRENT_BALANCE\": 143.6,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"NPMF\",\n                    \"PRODUCT_NAME\": \"NOVA PRIME MONEY MARKET FUND\",\n                    \"DATE_OPENED\": \"2021-09-30T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2021-09-30T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2021-09-30T00:00:00Z\",\n                    \"BOA_ID\": \"GL04\",\n                    \"SOURCE_APP\": \"AM\",\n                    \"SOURCE_REF\": \"NPMMF000018001\"\n                },\n                {\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NO\": \"NMPS000018001\",\n                    \"ACCOUNT_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"EXTERNAL_REFERENCE\": \"NMMPS000018001\",\n                    \"AVAILABLE_BALANCE\": 2.6,\n                    \"CURRENT_BALANCE\": 2.6,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"NMPS\",\n                    \"PRODUCT_NAME\": \"NOVA MONEY MARKET PORTFOLIO SERVICE\",\n                    \"DATE_OPENED\": \"2019-11-30T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2021-09-29T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2021-09-29T00:00:00Z\",\n                    \"BOA_ID\": \"GL05\",\n                    \"SOURCE_APP\": \"AM\",\n                    \"SOURCE_REF\": \"NMMPS000018001\"\n                },\n                {\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NO\": \"NINN0000180001\",\n                    \"ACCOUNT_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"AVAILABLE_BALANCE\": 2203.85,\n                    \"CURRENT_BALANCE\": 2203.85,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"NINN\",\n                    \"PRODUCT_NAME\": \"NOVA INVESTMENT NOTE\",\n                    \"DATE_OPENED\": \"2019-12-19T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2020-11-17T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2020-11-17T00:00:00Z\",\n                    \"BOA_ID\": \"GL01\",\n                    \"SOURCE_APP\": \"AM\"\n                },\n                {\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NO\": \"000000180002\",\n                    \"ACCOUNT_NAME\": \"Aaa Finance And Investment Company Limited\",\n                    \"AVAILABLE_BALANCE\": 0,\n                    \"CURRENT_BALANCE\": 0,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"00\",\n                    \"PRODUCT_NAME\": \"Customers Regular Portfolios\",\n                    \"DATE_OPENED\": \"2020-04-03T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2020-04-03T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2020-04-03T00:00:00Z\",\n                    \"BOA_ID\": \"GL10\",\n                    \"SOURCE_APP\": \"ST\"\n                },\n                {\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NO\": \"SMFN0000180004\",\n                    \"ACCOUNT_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"AVAILABLE_BALANCE\": 12621025.66,\n                    \"CURRENT_BALANCE\": 12621025.66,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"SMFN\",\n                    \"PRODUCT_NAME\": \"SEPARATELY MANAGED FUND THIRD PARTY NGN\",\n                    \"DATE_OPENED\": \"2020-11-17T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2021-11-30T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2021-11-30T00:00:00Z\",\n                    \"BOA_ID\": \"GL01\",\n                    \"SOURCE_APP\": \"DD\"\n                },\n                {\n                    \"CUSTOMER_NO\": \"000018\",\n                    \"ACCOUNT_NO\": \"ARN20000180003\",\n                    \"ACCOUNT_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"AVAILABLE_BALANCE\": 0,\n                    \"CURRENT_BALANCE\": 0,\n                    \"ACCRUED_CREDIT_INTEREST\": 0,\n                    \"ACCRUED_DEBIT_INTEREST\": 0,\n                    \"CURRENCY_ID\": \"NGN\",\n                    \"CURRENCY_NAME\": \"NIGERIAN NAIRA\",\n                    \"PRODUCT_ID\": \"ARN2\",\n                    \"PRODUCT_NAME\": \"NOVA ALPHA RETURN NOTE 2\",\n                    \"DATE_OPENED\": \"2020-11-06T00:00:00Z\",\n                    \"LAST_DEBIT_DATE\": \"2020-11-17T00:00:00Z\",\n                    \"LAST_CREDIT_DATE\": \"2020-11-17T00:00:00Z\",\n                    \"BOA_ID\": \"GL01\",\n                    \"SOURCE_APP\": \"DD\"\n                }\n            ]\n        }\n    ]\n}";
            $CashAccounts= json_decode(($CashAccount));
            return $response->withJson(ResponseFormatter::successResponse($CashAccounts, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
