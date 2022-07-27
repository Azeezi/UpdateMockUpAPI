<?php

$app->group('GetFundTrGetCashAccountCustomerId', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/GetCashAccountCustomerId/getGetCashAccountCustomerId/{id}", 
 *  tags={"GetCashAccountCustomerId"},
 *  @OA\Parameter(name="id",in="query",required=true,description="GetCashAccountCustomerId ID", @Oa\Schema(type="string")),
 *  summary="To fetch a GetCashAccountCustomerId details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/GetCashAccountCustomerId/{id}', \Mock\Controllers\GetCashAccountCustomerIdController::class . ':getGetCashAccountCustomerId');

/**
 * @OA\Get(
 *  path="/api/v1/GetCashAccountCustomerId/getGetCashAccountCustomerIds", 
 *  tags={"GetCashAccountCustomerId"},
 *  summary="To fetch all GetCashAccountCustomerId details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getGetCashAccountCustomerIds', \Mock\Controllers\GetCashAccountCustomerIdController::class . ':getGetCashAccountCustomerIds');

    $app->post('/createGetCashAccountCustomerId', \Mock\Controllers\GetCashAccountCustomerIdController::class . ':createGetCashAccountCustomerId');

});