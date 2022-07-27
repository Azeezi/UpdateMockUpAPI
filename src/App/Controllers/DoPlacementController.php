<?php
namespace Mock\Controllers;
use Mock\Models\Country;
use Mock\Models\DoPlacement;
use Mock\classes\ResponseFormatter;
use Mock\Controllers\ActionController;

class DoPlacementController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getDoPlacements($request, $response, $args = []){
        try {
            $DoPlacements = new DoPlacement();
            $DoPlacements->product = 1;
            $DoPlacements->customer = '001';
            $DoPlacements->account = 'Regular';
            $DoPlacements->date = 'Yeye';
            $DoPlacements->tenor = '001';
            $DoPlacements->amount = 'NGN';  
            $DoPlacements->rate = 'NGN'; 
            $DoPlacements->taxable = '001';
            $DoPlacements->rollover = 'NGN';  
            $DoPlacements->reference = 'NGN';     
 return $response->withJson(ResponseFormatter::successResponse($DoPlacements));
          

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getDoPlacement($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $ $DoPlacement=  DoPlacement::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($DoPlacement));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createDoPlacement($request, $response, $args = []){
        try {
            $DoPlacement_details =  $request->getParsedBody();
            $DoPlacements = new DoPlacement();
            $DoPlacements->setproduct ($DoPlacement_details['Yemen']);
            $DoPlacements->setcustomer($DoPlacement_details['Yemen']);
            $DoPlacements->setaccount ($DoPlacement_details['Yemen']);
            $DoPlacements->setdate ($DoPlacement_details['Yemen']);
            $DoPlacements->settenor($DoPlacement_details['Yemen']);
            $DoPlacements->setamount($DoPlacement_details['Yemen']);
            $DoPlacements->setrate($DoPlacement_details['Yemen']);
            $DoPlacements->settaxable($DoPlacement_details['Yemen']);
            $DoPlacements->setrollover($DoPlacement_details['Yemen']);
            $DoPlacements->setreference($DoPlacement_details['Yemen']);
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($DoPlacements), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}