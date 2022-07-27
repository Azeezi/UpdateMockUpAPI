<?php
namespace Mock\Controllers;
use Mock\Models\DoFundAcnt;
use Mock\classes\ResponseFormatter;

class  DoFundAcntController extends ActionController{

 public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }

    public function getDoFundAcnts($request, $response, $args = []){
        try {
            // $DoFundAcnts= new DoFundAcnt();
            // $DoFundAcnts->customer= 1;
            // $DoFundAcnts->FUND = 'NAIRA';
            // $DoFundAcnts->account= 'Current';
            // $DoFundAcnts->accountname = 'Azeez';
            // $DoFundAcnts->registrar = '1000000';
            // $DoFundAcnts->externalref = '1000000';
            // $DoFundAcnts->reinvest = '1000000';
            // $DoFundAcnts->reinvestpct = '1000000';
            $DoFundAcnts="{\n    \"status\": \"fail\",\n    \"result\": [\n        {\n            \"code\": \"00500\",\n            \"remarks\": \"System error encountered\"\n        }\n    ]\n}";
            $DoFundAcnt=json_decode(($DoFundAcnts));
return $response->withJson(ResponseFormatter::successResponse($DoFundAcnt));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
    }


    public function getDoFundAcnt($request, $response, $args = []){   
        try {
            $id = $args['id'];
            $DoFundAcnts = DoFundAcnt::where('id', '=', $id)->get();
            return $response->withJson(ResponseFormatter::successResponse($DoFundAcnts));

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse(['could not connect to the server please try again']), 200);
        }
    }


    public function createDoFundAcnt($request, $response, $args = []){
        try {
            $FundAcnt_details =  $request->getParsedBody();
            //$Banks = new Banks(1, $Bank_details['BANK_CD'],$Bank_details['BANK_DSC'],$Bank_details['BANK_TYPE_DSC']);
            $DoFundAcnts = new DoFundAcnt();
            $DoFundAcnts->setcustomer(2);
            $DoFundAcnts->setfund($FundAcnt_details['FUND_DESCRIPTION']);
            $DoFundAcnts->setaccount($FundAcnt_details['VALUE_DATE']);
            $DoFundAcnts->setaccountname($FundAcnt_details['BID_PRICE']);
            $DoFundAcnts->setregistrar($FundAcnt_details['OFFER_PRICE']);
            $DoFundAcnts->setexternalref($FundAcnt_details['VALUE_DATE']);
            $DoFundAcnts->setreinvest($FundAcnt_details['BID_PRICE']);
            $DoFundAcnts->setreinvestpct($FundAcnt_details['OFFER_PRICE']);
            
            
            
            
            //$create = Bank::create($Bank_details);
            return $response->withJson(ResponseFormatter::successResponse($DoFundAcnts), 200);

        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse([$e->getMessage()], 201));
        }
    }

}


  

