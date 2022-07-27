<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Position;

class PositionController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getPositions($request, $response, $args = []){
        try {
            // $Positions = new Position();
            // $Positions->id = 1;
            // $Positions->POSN_CD = '001';
            // $Positions->POSN_DSC = 'LEVEL';

            $Positions= "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"position\": [\n                {\n                    \"POSN_CD\": \"CHM\",\n                    \"POSN_DSC\": \"Chairman\"\n                },\n                {\n                    \"POSN_CD\": \"VCHM\",\n                    \"POSN_DSC\": \"Vice Chairman\"\n                },\n                {\n                    \"POSN_CD\": \"CEO\",\n                    \"POSN_DSC\": \"CEO/MD\"\n                },\n                {\n                    \"POSN_CD\": \"DMD\",\n                    \"POSN_DSC\": \"Deputy MD\"\n                },\n                {\n                    \"POSN_CD\": \"ED\",\n                    \"POSN_DSC\": \"Executive Director\"\n                },\n                {\n                    \"POSN_CD\": \"NED\",\n                    \"POSN_DSC\": \"Non-Executive Director\"\n                },\n                {\n                    \"POSN_CD\": \"IND\",\n                    \"POSN_DSC\": \"Independent Director\"\n                },\n                {\n                    \"POSN_CD\": \"OTH\",\n                    \"POSN_DSC\": \"Other\"\n                }\n            ]\n        }\n    ]\n}";
            $Position=  json_decode(($Positions));;
            return $response->withJson(ResponseFormatter::successResponse($Position));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function  getPosition($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Position =  Position::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Position));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createPosition($request, $response, $args = []){
        try {
            $Position_details =  $request->getParsedBody();
            //$create =  Position::create($Position_details);
            $Positions = new Position();
            $Positions->setId(1);
            $Positions->setPOSN_CD($Position_details['POSN_CD']);
            $Positions->setPOSN_DSC($Position_details['POSN_DSC']);
            
            return $response->withJson(ResponseFormatter::successResponse($Positions), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}