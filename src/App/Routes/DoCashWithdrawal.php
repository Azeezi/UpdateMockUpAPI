<?php

$app->group('/DoCashWithdrawal', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/DoCashWithdrawal/getDoCashWithdrawal/{id}", 
 *  tags={"DoCashWithdrawal"},
 *  @OA\Parameter(name="id",in="query",required=true,description="DoCashWithdrawal", @Oa\Schema(type="string")),
 *  summary="To fetch a DoCashWithdrawal details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoCashWithdrawal/{id}', \Mock\Controllers\DoCashWithdrawalController::class . ':getDoCashWithdrawal');

/**
 * @OA\Get(
 *  path="/api/v1/DoCashWithdrawal/getDoCashWithdrawals", 
 *  tags={"DoCashWithdrawal},
 *  summary="To fetch all DoCashWithdrawal details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoCashWithdrawals', \Mock\Controllers\DoCashWithdrawalController::class . ':getDoCashWithdrawals');

    $app->post('/createDoCashWithdrawals', \Mock\Controllers\DoCashWithdrawalsController::class . ':createDoCashWithdrawals');

});