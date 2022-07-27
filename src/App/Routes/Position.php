<?php

$app->group('/Position', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/Currency/getCurrency/{id}", 
 *  tags={"Currency"},
 *  @OA\Parameter(name="id",in="query",required=true,description="Currency ID", @Oa\Schema(type="string")),
 *  summary="To fetch a Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getPosition/{id}', \Mock\Controllers\PositionController::class . ':getPosition');

/**
 * @OA\Get(
 *  path="/api/v1/Position/getPositions", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getPositions', \Mock\Controllers\PositionController::class . ':getPositions');

    $app->post('/createPosition', \Mock\Controllers\PositionController::class . ':createPosition');

});