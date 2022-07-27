<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Sector;

class SectorController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getSectors($request, $response, $args = []){
        try {
            // $Sectors =   new Sector();
            // $Sectors->id = 1;
            // $Sectors->SECTOR_CD = '001';
            // $Sectors->SECTOR_DSC = 'Access Bank';

            $Sector="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"sector\": []\n        }\n    ]\n}";
            $Sectors=json_decode(($Sector));
        
           return $response->withJson(ResponseFormatter::successResponse($Sectors));
            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getSector($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Sector =    Sector::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Sector));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createSector($request, $response, $args = []){
        try {
            $Sector_details =  $request->getParsedBody();
            //$create =    Sector::create($Sector_details);
            $Sectors= new Sector();
            $Sectors->setId(1);
            $Sectors->setSECTOR_CD($Sector_details['SECTOR_CD']);
            $Sectors->setSECTOR_DSC($Sector_details['SECTOR_DSC']);

            return $response->withJson(ResponseFormatter::successResponse($Sectors), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}