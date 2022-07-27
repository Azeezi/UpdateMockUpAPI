<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Officer;

class OfficerController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getOfficers($request, $response, $args = []){
        try {
            // $Officers = new Officer();
            // $Officers->id = 1;
            // $Officers->OFFICER_ID = '001';
            // $Officers->OFFICER_NAME = 'OLASHILE';
            
            $Officers= "{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"00401\",\n            \"remarks\": \"Access Denied. Unauthorized call\"\n        }\n    ]\n}";
            $Officer= json_decode(($Officers));
            return $response->withJson(ResponseFormatter::successResponse($Officer));
            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getOfficer($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Officer = Officer::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Officer));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createOfficer($request, $response, $args = []){
        try {
            $Officer_details =  $request->getParsedBody();
            //$create = Officer::create($Officer_details);
            $Officers = new Officer();
            $Officers->setId = 1;
            $Officers->setOFFICER_ID($Officer_details['OFFICER_CD']);
            $Officers->setOFFICER_NAME ($Officer_details['OFFICER_Name']);

            return $response->withJson(ResponseFormatter::successResponse($Officers), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}