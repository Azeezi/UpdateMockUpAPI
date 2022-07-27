<?php

$app->group('/State', function() use ($app) {

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
    $app->get('/getState/{id}', \Mock\Controllers\StateController::class . ':getState');

/**
 * @OA\Get(
 *  path="/api/v1/State/getStates", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getStates', \Mock\Controllers\StateController::class . ':getStates');

    $app->post('/createState', \Mock\Controllers\StateController::class . ':createState');

});