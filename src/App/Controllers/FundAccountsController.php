<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class FundAccountsController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getFundAccounts($request, $response, $args = []){
        try {
           
            $FundAccount="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetFundAccounts\": [\n                {\n                    \"FUND_ID\": \"NOV-MF-000004\",\n                    \"FUND_DESCRIPTION\": \"NOVA MONEY MARKET PORTFOLIO SERVICE\",\n                    \"FUND_CURRENCY\": \"NGN\",\n                    \"IS_MONEY_MARKET_FUND\": \"1\",\n                    \"CUSTOMER_ID\": \"000001\",\n                    \"CUSTOMER_NAME\": \"ABIRI Ediri\",\n                    \"ACCOUNT_ID\": \"NMMPS000001001\",\n                    \"ACCOUNT_DESCRIPTION\": \"EDIRI ABIRI\",\n                    \"EXTERNAL_REFERENCE\": \"NOVAMMPS-08\",\n                    \"BALANCE_DATE\": \"2022-01-11T00:00:00Z\",\n                    \"TOTAL_PURCHASE_QUANTITY\": 635403,\n                    \"TOTAL_SALE_QUANTITY\": 635403,\n                    \"TOTAL_BONUS_QUANTITY\": 0,\n                    \"BALANCE_QUANTITY\": 0,\n                    \"TOTAL_PURCHASE_AMOUNT\": 635403,\n                    \"TOTAL_SALE_AMOUNT\": 635403,\n                    \"TOTAL_DIVIDEND_AMOUNT\": 4435.04,\n                    \"TOTAL_ACCRUED_INTEREST\": 4435.04,\n                    \"OUTSTANDING_ACCRUED_INTEREST\": 0,\n                    \"COST_PRICE\": 0,\n                    \"COST_VALUE\": 0,\n                    \"CURRENT_BID_PRICE\": 0,\n                    \"CURRENT_VALUE\": 0,\n                    \"GAIN_LOSS_AMOUNT\": 4435.04,\n                    \"CASH_ACCOUNT_ID\": \"NMPS000001001\",\n                    \"CASH_ACCOUNT_DESCRIPTION\": \"ABIRI Ediri\"\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000003\",\n                    \"FUND_DESCRIPTION\": \"NOVA PRIME MONEY MARKET FUND\",\n                    \"FUND_CURRENCY\": \"NGN\",\n                    \"IS_MONEY_MARKET_FUND\": \"1\",\n                    \"CUSTOMER_ID\": \"000001\",\n                    \"CUSTOMER_NAME\": \"ABIRI Ediri\",\n                    \"ACCOUNT_ID\": \"NPMMF000001001\",\n                    \"ACCOUNT_DESCRIPTION\": \"ABIRI Ediri\",\n                    \"BALANCE_DATE\": \"2022-01-11T00:00:00Z\",\n                    \"TOTAL_PURCHASE_QUANTITY\": 10001,\n                    \"TOTAL_SALE_QUANTITY\": 0,\n                    \"TOTAL_BONUS_QUANTITY\": 0,\n                    \"BALANCE_QUANTITY\": 10001,\n                    \"TOTAL_PURCHASE_AMOUNT\": 10001,\n                    \"TOTAL_SALE_AMOUNT\": 0,\n                    \"TOTAL_DIVIDEND_AMOUNT\": 1.05,\n                    \"TOTAL_ACCRUED_INTEREST\": 20.51,\n                    \"OUTSTANDING_ACCRUED_INTEREST\": 19.46,\n                    \"COST_PRICE\": 1,\n                    \"COST_VALUE\": 10001,\n                    \"CURRENT_BID_PRICE\": 1,\n                    \"CURRENT_VALUE\": 10001,\n                    \"GAIN_LOSS_AMOUNT\": 1.05,\n                    \"CASH_ACCOUNT_ID\": \"NPMF000001001\",\n                    \"CASH_ACCOUNT_DESCRIPTION\": \"ABIRI Ediri\"\n                }\n            ]\n        }\n    ]\n}";
            $FundAccounts= json_decode(($FundAccount));
            return $response->withJson(ResponseFormatter::successResponse($FundAccounts,));
           
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


    
}


  
