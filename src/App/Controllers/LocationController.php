<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Location;

class LocationController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getLocations($request,  $response,$args = []){
        try {
            // $Locations = new Location();
            // $Locations->id = 1;
            // $Locations->LOCATION_CD = 'NGN';
            // $Locations->LOCATION_DSC = 'CITY';

       $Location=  "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"location\": []\n        }\n    ]\n}"
    ;
       $Locations=  json_decode(($Location));;   
return $response->withJson(ResponseFormatter::successResponse($Locations));
           

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getLocation($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Location =  Location::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Location));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createLocation($request, $response, $args = []){
        try {
            $Location_details =  $request->getParsedBody();
            //$create =  Location::create($Location_details);
            $Locations= new location();
            $Locations->setId(1);
            $Locations->setLOCATION_CD($Location_details['NGN']);
            $Locations->setLOCATION_DSC($Location_details['Ghana']);
            return $response->withJson(ResponseFormatter::successResponse($Locations), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));

}
    
}

}
