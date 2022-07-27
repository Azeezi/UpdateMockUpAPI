<?php

$app->group('/DoFundAcnt', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/DoFundAcnt/getDoFundAcnts/{id}", 
 *  tags={"DoFundAcnt"},
 *  @OA\Parameter(name="id",in="query",required=true,description="DoFundAcnt ID", @Oa\Schema(type="string")),
 *  summary="To fetch a DoFundAcnt details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoFundAcnt/{id}', \Mock\Controllers\DoFundAcntController::class . ':getDoFundAcnts');

/**
 * @OA\Get(
 *  path="/api/v1/DoFundAcnt/getDoFundAcnts", 
 *  tags={"DoFundAcnt"},
 *  summary="To fetch all DoFundAcnt details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoFundAcnts', \Mock\Controllers\DoFundAcntController::class . ':getDoFundAcnts');

    $app->post('/createDoFundAcnt', \Mock\Controllers\DoFundAcntController::class . ':createDoFundAcnt');

});