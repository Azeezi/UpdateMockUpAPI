<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\DoCashWithdrawal;

class DoCashWithdrawalController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getDoCashWithdrawal($request, $response, $args = []){
        try {
        $DoCashWithdrawals= "{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"902\",\n            \"remarks\": \"API/Online Withdrawal not allowed\"\n        }\n    ]\n}";   
        $DoCashWithdrawal=json_decode(($DoCashWithdrawals));
        
        return $response->withJson(ResponseFormatter::successResponse($DoCashWithdrawal, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }

    // public function getDoCashWithdrawal($request, $response, $args = []){   
    //     try {
    //         $id = $args['id'];
    //          $DoCashWithdrawal=  DoCashWithdrawal::where('id', '=', $id)->get();
    //         return $response->withJson(ResponseFormatter::successResponse($DoCashWithdrawal));
    //         echo "Hello";

    //     } catch (\Exception $e) {
    //         return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
    //     }
    // }

    // public function createDoCashWithdrawal($request, $response, $args = []){
    //     try {
    //         $DoCashWithdrawal_details =  $request->getParsedBody();
    //         $DoCashWithdrawals = new DoCashWithdrawal();
    //         $DoCashWithdrawals->setcustomer ($DoCashWithdrawal_details['Yemen']);
    //         $DoCashWithdrawals->setaccount($DoCashWithdrawal_details['Yemen']);
    //         $DoCashWithdrawals->setdate ($DoCashWithdrawal_details['Yemen']);
    //         $DoCashWithdrawals->setamount ($DoCashWithdrawal_details['Yemen']);
    //         $DoCashWithdrawals->setdescription($DoCashWithdrawal_details['Yemen']);
    //         $DoCashWithdrawals->setreference($DoCashWithdrawal_details['Yemen']);
    //         $DoCashWithdrawals->setcontra($DoCashWithdrawal_details['Yemen']);
           
    //         //$create = Country::create($Country_details);
    //         return $response->withJson(ResponseFormatter::successResponse($DoCashWithdrawals), 200);

    //     } catch (\Exception $e) {
    //         return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
    //     }
    // }

}