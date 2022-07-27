<?php
namespace Mock\classes;

class ResponseFormatter{

    static $status;  
    static $data;
    static $return_type = 'data';



    public static function successResponse($data = [],$ResponseType=false){
        self::$status = 'success';
        self::$return_type = 'result';
        $arraVar   =($ResponseType) ? [$ResponseType=>[$data]] : $data;
        self::$data = $arraVar;
        return self::response();
    }

    public static function errorResponse($errors = []){
        self::$status = 'success';
        self::$data = $errors;
        self::$return_type = 'errors';
        return self::response();

    }

    private static function response(){
        return ['status' => self::$status,  self::$return_type =>[self::$data] ];
    }


}