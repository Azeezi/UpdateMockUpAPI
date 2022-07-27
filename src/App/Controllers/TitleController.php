<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Title;

class TitleController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getTitles($request, $response, $args = []){
        try {
            // $Titles = new Title();
            // $Titles->id = 1;
            // $Titles->TITTLE_CD = '001';
            // $Titles->TITTLE_DSC = 'MR';
            $Titles= "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"title\": [\n                {\n                    \"TITLE_CD\": \"MASTER\",\n                    \"TITLE_DSC\": \"Master\"\n                },\n                {\n                    \"TITLE_CD\": \"MISS\",\n                    \"TITLE_DSC\": \"Miss\"\n                },\n                {\n                    \"TITLE_CD\": \"MR\",\n                    \"TITLE_DSC\": \"Mr\"\n                },\n                {\n                    \"TITLE_CD\": \"001\",\n                    \"TITLE_DSC\": \"Mr.\"\n                },\n                {\n                    \"TITLE_CD\": \"MRS\",\n                    \"TITLE_DSC\": \"Mrs\"\n                }\n            ]\n        }\n    ]\n}";
            $Title= json_decode(($Titles));
            return $response->withJson(ResponseFormatter::successResponse($Title));
            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function     getTitle($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Title =     Title::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Title));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function create_Title($request, $response, $args = []){
        try {
            $Title_details =  $request->getParsedBody();
            //$create =     Title::create($Title_details);

            $Titles  = new Title();
            $Titles->setId(1);
            $Titles->setTITTLE_CD ($Title_details['TITTLE_CD ']);
            $Titles->setTITTLE_DSC($Title_details['TITTLE_DSC']);
           

            return $response->withJson(ResponseFormatter::successResponse($Titles), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}