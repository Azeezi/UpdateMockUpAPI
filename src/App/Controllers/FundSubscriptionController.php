<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\FundSubscription;

class FundSubscriptionController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getFundSubscriptions($request, $response, $args = []){
        try {
            // $FundSubscriptions = new FundSubscription();
            // $FundSubscriptions->fund = 1;
            // $FundSubscriptions->account = 'Savings';
            // $FundSubscriptions->date = '12-07-2022';
            // $FundSubscriptions->price = '100000';
            // $FundSubscriptions->quantity = '5';
            // $FundSubscriptions->reference = 'Manager';

            $FundSubscriptions="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"900\",\n            \"remarks\": \"Online Subscription not allowed\"\n        }\n    ]\n}";
            $FundSubscription=json_decode(($FundSubscriptions));


            return $response->withJson(ResponseFormatter::successResponse($FundSubscription ,));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getFundSubscription($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $FundSubscription = FundSubscription::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($FundSubscription ,));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }
    

    public function createFundSubscription($request, $response, $args = []){
        try {
            $FundSubscription_details =  $request->getParsedBody();
            $FundSubscriptions = new FundSubscription();
            $FundSubscriptions->setfund(1);
            $FundSubscriptions->setaccount($FundSubscription_details['Savings']);
            $FundSubscriptions->setdate ($FundSubscription_details['Asia']);
            $FundSubscriptions->setprice($FundSubscription_details['YC']);
            $FundSubscriptions->setquantity($FundSubscription_details['YC']);
            $FundSubscriptions->setreference($FundSubscription_details['YC']);
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($FundSubscriptions ,));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}