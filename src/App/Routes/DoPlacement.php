<?php

$app->group('/DoPlacement', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/DoPlacement/getDoPlacement/{id}", 
 *  tags={"DoPlacement"},
 *  @OA\Parameter(name="id",in="query",required=true,description="DoPlacement", @Oa\Schema(type="string")),
 *  summary="To fetch a DoPlacement details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoPlacement/{id}', \Mock\Controllers\DoPlacementController::class . ':getDoPlacement');

/**
 * @OA\Get(
 *  path="/api/v1/DoPlacement/getDoPlacements", 
 *  tags={"DoPlacement},
 *  summary="To fetch all DoPlacement details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getDoPlacements', \Mock\Controllers\DoPlacementController::class . ':getDoPlacements');

    $app->post('/createDoPlacements', \Mock\Controllers\DoPlacementsController::class . ':createDoPlacements');

});