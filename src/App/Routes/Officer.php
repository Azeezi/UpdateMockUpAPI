<?php

$app->group('/Officer', function() use ($app) {

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
    $app->get('/getOfficer/{id}', \Mock\Controllers\OfficerController::class . ':getOfficer');

/**
 * @OA\Get(
 *  path="/api/v1/Officer/getOfficers", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getOfficers', \Mock\Controllers\OfficerController::class . ':getOfficers');

    $app->post('/createOfficer', \Mock\Controllers\OfficerController::class . ':createOfficer');

});