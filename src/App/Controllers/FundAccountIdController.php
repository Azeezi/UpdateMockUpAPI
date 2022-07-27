<?php
namespace Mock\Controllers;
use Mock\Models\FundAccount;
use Mock\classes\ResponseFormatter;
use Mock\Models\FundAccountId;

class FundAccountIdController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getFundAccountIds($request, $response, $args = []){
        try {
            $FundAccountIds= new FundAccountId();
            $FundAccountIds->id = 1;
            $FundAccountIds->FUND_DESCRIPTION = 'NOTE';
            $FundAccountIds->FUND_CURRENCY = 'NAIRA';
            $FundAccountIds->IS_MONEY_MARKET_FUND = 'FULL PAYMENT';
            $FundAccountIds->CUSTOMER_ID = '12-07-2022';
            $FundAccountIds->CUSTOMER_NAME = 'NOTE';
            $FundAccountIds->ACCOUNT_ID = 'NAIRA';
            $FundAccountIds->ACCOUNT_DESCRIPTION = 'FULL PAYMENT';
            $FundAccountIds->REGISTRAR_ACCOUNT_ID = '12-07-2022';
            $FundAccountIds->BALANCE_DATE = 'NOTE';
            $FundAccountIds->TOTAL_PURCHASE_QUANTITY = 'NAIRA';
            $FundAccountIds->TOTAL_SALE_QUANTITY = 'FULL PAYMENT';
            $FundAccountIds->TOTAL_BONUS_QUANTITY = '12-07-2022';
            $FundAccountIds->BALANCE_QUANTITY = 'NOTE';
            $FundAccountIds->TOTAL_PURCHASE_AMOUNT = 'NAIRA';
            $FundAccountIds->TOTAL_SALE_AMOUNT = 'FULL PAYMENT';
            $FundAccountIds->TOTAL_DIVIDEND_AMOUNT = '12-07-2022';
            $FundAccountIds->TOTAL_ACCRUED_INTEREST = 'NOTE';
            $FundAccountIds->OUTSTANDING_ACCRUED_INTEREST = 'NAIRA';
            $FundAccountIds->COST_PRICE = 'FULL PAYMENT';
            $FundAccountIds->COST_VALUE = '12-07-2022';
            $FundAccountIds->CURRENT_BID_PRICE = 'NOTE';
            $FundAccountIds->CURRENT_VALUE = 'NAIRA';
            $FundAccountIds->GAIN_LOSS_AMOUNT = 'FULL PAYMENT';
            $FundAccountIds->CASH_ACCOUNT_ID = '12-07-2022';
            $FundAccountIds->CASH_ACCOUNT_DESCRIPTION = '12-07-2022';
  return $response->withJson(ResponseFormatter::successResponse($FundAccountIds ,'FundAccountId'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }


    public function getGetFund($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $FundAccountIds = FundAccountId::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($FundAccountIds ,'FundAccountId'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }


    public function createFundAccountId($request, $response, $args = []){
        try {
            $FundAccountId_details =  $request->getParsedBody();
            //$Banks = new Banks(1, $Bank_details['BANK_CD'],$Bank_details['BANK_DSC'],$Bank_details['BANK_TYPE_DSC']);
            $FundAccountIds = new FundAccountId();
            $FundAccountIds->setId(1);
            $FundAccountIds->setFUND_DESCRIPTION($FundAccountId_details['FUND_DESCRIPTION']);
            $FundAccountIds->setFUND_CURRENCY($FundAccountId_details['FUND_CURRENCY']);
            $FundAccountIds->setIS_MONEY_MARKET_FUND($FundAccountId_details['IS_MONEY_MARKET_FUND']);
            $FundAccountIds->setCUSTOMER_ID($FundAccountId_details['CUSTOMER_ID']);
            $FundAccountIds->setCUSTOMER_NAME($FundAccountId_details['CUSTOMER_NAME']);
            $FundAccountIds->setACCOUNT_ID($FundAccountId_details['ACCOUNT_ID']);
            $FundAccountIds->setACCOUNT_DESCRIPTION($FundAccountId_details['ACCOUNT_DESCRIPTION']);
            $FundAccountIds->REGISTRAR_ACCOUNT_ID($FundAccountId_details['REGISTRAR_ACCOUNT_ID']);
            $FundAccountIds->setBALANCE_DATE($FundAccountId_details['BALANCE_DATE']);
            $FundAccountIds->setTOTAL_PURCHASE_QUANTITY($FundAccountId_details['TOTAL_PURCHASE_QUANTITY']);
            $FundAccountIds->setTOTAL_SALE_QUANTITY($FundAccountId_details['TOTAL_SALE_QUANTITY']);
            $FundAccountIds->setTOTAL_BONUS_QUANTITY($FundAccountId_details['TOTAL_BONUS_QUANTITY']);
            $FundAccountIds->setBALANCE_QUANTITY($FundAccountId_details['BALANCE_QUANTITY']);
            $FundAccountIds->setTOTAL_PURCHASE_AMOUNT($FundAccountId_details['TOTAL_PURCHASE_AMOUNT']);
            $FundAccountIds->setTOTAL_SALE_AMOUNT($FundAccountId_details['TOTAL_SALE_AMOUNT']);
            $FundAccountIds->setTOTAL_DIVIDEND_AMOUNT($FundAccountId_details['TOTAL_DIVIDEND_AMOUNT']);
            $FundAccountIds->setTOTAL_ACCRUED_INTEREST($FundAccountId_details['TOTAL_ACCRUED_INTEREST']);
            $FundAccountIds->setOUTSTANDING_ACCRUED_INTEREST($FundAccountId_details['OUTSTANDING_ACCRUED_INTEREST']);
            $FundAccountIds->setCOST_PRICE($FundAccountId_details['COST_PRICE']);
            $FundAccountIds->setCOST_VALUE($FundAccountId_details['COST_VALUE']);
            $FundAccountIds->CURRENT_BID_PRICE($FundAccountId_details['CURRENT_BID_PRICE']);
            $FundAccountIds->setCURRENT_VALUE($FundAccountId_details['CURRENT_VALUE']);
            $FundAccountIds->setGAIN_LOSS_AMOUNT($FundAccountId_details['GAIN_LOSS_AMOUNT']);
            $FundAccountIds->seCASH_ACCOUNT_ID($FundAccountId_details['CASH_ACCOUNT_ID']);
            $FundAccountIds->setCASH_ACCOUNT_DESCRIPTION($FundAccountId_details['CASH_ACCOUNT_DESCRIPTION']);

//$create = Bank::create($Bank_details);
            return $response->withJson(ResponseFormatter::successResponse($FundAccountIds ,'FundAccountId'), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }
    

}


  