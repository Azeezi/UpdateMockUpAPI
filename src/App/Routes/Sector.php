<?php

$app->group('/Sector', function() use ($app) {

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
    $app->get('/getSector/{id}', \Mock\Controllers\SectorController::class . ':getSector');

/**
 * @OA\Get(
 *  path="/api/v1/Sector/getSectors", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getSectors', \Mock\Controllers\SectorController::class . ':getSectors');

    $app->post('/createSector', \Mock\Controllers\SectorController::class . ':createSector');

});