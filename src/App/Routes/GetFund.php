<?php

$app->group('/GetFund', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/GetFund/getGetFund/{id}", 
 *  tags={"GetFund"},
 *  @OA\Parameter(name="id",in="query",required=true,description="Bank ID", @Oa\Schema(type="string")),
 *  summary="To fetch a bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getGetFund/{id}', \Mock\Controllers\GetFundController::class . ':getGetFund');

/**
 * @OA\Get(
 *  path="/api/v1/GetFund/GetFunds", 
 *  tags={"GetFund"},
 *  summary="To fetch all bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getGetFunds', \Mock\Controllers\GetFundController::class . ':getGetFunds');

    $app->post('/createGetFund', \Mock\Controllers\GetFundController::class . ':createGetFund');

});