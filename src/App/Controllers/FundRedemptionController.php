<?php
namespace Mock\Controllers;
use Mock\Models\Country;
use Mock\Models\FundRedemption;
use Mock\classes\ResponseFormatter;
use Mock\Controllers\ActionController;

class FundRedemptionController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getFundRedemptions($request, $response, $args = []){
        try {
            // $FundRedemptions = new FundRedemption();
            // $FundRedemptions->fund = 1;
            // $FundRedemptions->account = 'Savings';
            // $FundRedemptions->date = '12-07-2022';
            // $FundRedemptions->price = '100000';
            // $FundRedemptions->quantity = '5';
            // $FundRedemptions->reference = 'Manager';

            $FundRedemptions="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"901\",\n            \"remarks\": \"Online Redemption not allowed\"\n        }\n    ]\n}";
            $FundRedemption=json_decode(($FundRedemptions));

            return $response->withJson(ResponseFormatter::successResponse($FundRedemption));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getFundRedemption($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $FundRedemptions = FundRedemption::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($FundRedemptions ,'FundRedemption'));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }
    

    public function createFundRedemption($request, $response, $args = []){
        try {
            $FundRedemption_details =  $request->getParsedBody();
            $FundRedemptions = new FundRedemption();
            $FundRedemptions->setfund(1);
            $FundRedemptions->setaccount($FundRedemption_details['Savings']);
            $FundRedemptions->setdate ($FundRedemption_details['Asia']);
            $FundRedemptions->setprice($FundRedemption_details['YC']);
            $FundRedemptions->setquantity($FundRedemption_details['YC']);
            $FundRedemptions->setreference($FundRedemption_details['YC']);
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($FundRedemptions ,'FundRedemptions'));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}