<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class UnsubscribedFundsController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getUnsubscribedFunds($request, $response, $args = []){
        try {
           
            $UnsubscribedFund="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetUnsubscribedFunds\": [\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"FUND_CURRENCY\": \"USD\",\n                    \"FUND_TYPE\": \"Mutual Fund\",\n                    \"DATE_OPENED\": \"2019-11-11T00:00:00Z\",\n                    \"MINIMUM_INVESTMENT_AMOUNT\": 1,\n                    \"SUBSEQUENT_MULTIPLES\": 1,\n                    \"OFFER_PRICE\": 100,\n                    \"IS_MONEY_MARKET\": \"0\",\n                    \"INVESTMENT_BASIS\": \"Units\"\n                }\n            ]\n        }\n    ]\n}";
            $UnsubscribedFunds= json_decode($UnsubscribedFund);
            return $response->withJson(ResponseFormatter::successResponse($UnsubscribedFunds, 'result'));
           
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


  
