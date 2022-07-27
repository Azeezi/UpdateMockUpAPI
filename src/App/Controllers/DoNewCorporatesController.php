<?php
namespace Mock\Controllers;
// use Mock\Models\Bank;
use Mock\classes\ResponseFormatter;

class DoNewCorporatesController extends ActionController{
   


    public  $id;
    public function __invoke($request, $response, $args = [])
    {
        return $response->withJson("Hello World");
    }
     public function getDoNewCorporates($request, $response, $args = []){
        try {
           
            $DoNewCorporate= "{\n  \"customer\": [\n    {\n      \"organization_name\": \"BDIUM INTERNATIONAL\",\n      \"registration_number\": \"002729\",\n      \"registration_date\": \"2022-09-03\",\n      \"registration_country_cd\": \"NGA\",\n      \"tax_identification_number\": \"TIN73839\",\n      \"business_sector_cd\": \"\",\n      \"location_cd\": \"\",\n      \"address_street\": \"No 4, Nam Street\",\n      \"address_city\": \"Lagos\",\n      \"address_state_cd\": \"LAG\",\n      \"address_country_cd\": \"NGA\",\n      \"address_zip_code\": \"003832\",\n      \"primary_phone_no\": \"070382829121\",\n      \"alternate_phone_no\": \"\",\n      \"primary_email_address\": \"awe@gmail.com\",\n      \"alternate_email_address\": \"\",\n      \"website_address\": \"bdium.com\",\n      \"twitter_address\": \"\",\n      \"bank_cd\": \"ACCESS\",\n      \"bank_account_name\": \"Tricia Cole\",\n      \"bank_account_no\": \"0008389200\",\n      \"bank_branch_name\": \"Marina\",\n      \"bank_address_details\": \"No 5, Nam Street\",\n      \"bank_bvn_no\": \"22102302019\",\n      \"signatory1_yn\": \"string\",\n      \"signatory1_title_cd\": \"MASTER\",\n      \"signatory1_last_name\": \"Jin\",\n      \"signatory1_first_name\": \"Jan\",\n      \"signatory1_other_names\": \"\",\n      \"signatory1_gender_cd\": \"MALE\",\n      \"signatory1_birth_date\": \"1980-03-09\",\n      \"signatory1_nationality_cd\": \"NGA\",\n      \"signatory1_job_title\": \"CEO\",\n      \"signatory1_telephone\": \"090382829302\",\n      \"signatory1_email_address\": \"jinjan@bdium.com\",\n      \"signatory1_address_street\": \"No 5, Nam Street\",\n      \"signatory1_address_city\": \"Lagos\",\n      \"signatory1_address_country_cd\": \"NGA\",\n      \"signatory1_bvn_number\": \"0008392793\",\n      \"signatory1_class\": \"string\",\n      \"signatory2_yn\": \"string\",\n      \"signatory2_title_cd\": \"MASTER\",\n      \"signatory2_last_name\": \"string\",\n      \"signatory2_first_name\": \"string\",\n      \"signatory2_other_names\": \"string\",\n      \"signatory2_gender_cd\": \"MALE\",\n      \"signatory2_birth_date\": \"2000-09-09\",\n      \"signatory2_nationality_cd\": \"NGA\",\n      \"signatory2_job_title\": \"string\",\n      \"signatory2_telephone\": \"string\",\n      \"signatory2_email_address\": \"string\",\n      \"signatory2_address_street\": \"string\",\n      \"signatory2_address_city\": \"string\",\n      \"signatory2_address_country_cd\": \"NGA\",\n      \"signatory2_bvn_number\": \"string\",\n      \"signatory2_class\": \"string\",\n      \"signatory3_yn\": \"string\",\n      \"signatory3_title_cd\": \"MASTER\",\n      \"signatory3_last_name\": \"string\",\n      \"signatory3_first_name\": \"string\",\n      \"signatory3_other_names\": \"string\",\n      \"signatory3_gender_cd\": \"MALE\",\n      \"signatory3_birth_date\": \"2000-01-01\",\n      \"signatory3_nationality_cd\": \"NGA\",\n      \"signatory3_job_title\": \"string\",\n      \"signatory3_telephone\": \"string\",\n      \"signatory3_email_address\": \"string\",\n      \"signatory3_address_street\": \"string\",\n      \"signatory3_address_city\": \"string\",\n      \"signatory3_address_country_cd\": \"NGA\",\n      \"signatory3_bvn_number\": \"string\",\n      \"signatory3_class\": \"string\",\n      \"external_reference1\": \"string\",\n      \"external_reference2\": \"string\",\n      \"retain_customer_id\": \"string\",\n      \"customer_remarks\": \"string\"\n    }\n  ]\n}\n";
            $DoNewCorporates= json_decode(($DoNewCorporate));
            return $response->withJson(ResponseFormatter::successResponse($DoNewCorporates, 'result'));
           
        } catch (\Exception $e) {
            return $response->withJson(ResponseFormatter::errorResponse($e->getMessage()), 200);
        }
        
    }





  
    }




  
