<?php

$app->group('/GetCustomerId', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/GetCustomerId/getGetCustomerId/{id}", 
 *  tags={"GetCustomerId"},
 *  @OA\Parameter(name="id",in="query",required=true,description="GetCustomerId ID", @Oa\Schema(type="string")),
 *  summary="To fetch a GetCustomerId details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getGetCustomerId/{id}', \Mock\Controllers\GetCustomerIdController::class . ':getGetCustomerId');

/**
 * @OA\Get(
 *  path="/api/v1/GetCustomerId/getGetCustomerIds", 
 *  tags={"GetCustomerId"},
 *  summary="To fetch all GetCustomerId details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getGetCustomerIds', \Mock\Controllers\GetCustomerIdController::class . ':getGetCustomerIds');

    $app->post('/createGetCustomerId', \Mock\Controllers\GetCustomerIdController::class . ':createGetCustomerId');

});