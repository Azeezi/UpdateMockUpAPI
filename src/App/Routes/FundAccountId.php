<?php

$app->group('/FundAccountId', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/bank/getBank/{id}", 
 *  tags={"Bank"},
 *  @OA\Parameter(name="id",in="query",required=true,description="Bank ID", @Oa\Schema(type="string")),
 *  summary="To fetch a bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundAccountId/{id}', \Mock\Controllers\FundAccountIdController::class . ':getFundAccountId');

/**
 * @OA\Get(
 *  path="/api/v1/FundAccountId/getFundAccountIds", 
 *  tags={"Bank"},
 *  summary="To fetch all bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getFundAccountIds', \Mock\Controllers\FundAccountIdController::class . ':getFundAccountIds');

    $app->post('/createFundAccountId', \Mock\Controllers\FundAccountIdController::class . ':createFundAccountId');

});