<?php
namespace Mock\Controllers;

use Mock\classes\ResponseFormatter;
use Mock\Models\State;

class StateController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getStates($request, $response, $args = []){
        try {
            // $States = new State();
            // $States->id = 1;
            // $States->COUNTRY_CD = '001';
            // $States->COUNTRY_DSC = 'NGN';
            // $States->STATE_CD = '001';
            // $States->STATE_DSC = 'East';
            $State="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"state\": [\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"ABI\",\n                    \"STATE_DSC\": \"Abia State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"ZAM\",\n                    \"STATE_DSC\": \"Zamfara State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"AKW\",\n                    \"STATE_DSC\": \"Akwa Ibom State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"ANA\",\n                    \"STATE_DSC\": \"Anambra State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"BAU\",\n                    \"STATE_DSC\": \"Bauchi State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"BAY\",\n                    \"STATE_DSC\": \"Bayelsa State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"BEN\",\n                    \"STATE_DSC\": \"Benue State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"BOR\",\n                    \"STATE_DSC\": \"Borno State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"CRO\",\n                    \"STATE_DSC\": \"Cross River State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"DEL\",\n                    \"STATE_DSC\": \"Delta State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"EBO\",\n                    \"STATE_DSC\": \"Ebonyi State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"EDO\",\n                    \"STATE_DSC\": \"Edo State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"EKI\",\n                    \"STATE_DSC\": \"Ekiti State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"ENU\",\n                    \"STATE_DSC\": \"Enugu State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"FCT\",\n                    \"STATE_DSC\": \"FCT\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"GOM\",\n                    \"STATE_DSC\": \"Gombe State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"IMO\",\n                    \"STATE_DSC\": \"Imo State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"JIG\",\n                    \"STATE_DSC\": \"Jigawa State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"KAD\",\n                    \"STATE_DSC\": \"Kaduna State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"KAN\",\n                    \"STATE_DSC\": \"Kano State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"KAT\",\n                    \"STATE_DSC\": \"Katsina State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"KEB\",\n                    \"STATE_DSC\": \"Kebbi State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"KOG\",\n                    \"STATE_DSC\": \"Kogi State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"KWA\",\n                    \"STATE_DSC\": \"Kwara State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"LAG\",\n                    \"STATE_DSC\": \"Lagos State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"NAS\",\n                    \"STATE_DSC\": \"Nasarawa State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"NIG\",\n                    \"STATE_DSC\": \"Niger State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"OGU\",\n                    \"STATE_DSC\": \"Ogun State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"OND\",\n                    \"STATE_DSC\": \"Ondo State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"OSU\",\n                    \"STATE_DSC\": \"Osun State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"OYO\",\n                    \"STATE_DSC\": \"Oyo State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"PLA\",\n                    \"STATE_DSC\": \"Plateau State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"RIV\",\n                    \"STATE_DSC\": \"Rivers State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"SOK\",\n                    \"STATE_DSC\": \"Sokoto State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"TAR\",\n                    \"STATE_DSC\": \"Taraba State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"YOB\",\n                    \"STATE_DSC\": \"Yobe State\"\n                },\n                {\n                    \"COUNTRY_CD\": \"NGA\",\n                    \"COUNTRY_DSC\": \"NIGERIA\",\n                    \"STATE_CD\": \"ADA\",\n                    \"STATE_DSC\": \"Adamawa State\"\n                }\n            ]\n        }\n    ]\n}";
            $States=json_decode(($State));
    return $response->withJson(ResponseFormatter::successResponse($States));
           

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }

    public function  getState($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $State =     State::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($State));
            echo "Hello";

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }

    public function createState($request, $response, $args = []){
        try {
            $State_details =  $request->getParsedBody();
            //$create =     State::create($State_details);
            $States= new State();
            $States->setId(1);
            $States->setCOUNTRY_CD($State_details['COUNTRY_CD']);
            $States->setCOUNTRY_DSC($State_details['COUNTRY_DSC']);
            $States->setSTATE_CD($State_details['STATE_CD']);
            $States->setSTATE_DSC($State_details['STATE_DSC']);


            return $response->withJson(ResponseFormatter::successResponse($States), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}