<?php

$app->group('/DoCashDeposit', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/DoCashDeposit/getDoCashDeposit/{id}", 
 *  tags={"DoCashDeposit"},
 *  @OA\Parameter(name="id",in="query",required=true,description="DoCashDeposit", @Oa\Schema(type="string")),
 *  summary="To fetch a DoCashDeposit details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoCashDeposit/{id}', \Mock\Controllers\DoCashDepositController::class . ':getDoCashDeposit');

/**
 * @OA\Get(
 *  path="/api/v1/DoCashDeposit/getDoCashDeposits", 
 *  tags={"DoCashDeposit},
 *  summary="To fetch all DoCashDeposit details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoCashDeposits', \Mock\Controllers\DoCashDepositController::class . ':getDoCashDeposits');

    $app->post('/createDoCashDeposits', \Mock\Controllers\DoCashDepositsController::class . ':createDoCashDeposits');

});