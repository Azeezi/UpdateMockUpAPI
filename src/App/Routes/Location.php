<?php

$app->group('/Location', function() use ($app) {

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
    $app->get('/getLocation/{id}', \Mock\Controllers\LocationController::class . ':getLocation');

/**
 * @OA\Get(
 *  path="/api/v1/Location/getLocations", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getLocations', \Mock\Controllers\LocationController::class . ':getLocations');

    $app->post('/createLocation', \Mock\Controllers\LocationController::class . ':createLocation');

});