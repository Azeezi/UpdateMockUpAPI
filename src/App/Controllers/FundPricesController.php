<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class FundPricesController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getFundPrices($request, $response, $args = []){
        try {
           
            $FundPrice="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetFundPrices\": [\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-01T00:00:00Z\",\n                    \"BID_PRICE\": 0.97187142,\n                    \"OFFER_PRICE\": 0.97187142\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-02T00:00:00Z\",\n                    \"BID_PRICE\": 0.97203898,\n                    \"OFFER_PRICE\": 0.97203898\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-03T00:00:00Z\",\n                    \"BID_PRICE\": 0.97220643,\n                    \"OFFER_PRICE\": 0.97220643\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-04T00:00:00Z\",\n                    \"BID_PRICE\": 0.97318668,\n                    \"OFFER_PRICE\": 0.97318668\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-05T00:00:00Z\",\n                    \"BID_PRICE\": 0.97387553,\n                    \"OFFER_PRICE\": 0.97387553\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-06T00:00:00Z\",\n                    \"BID_PRICE\": 0.97328935,\n                    \"OFFER_PRICE\": 0.97328935\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-07T00:00:00Z\",\n                    \"BID_PRICE\": 0.95999241,\n                    \"OFFER_PRICE\": 0.95999241\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-08T00:00:00Z\",\n                    \"BID_PRICE\": 0.96015993,\n                    \"OFFER_PRICE\": 0.96015993\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-09T00:00:00Z\",\n                    \"BID_PRICE\": 0.96032757,\n                    \"OFFER_PRICE\": 0.96032757\n                },\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-10T00:00:00Z\",\n                    \"BID_PRICE\": 0.96010592,\n                    \"OFFER_PRICE\": 0.96010592\n                }\n            ]\n        }\n    ]\n}";
            $FundPrices= json_decode(($FundPrice));
            
            return $response->withJson(ResponseFormatter::successResponse($FundPrices, ));
        
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }
        // } catch (\Exception $e) {
        //     return $response->withJson(ResponseFormatter::err
        //     public function getBank($request, $response, $args = []){   
        //         try {
        //             $id = $args['id'];
        //             $Bank = Bank::where('id', '=', $id)->get();
        //             return $response->withJson(ResponseFormatter::successResponse($Bank));
        
        //         } catch (\Exception $e) {
        //             return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        //         }
        //     }
        //     )
    


    public function getBank($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Bank = Bank::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Bank));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }


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

  
