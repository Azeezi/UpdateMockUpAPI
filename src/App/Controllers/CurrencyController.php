<?php
namespace Mock\Controllers;
use Mock\Models\Currency;
use Mock\classes\ResponseFormatter;
use Mock\Controllers\ActionController;

class CurrencyController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getCurrencys($request, $response, $args = []){
        try {
            // $Currencys = new Currency();
            // $Currencys->id = 1;
            // $Currencys->Currency_CD = '001';
            // $Currencys->Currency_DSC = 'Naira';
            // $Currencys->LOCAL_CURRENCY_YN= 'Naira';
            $Currency = "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"currency\": [\n                {\n                    \"CURRENCY_CD\": \"NGN\",\n                    \"CURRENCY_DSC\": \"NIGERIAN NAIRA\",\n                    \"LOCAL_CURRENCY_YN\": \"1\"\n                },\n                {\n                    \"CURRENCY_CD\": \"EUR\",\n                    \"CURRENCY_DSC\": \"EURO\",\n                    \"LOCAL_CURRENCY_YN\": \"0\"\n                },\n                {\n                    \"CURRENCY_CD\": \"GBP\",\n                    \"CURRENCY_DSC\": \"GREAT BRITAIN POUNDS \",\n                    \"LOCAL_CURRENCY_YN\": \"0\"\n                },\n                {\n                    \"CURRENCY_CD\": \"USD\",\n                    \"CURRENCY_DSC\": \"UNITED STATES DOLLAR\",\n                    \"LOCAL_CURRENCY_YN\": \"0\"\n                }\n            ]\n        }\n    ]\n}";
            $Currencys = json_decode(($Currency));
            return $response->withJson(ResponseFormatter::successResponse($Currencys));
            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getCurrency($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Currency = Currency::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Currency));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createCurrency($request, $response, $args = []){
        try {
            $Currency_details =  $request->getParsedBody();
            //$create = Currency::create($Currency_details);
            $Currencys = new Currency();
            $Currencys->setId(1);
            $Currencys->setCURRENCY_CD($Currency_details['Naira']);
            $Currencys->setCURRENCY_DSC($Currency_details['Dollar']);
            $Currencys->setCURRENCY_LOCAL_CURRENCY_YN($Currency_details['yeye']);

            return $response->withJson(ResponseFormatter::successResponse($Currency_details), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}