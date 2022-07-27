<?php
namespace Mock\Controllers;
// use Mock\Models\GetFund;
use Mock\classes\ResponseFormatter;
use Mock\Controllers\ActionController;

class FundController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getFund($request, $response, $args = []){
        try {
            $Funds= "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetFunds\": [\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"FUND_CURRENCY\": \"USD\",\n                    \"FUND_TYPE\": \"Mutual Fund\",\n                    \"DATE_OPENED\": \"2019-11-11T00:00:00Z\",\n                    \"MINIMUM_INVESTMENT_AMOUNT\": 1,\n                    \"SUBSEQUENT_MULTIPLES\": 1,\n                    \"OFFER_PRICE\": 100,\n                    \"IS_MONEY_MARKET\": \"0\",\n                    \"INVESTMENT_BASIS\": \"Units\"\n                }\n            ]\n        }\n    ]\n}";
            $Fund = json_decode(($Funds));

            return $response->withJson(ResponseFormatter::successResponse($Fund, ));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }


    // public function getGetFund($request, $response, $args = []){   
    //     try {
    //         $id = $args['id'];
    //         $GetFunds = GetFund::where('id', '=', $id)->get();
    //         return $response->withJson(ResponseFormatter::successResponse($GetFunds ,'GetFund'));

    //     } catch (\Exception $e) {
    //         return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
    //     }
    // }


    public function createGetFund($request, $response, $args = []){
        try {
            $GetFund_details =  $request->getParsedBody();
            //$Banks = new Banks(1, $Bank_details['BANK_CD'],$Bank_details['BANK_DSC'],$Bank_details['BANK_TYPE_DSC']);
            $GetFunds = new GetFund();
            $GetFunds->setId(1);
            $GetFunds->setFUND_DESCRIPTION($GetFund_details['FUND_DESCRIPTION']);
            $GetFunds->setFUND_CURRENCY($GetFund_details['FUND_CURRENCY']);
            $GetFunds->setFUND_TYPE($GetFund_details['FUND_TYPE']);
            $GetFunds->setDATE_OPENED($GetFund_details['DATE_OPENED']);
            //$create = Bank::create($Bank_details);
            return $response->withJson(ResponseFormatter::successResponse($GetFunds ,'GetFunds'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}


  

