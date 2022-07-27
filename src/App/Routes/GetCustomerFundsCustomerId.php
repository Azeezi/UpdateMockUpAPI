<?php

$app->group('/GetCustomerFundsCustomerId', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/GetCustomerFundsCustomerId/getGetCustomerFundsCustomerId/{id}", 
 *  tags={"GetCustomerFundsCustomerId"},
 *  @OA\Parameter(name="id",in="query",required=true,description="GetCustomerFundsCustomerId ID", @Oa\Schema(type="string")),
 *  summary="To fetch a GetCustomerFundsCustomerId details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getGetCustomerFundsCustomerId/{id}', \Mock\Controllers\GetCustomerFundsCustomerIdController::class . ':getGetCustomerFundsCustomerId');

/**
 * @OA\Get(
 *  path="/api/v1/GetCustomerFundsCustomerId/getGetCustomerFundsCustomerIds", 
 *  tags={"GetCustomerFundsCustomerId"},
 *  summary="To fetch all GetCustomerFundsCustomerId details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/GetCustomerFundsCustomerIds', \Mock\Controllers\GetCustomerFundsCustomerIdController::class . ':getGetCustomerFundsCustomerIds');

    $app->post('/createGetCustomerFundsCustomerId', \Mock\Controllers\GetCustomerFundsCustomerIdController::class . ':createGetCustomerFundsCustomerId');

});