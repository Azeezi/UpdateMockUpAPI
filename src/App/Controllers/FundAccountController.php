<?php
namespace Mock\Controllers;
use Mock\Models\FundAccount;
use Mock\classes\ResponseFormatter;

class FundAccountController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
    
    }

    public function getFundAccount($request, $response, $args = []){
        try {
          $FundAccounts="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetFundAccount\": [\n                {\n                    \"FUND_ID\": \"NOV-MF-000004\",\n                    \"FUND_DESCRIPTION\": \"NOVA MONEY MARKET PORTFOLIO SERVICE\",\n                    \"FUND_CURRENCY\": \"NGN\",\n                    \"IS_MONEY_MARKET_FUND\": \"1\",\n                    \"CUSTOMER_ID\": \"000018\",\n                    \"CUSTOMER_NAME\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"ACCOUNT_ID\": \"NMMPS000018001\",\n                    \"ACCOUNT_DESCRIPTION\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\",\n                    \"EXTERNAL_REFERENCE\": \"C0003\",\n                    \"BALANCE_DATE\": \"2022-01-11T00:00:00Z\",\n                    \"TOTAL_PURCHASE_QUANTITY\": 779154796,\n                    \"TOTAL_SALE_QUANTITY\": 779154796,\n                    \"TOTAL_BONUS_QUANTITY\": 0,\n                    \"BALANCE_QUANTITY\": 0,\n                    \"TOTAL_PURCHASE_AMOUNT\": 779154796,\n                    \"TOTAL_SALE_AMOUNT\": 779154796,\n                    \"TOTAL_DIVIDEND_AMOUNT\": 3197096.93,\n                    \"TOTAL_ACCRUED_INTEREST\": 3197096.93,\n                    \"OUTSTANDING_ACCRUED_INTEREST\": 0,\n                    \"COST_PRICE\": 0,\n                    \"COST_VALUE\": 0,\n                    \"CURRENT_BID_PRICE\": 0,\n                    \"CURRENT_VALUE\": 0,\n                    \"GAIN_LOSS_AMOUNT\": 3197096.93,\n                    \"CASH_ACCOUNT_ID\": \"NMPS000018001\",\n                    \"CASH_ACCOUNT_DESCRIPTION\": \"AAA FINANCE AND INVESTMENT COMPANY LIMITED\"\n                }\n            ]\n        }\n    ]\n}";
          $FundAccount= json_decode($FundAccounts);
            
  return $response->withJson(ResponseFormatter::successResponse($FundAccount));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }


    public function getGetFund($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $FundAccounts = FundAccount::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($FundAccounts ,'FundAccount'), 200);
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }


    public function createFundAccount($request, $response, $args = []){
        try {
            $FundAccount_details =  $request->getParsedBody();
            //$Banks = new Banks(1, $Bank_details['BANK_CD'],$Bank_details['BANK_DSC'],$Bank_details['BANK_TYPE_DSC']);
            $FundAccounts = new FundAccount();
            $FundAccounts->setId(1);
            $FundAccounts->setFUND_DESCRIPTION($FundAccount_details['FUND_DESCRIPTION']);
            $FundAccounts->setFUND_CURRENCY($FundAccount_details['FUND_CURRENCY']);
            $FundAccounts->setIS_MONEY_MARKET_FUND($FundAccount_details['IS_MONEY_MARKET_FUND']);
            $FundAccounts->setCUSTOMER_ID($FundAccount_details['CUSTOMER_ID']);
            $FundAccounts->setCUSTOMER_NAME($FundAccount_details['CUSTOMER_NAME']);
            $FundAccounts->setACCOUNT_ID($FundAccount_details['ACCOUNT_ID']);
            $FundAccounts->setACCOUNT_DESCRIPTION($FundAccount_details['ACCOUNT_DESCRIPTION']);
            $FundAccounts->REGISTRAR_ACCOUNT_ID($FundAccount_details['REGISTRAR_ACCOUNT_ID']);
            $FundAccounts->setBALANCE_DATE($FundAccount_details['BALANCE_DATE']);
            $FundAccounts->setTOTAL_PURCHASE_QUANTITY($FundAccount_details['TOTAL_PURCHASE_QUANTITY']);
            $FundAccounts->setTOTAL_SALE_QUANTITY($FundAccount_details['TOTAL_SALE_QUANTITY']);
            $FundAccounts->setTOTAL_BONUS_QUANTITY($FundAccount_details['TOTAL_BONUS_QUANTITY']);
            $FundAccounts->setBALANCE_QUANTITY($FundAccount_details['BALANCE_QUANTITY']);
            $FundAccounts->setTOTAL_PURCHASE_AMOUNT($FundAccount_details['TOTAL_PURCHASE_AMOUNT']);
            $FundAccounts->setTOTAL_SALE_AMOUNT($FundAccount_details['TOTAL_SALE_AMOUNT']);
            $FundAccounts->setTOTAL_DIVIDEND_AMOUNT($FundAccount_details['TOTAL_DIVIDEND_AMOUNT']);
            $FundAccounts->setTOTAL_ACCRUED_INTEREST($FundAccount_details['TOTAL_ACCRUED_INTEREST']);
            $FundAccounts->setOUTSTANDING_ACCRUED_INTEREST($FundAccount_details['OUTSTANDING_ACCRUED_INTEREST']);
            $FundAccounts->setCOST_PRICE($FundAccount_details['COST_PRICE']);
            $FundAccounts->setCOST_VALUE($FundAccount_details['COST_VALUE']);
            $FundAccounts->CURRENT_BID_PRICE($FundAccount_details['CURRENT_BID_PRICE']);
            $FundAccounts->setCURRENT_VALUE($FundAccount_details['CURRENT_VALUE']);
            $FundAccounts->setGAIN_LOSS_AMOUNT($FundAccount_details['GAIN_LOSS_AMOUNT']);
            $FundAccounts->seCASH_ACCOUNT_ID($FundAccount_details['CASH_ACCOUNT_ID']);
            $FundAccounts->setCASH_ACCOUNT_DESCRIPTION($FundAccount_details['CASH_ACCOUNT_DESCRIPTION']);

//$create = Bank::create($Bank_details);
            return $response->withJson(ResponseFormatter::successResponse($FundAccounts ,'FundAccount'), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}


  