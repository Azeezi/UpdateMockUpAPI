<?php
namespace Mock\Controllers;
use Mock\classes\ResponseFormatter;
use Mock\Models\Country;

class CountryController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getCountrys($request, $response, $args = []){
        try {
            // $Countrys = new Country();
            // $Countrys->id = 1;
            // $Countrys->COUNTRY_CD = '001';
            // $Countrys->COUNTRY_DSC = 'NGN';
            // $Countrys->HOME_YN = 'Yeye';
            $Countrys= "{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"country\": [\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"HOME_YN\": \"1.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"BEN\",\n                    \"COUNTRY_DSC\": \"BENIN\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"CMR\",\n                    \"COUNTRY_DSC\": \"CAMEROON\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"CAN\",\n                    \"COUNTRY_DSC\": \"CANADA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"CIV\",\n                    \"COUNTRY_DSC\": \"COTE D'IVOIRE\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"FRA\",\n                    \"COUNTRY_DSC\": \"FRANCE\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"DEU\",\n                    \"COUNTRY_DSC\": \"GERMANY\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"GHA\",\n                    \"COUNTRY_DSC\": \"GHANA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"ITA\",\n                    \"COUNTRY_DSC\": \"ITALY\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"KEN\",\n                    \"COUNTRY_DSC\": \"KENYA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"SEN\",\n                    \"COUNTRY_DSC\": \"SENEGAL\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"SLE\",\n                    \"COUNTRY_DSC\": \"SIERRA LEONE\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"ZAF\",\n                    \"COUNTRY_DSC\": \"SOUTH AFRICA\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"ESP\",\n                    \"COUNTRY_DSC\": \"SPAIN\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"TGO\",\n                    \"COUNTRY_DSC\": \"TOGO\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"GBR\",\n                    \"COUNTRY_DSC\": \"UNITED KINGDOM\",\n                    \"HOME_YN\": \"0.00\"\n                },\n                {\n                    \"COUNTRY_CD\": \"USA\",\n                    \"COUNTRY_DSC\": \"UNITED STATES\",\n                    \"HOME_YN\": \"0.00\"\n                }\n            ]\n        }\n    ]\n}";
            $Country=json_decode($Countrys);
            return $response->withJson(ResponseFormatter::successResponse($Country));

            

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function getCountry($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Country = Country::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Country));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createCountry($request, $response, $args = []){
        try {
            $Country_details =  $request->getParsedBody();
            $Countrys = new Country();
            $Countrys->setId(1);
            $Countrys->setCOUNTRY_CD($Country_details['Yemen']);
            $Countrys->setCOUNTRY_DSC($Country_details['Asia']);
            $Countrys->setHOME_YN($Country_details['YC']);
            //$create = Country::create($Country_details);
            return $response->withJson(ResponseFormatter::successResponse($Countrys), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}