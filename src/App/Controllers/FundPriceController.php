<?php
namespace Mock\Controllers;
use Mock\Models\FundPrice;
use Mock\classes\ResponseFormatter;

class  FundPriceController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getFundPrices($request, $response, $args = []){
        try {
            // $FundPrices= new FundPrice();
            // $FundPrices->id = 1;
            // $FundPrices->FUND_DESCRIPTION = 'NAIRA';
            // $FundPrices->VALUE_DATE= '12-7-2022';
            // $FundPrices->BID_PRICE = '800000';
            // $FundPrices->OFFER_PRICE = '1000000';
            $FundPrices= "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"GetFundPrice\": [\n                {\n                    \"FUND_ID\": \"NOV-MF-000002\",\n                    \"FUND_DESCRIPTION\": \"NOVA DOLLAR FIXED INCOME FUND\",\n                    \"VALUE_DATE\": \"2022-01-10T00:00:00Z\",\n                    \"BID_PRICE\": 0.96010592,\n                    \"OFFER_PRICE\": 0.96010592\n                }\n            ]\n        }\n    ]\n}";
            $FundPrice=json_decode(($FundPrices));
            return $response->withJson(ResponseFormatter::successResponse($FundPrice));
            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }


    public function getFundPrice($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $FundPrices = FundPrice::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($FundPrices ,'FundPrice'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }


    public function createFundPrice($request, $response, $args = []){
        try {
            $FundPrice_details =  $request->getParsedBody();
            //$Banks = new Banks(1, $Bank_details['BANK_CD'],$Bank_details['BANK_DSC'],$Bank_details['BANK_TYPE_DSC']);
            $FundPrices = new FundPrice();
            $FundPrices->setId(1);
            $FundPrices->setFUND_DESCRIPTION($FundPrice_details['FUND_DESCRIPTION']);
            $FundPrices->setVALUE_DATE($FundPrice_details['VALUE_DATE']);
            $FundPrices->setBID_PRICE($FundPrice_details['BID_PRICE']);
            $FundPrices->setOFFER_PRICE($FundPrice_details['OFFER_PRICE']);
            //$create = Bank::create($Bank_details);
            return $response->withJson(ResponseFormatter::successResponse($FundPrices ,'FundPrice'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}


  

