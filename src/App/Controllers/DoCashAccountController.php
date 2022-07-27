<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\DoCashAccount;

class DoCashAccountController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getDoCashAccounts($request, $response, $args = []){
        try {
            // $DoCashAccounts = new DoCashAccount();
            // $DoCashAccounts->customer = 1;
            // $DoCashAccounts->plan = '001';
            // $DoCashAccounts->description = 'Regular';
            // $DoCashAccounts->mandate = 'Yeye';
            // $DoCashAccounts->officer = '001';
            // $DoCashAccounts->reference = 'NGN';  

 return $response->withJson(ResponseFormatter::successResponse($DoCashAccounts));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getDoCashAccount($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $DoCashAccount= DoCashAccount::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($DoCashAccount));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createDoCashAccount($request, $response, $args = []){
        try {
            $DoCashAccount_details =  $request->getParsedBody();
            $DoCashAccounts = new DoCashAccount();
            $DoCashAccounts->setcustomer ($DoCashAccount_details['Yemen']);
            $DoCashAccounts->setplan($DoCashAccount_details['Yemen']);
            $DoCashAccounts->setdescription ($DoCashAccount_details['Yemen']);
            $DoCashAccounts->setmandate ($DoCashAccount_details['Yemen']);
            $DoCashAccounts->setofficer($DoCashAccount_details['Yemen']);
            $DoCashAccounts->setreference($DoCashAccount_details['Yemen']);
           
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($DoCashAccounts), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}