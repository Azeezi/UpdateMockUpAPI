<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Relationship;

class RelationshipController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getRelationships($request, $response, $args = []){
        try {
            // $Relationships = new  Relationship();
            // $Relationships->id = 1;
            // $Relationships->RELATIONSHIP_CD = '001';
            // $Relationships->RELATIONSHIP_DSC = 'FAMILY';

            $Relationship="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"relation\": [\n                {\n                    \"RELATIONSHIP_CD\": \"006\",\n                    \"RELATIONSHIP_DSC\": \"Brother\"\n                },\n                {\n                    \"RELATIONSHIP_CD\": \"001\",\n                    \"RELATIONSHIP_DSC\": \"Daughter\"\n                },\n                {\n                    \"RELATIONSHIP_CD\": \"008\",\n                    \"RELATIONSHIP_DSC\": \"Sister\"\n                },\n                {\n                    \"RELATIONSHIP_CD\": \"007\",\n                    \"RELATIONSHIP_DSC\": \"Son\"\n                },\n                {\n                    \"RELATIONSHIP_CD\": \"002\",\n                    \"RELATIONSHIP_DSC\": \"Father\"\n                },\n                {\n                    \"RELATIONSHIP_CD\": \"004\",\n                    \"RELATIONSHIP_DSC\": \"Mother\"\n                },\n                {\n                    \"RELATIONSHIP_CD\": \"005\",\n                    \"RELATIONSHIP_DSC\": \"Spouse\"\n                }\n            ]\n        }\n    ]\n}";
            $Relationships=json_decode(($Relationship));

            return $response->withJson(ResponseFormatter::successResponse($Relationships));
            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function   getRelationship($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Relationship =   Relationship::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Relationship));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createRelationship($request, $response, $args = []){
        try {
            $Relationship_details =  $request->getParsedBody();
            //$create =   Relationship::create($Relationship_details);
            $Relationships = new Relationship();
            $Relationships->setId(1);
            $Relationships->setRELATIONSHIP_CD($Relationship_details['RELATIONSHIP_CD']);
            $Relationships->setRELATIONSHIP_DSC($Relationship_details['RELATIONSHIP_DSC']);
           


            return $response->withJson(ResponseFormatter::successResponse($Relationships), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}