<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\DoCashDeposit;

class DoCashDepositController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getDoCashDeposits($request, $response, $args = []){
        try {
            $DoCashDeposits = new DoCashDeposit();
            $DoCashDeposits->customer = 1;
            $DoCashDeposits->account = '001';
            $DoCashDeposits->date = 'Regular';
            $DoCashDeposits->amount = 'Yeye';
            $DoCashDeposits->description = '001';
            $DoCashDeposits->reference = 'NGN';  
            $DoCashDeposits->contra = 'NGN';      
 return $response->withJson(ResponseFormatter::successResponse($DoCashDeposits));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getDoCashDeposit($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $ $DoCashDeposit=  DoCashDeposit::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($DoCashDeposit));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createDoCashDeposit($request, $response, $args = []){
        try {
            $DoCashDeposit_details =  $request->getParsedBody();
            $DoCashDeposits = new DoCashDeposit();
            $DoCashDeposits->setcustomer ($DoCashDeposit_details['Yemen']);
            $DoCashDeposits->setaccount($DoCashDeposit_details['Yemen']);
            $DoCashDeposits->setdate ($DoCashDeposit_details['Yemen']);
            $DoCashDeposits->setamount ($DoCashDeposit_details['Yemen']);
            $DoCashDeposits->setdescription($DoCashDeposit_details['Yemen']);
            $DoCashDeposits->setreference($DoCashDeposit_details['Yemen']);
            $DoCashDeposits->setcontra($DoCashDeposit_details['Yemen']);
           
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($DoCashDeposits), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}