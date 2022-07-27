<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Nationality;

class NationalityController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getNationalities($request,  $response,$args = []){
        try {
            // $Nationalities = new  Nationality();
            // $Nationalities->id = 1;
            // $Nationalities->Nationality_CD = '001';
            // $Nationalities->Nationality_DSC = 'Nigerian';
            // $Nationalities->Nationality_HOME_YN= 'yeye';

          $Nationality="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"nation\": [\n                {\n                    \"NATIONALITY_CD\": \"NGA\",\n                    \"NATIONALITY_DSC\": \"NIGERIA\",\n                    \"HOME_YN\": \"1.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"BEN\",\n                    \"NATIONALITY_DSC\": \"BENIN\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"CMR\",\n                    \"NATIONALITY_DSC\": \"CAMEROON\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"CAN\",\n                    \"NATIONALITY_DSC\": \"CANADA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"CIV\",\n                    \"NATIONALITY_DSC\": \"COTE D'IVOIRE\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"FRA\",\n                    \"NATIONALITY_DSC\": \"FRANCE\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"DEU\",\n                    \"NATIONALITY_DSC\": \"GERMANY\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"GHA\",\n                    \"NATIONALITY_DSC\": \"GHANA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"ITA\",\n                    \"NATIONALITY_DSC\": \"ITALY\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"KEN\",\n                    \"NATIONALITY_DSC\": \"KENYA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"SEN\",\n                    \"NATIONALITY_DSC\": \"SENEGAL\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"SLE\",\n                    \"NATIONALITY_DSC\": \"SIERRA LEONE\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"ZAF\",\n                    \"NATIONALITY_DSC\": \"SOUTH AFRICA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"ESP\",\n                    \"NATIONALITY_DSC\": \"SPAIN\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"TGO\",\n                    \"NATIONALITY_DSC\": \"TOGO\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"GBR\",\n                    \"NATIONALITY_DSC\": \"UNITED KINGDOM\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"NATIONALITY_CD\": \"USA\",\n                    \"NATIONALITY_DSC\": \"UNITED STATES\",\n                    \"HOME_YN\": \"0.00\"\n                }\n            ]\n        }\n    ]\n}";
          $Nationalities= json_decode(($Nationality));
            return $response->withJson(ResponseFormatter::successResponse($Nationalities));
            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getNationality($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Nationality =   Nationality::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Nationality));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createNationality($request, $response, $args = []){
        try {
            $Nationality_details =  $request->getParsedBody();
            //$create =   Nationality::create($Nationality_details);
            $Nationalities = new Nationality();
            $Nationalities->setId(1);
            $Nationalities->setNATIONALITY_CD($Nationality_details['NATIONALITY_CD']);
            $Nationalities->setNATIONALITY_DSC($Nationality_details['NATIONALITY_DSC']);
            $Nationalities->setNATIONALITY_HOME_YN($Nationality_details['NATIONALITY_HOME_YN']);


            return $response->withJson(ResponseFormatter::successResponse($Nationalities), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}