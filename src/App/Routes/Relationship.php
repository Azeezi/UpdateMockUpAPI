<?php

$app->group('/Relationship', function() use ($app) {

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
    $app->get('/getRelationship/{id}', \Mock\Controllers\RelationshipController::class . ':getRelationship');

/**
 * @OA\Get(
 *  path="/api/v1/Relationship/getRelationships", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/getRelationships', \Mock\Controllers\RelationshipController::class . ':getRelationships');

    $app->post('/createRelationship', \Mock\Controllers\RelationshipController::class . ':createRelationship');

});