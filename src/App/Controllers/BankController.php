<?php
namespace Mock\Controllers;
use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class BankController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getBanks($request, $response, $args = []){
        try {
           
            $banks="{\n    \"status\": \"success\",\n    \"result\": [\n        {\n            \"bank\": [\n                {\n                    \"BANK_CD\": \"ACCESS\",\n                    \"BANK_DSC\": \"Access Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"044\"\n                },\n                {\n                    \"BANK_CD\": \"CITIBANK\",\n                    \"BANK_DSC\": \"Citibank Nigeria\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\"\n                },\n                {\n                    \"BANK_CD\": \"DIAMOND\",\n                    \"BANK_DSC\": \"Diamond Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"063\"\n                },\n                {\n                    \"BANK_CD\": \"ECOBANK\",\n                    \"BANK_DSC\": \"Ecobank Nigeria\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"050\"\n                },\n                {\n                    \"BANK_CD\": \"ENTERPRISE\",\n                    \"BANK_DSC\": \"Enterprise Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"084\"\n                },\n                {\n                    \"BANK_CD\": \"FIDELITY\",\n                    \"BANK_DSC\": \"Fidelity Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"070\"\n                },\n                {\n                    \"BANK_CD\": \"FIRSTBANK\",\n                    \"BANK_DSC\": \"First Bank Nigeria\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"011\"\n                },\n                {\n                    \"BANK_CD\": \"FCMB\",\n                    \"BANK_DSC\": \"First City Monument Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"214\"\n                },\n                {\n                    \"BANK_CD\": \"GTB\",\n                    \"BANK_DSC\": \"Guaranty Trust Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"058\"\n                },\n                {\n                    \"BANK_CD\": \"HERITAGE\",\n                    \"BANK_DSC\": \"Heritage Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"030\"\n                },\n                {\n                    \"BANK_CD\": \"KEYSTONE\",\n                    \"BANK_DSC\": \"Key Stone Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"082\"\n                },\n                {\n                    \"BANK_CD\": \"MAINSTREET\",\n                    \"BANK_DSC\": \"Mainstreet Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"014\"\n                },\n                {\n                    \"BANK_CD\": \"POLARIS\",\n                    \"BANK_DSC\": \"Polaris Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\"\n                },\n                {\n                    \"BANK_CD\": \"PROVIDUS\",\n                    \"BANK_DSC\": \"PROVIDUS BANK\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\"\n                },\n                {\n                    \"BANK_CD\": \"STANBIC\",\n                    \"BANK_DSC\": \"Stanbic IBTC Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"039\"\n                },\n                {\n                    \"BANK_CD\": \"SCB\",\n                    \"BANK_DSC\": \"Standard Chartered Bank Nigeria\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\"\n                },\n                {\n                    \"BANK_CD\": \"STERLING\",\n                    \"BANK_DSC\": \"Sterling Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"232\"\n                },\n                {\n                    \"BANK_CD\": \"SUNTRUST\",\n                    \"BANK_DSC\": \"Suntrust Bank Nigeria\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\"\n                },\n                {\n                    \"BANK_CD\": \"UNION\",\n                    \"BANK_DSC\": \"Union Bank Of Nigeria\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"032\"\n                },\n                {\n                    \"BANK_CD\": \"UBA\",\n                    \"BANK_DSC\": \"United Bank For Africa\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"033\"\n                },\n                {\n                    \"BANK_CD\": \"UNITY\",\n                    \"BANK_DSC\": \"Unity Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"215\"\n                },\n                {\n                    \"BANK_CD\": \"WEMA\",\n                    \"BANK_DSC\": \"Wema Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"035\"\n                },\n                {\n                    \"BANK_CD\": \"ZENITH\",\n                    \"BANK_DSC\": \"Zenith Bank\",\n                    \"BANK_TYPE_DSC\": \"Commercial Bank\",\n                    \"NIBSS_ID\": \"057\"\n                },\n                {\n                    \"BANK_CD\": \"NOVA\",\n                    \"BANK_DSC\": \"NOVA Merchant Bank\",\n                    \"BANK_TYPE_DSC\": \"Merchant Bank\"\n                },\n                {\n                    \"BANK_CD\": \"RAND\",\n                    \"BANK_DSC\": \"RAND MERCHANT BANK\",\n                    \"BANK_TYPE_DSC\": \"Merchant Bank\"\n                }\n            ]\n        }\n    ]\n}";
            $Banks= json_decode($banks);
            return $response->withJson(ResponseFormatter::successResponse($Banks, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }


    public function getBank($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $Bank = Bank::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($Bank));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }


    public function createBank($request, $response, $args = []){
        try {
            $Bank_details =  $request->getParsedBody();
            //$Banks = new Banks(1, $Bank_details['BANK_CD'],$Bank_details['BANK_DSC'],$Bank_details['BANK_TYPE_DSC']);
            $Banks = new Bank();
            $Banks->setId(1);
            $Banks->setBANK_CD($Bank_details['BANK_CD']);
            $Banks->setBANK_DSC($Bank_details['BANK_DSC']);
            $Banks->setBANK_TYPE_DSC($Bank_details['BANK_TYPE_DSC']);

            //$create = Bank::create($Bank_details);
            return $response->withJson(ResponseFormatter::successResponse($Banks), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}


  
