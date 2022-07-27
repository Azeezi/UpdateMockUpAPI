<?php

$app->group('/lov', function() use ($app) {

/**
 * @OA\Get(
 *  path="/api/v1/lov/GetBanks", 
 *  tags={"Bank"},
 *  summary="To fetch all bank details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
    $app->get('/GetBanks', \Mock\Controllers\BankController::class . ':getBanks');

    /**
 * @OA\Get(
 *  path="/api/v1/lov/GetCurrency", 
 *  tags={"Currency"},
 *  summary="To fetch all Currency details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCurrency', \Mock\Controllers\CurrencyController::class . ':getCurrencys');


  /**
 * @OA\Get(
 *  path="/api/v1/lov/GetCountry", 
 *  tags={"Country"},
 *  summary="To fetch all Country details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetCountry', \Mock\Controllers\CountryController::class . ':getCountrys');



    /**
 * @OA\Get(
 *  path="/api/v1/lov/Getidentity", 
 *  tags={"identity"},
 *  summary="To fetch all identity details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/Getidentity', \Mock\Controllers\identityController::class . ':getidentitys');



    /**
 * @OA\Get(
 *  path="/api/v1/lov/GetLocation", 
 *  tags={"Location"},
 *  summary="To fetch all Location details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetLocation', \Mock\Controllers\LocationController::class . ':getLocations');


  /**
 * @OA\Get(
 *  path="/api/v1/lov/GetNationality", 
 *  tags={"Nationality"},
 *  summary="To fetch all Nationality details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetNationality', \Mock\Controllers\NationalityController::class . ':getNationalities');

/**
 * @OA\Get(
 *  path="/api/v1/lov/GetOfficer", 
 *  tags={"Officer"},
 *  summary="To fetch all Officer details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetOfficer', \Mock\Controllers\OfficerController::class . ':getOfficers');


/**
 * @OA\Get(
 *  path="/api/v1/lov/GetPosition", 
 *  tags={"Position"},
 *  summary="To fetch all Position details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetPosition', \Mock\Controllers\PositionController::class . ':getPositions');


/**
 * @OA\Get(
 *  path="/api/v1/lov/GetRelationship", 
 *  tags={"Relationship"},
 *  summary="To fetch all Relationship details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetRelationship', \Mock\Controllers\RelationshipController::class . ':getRelationships');

/**
 * @OA\Get(
 *  path="/api/v1/lov/GetSector", 
 *  tags={"sector"},
 *  summary="To fetch all Sector details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetSector', \Mock\Controllers\SectorController::class . ':getSectors');

/**
 * @OA\Get(
 *  path="/api/v1/lov/GetState", 
 *  tags={"State"},
 *  summary="To fetch all State details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetState', \Mock\Controllers\StateController::class . ':getStates');


/**
 * @OA\Get(
 *  path="/api/v1/lov/GetTitle", 
 *  tags={"Title"},
 *  summary="To fetch all State details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/GetTitle', \Mock\Controllers\TitleController::class . ':getTitles');

/**
 * @OA\Get(
 *  path="/api/v1/lov/GetTurnOver", 
 *  tags={"TurnOver"},
 *  summary="To fetch all State details",
 *  @OA\Response(response="200", description="success"),
 *  @OA\Response(response="201", description="An error occured")
 * )
 */
$app->get('/getTurnOver', \Mock\Controllers\TurnOverController::class . ':getTurnOver');



});