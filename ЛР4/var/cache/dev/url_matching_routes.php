<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/getSerials' => [[['_route' => 'GetSerials', '_controller' => 'App\\Controller\\SerialsController::GetSerials'], null, ['GET' => 0], null, false, false, null]],
        '/postSerial' => [[['_route' => 'PostSerial', '_controller' => 'App\\Controller\\SerialsController::PostSerial'], null, ['POST' => 0], null, false, false, null]],
        '/postSeason' => [[['_route' => 'PostSeason', '_controller' => 'App\\Controller\\SeasonsController::PostSeason'], null, ['POST' => 0], null, false, false, null]],
        '/postSeries' => [[['_route' => 'PostSeries', '_controller' => 'App\\Controller\\SeriesController::PostSeries'], null, ['POST' => 0], null, false, false, null]],
        '/getPlans' => [[['_route' => 'GetPlans', '_controller' => 'App\\Controller\\PlansController::GetPlans'], null, ['GET' => 0], null, false, false, null]],
        '/postPlan' => [[['_route' => 'PostPLan', '_controller' => 'App\\Controller\\PlansController::PostPlan'], null, ['POST' => 0], null, false, false, null]],
        '/getUsers' => [[['_route' => 'GetUsers', '_controller' => 'App\\Controller\\UsersController::GetUsers'], null, ['GET' => 0], null, false, false, null]],
        '/postUser' => [[['_route' => 'PostUser', '_controller' => 'App\\Controller\\UsersController::PostUser'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/get(?'
                    .'|Se(?'
                        .'|ri(?'
                            .'|al(?:/([^/]++))?(*:75)'
                            .'|es(?'
                                .'|BySeason(?:/([^/]++))?(*:109)'
                                .'|(?:/([^/]++))?(*:131)'
                            .')'
                        .')'
                        .'|ason(?'
                            .'|s(?:/([^/]++))?(*:163)'
                            .'|(?:/([^/]++))?(*:185)'
                        .')'
                    .')'
                    .'|Plan(?:/([^/]++))?(*:213)'
                    .'|User(?:/([^/]++))?(*:239)'
                .')'
                .'|/p(?'
                    .'|ut(?'
                        .'|Se(?'
                            .'|ri(?'
                                .'|al(?:/([^/]++))?(*:284)'
                                .'|es(?:/([^/]++))?(*:308)'
                            .')'
                            .'|ason(?:/([^/]++))?(*:335)'
                        .')'
                        .'|User(?:/([^/]++))?(*:362)'
                    .')'
                    .'|atchPlan(?:/([^/]++))?(*:393)'
                .')'
                .'|/delete(?'
                    .'|Se(?'
                        .'|ri(?'
                            .'|al(?:/([^/]++))?(*:438)'
                            .'|es(?:/([^/]++))?(*:462)'
                        .')'
                        .'|ason(?:/([^/]++))?(*:489)'
                    .')'
                    .'|Plan(?:/([^/]++))?(*:516)'
                    .'|User(?:/([^/]++))?(*:542)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        75 => [[['_route' => 'GetSerial', 'id' => '4f6cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SerialsController::GetSerial'], ['id'], ['GET' => 0], null, false, true, null]],
        109 => [[['_route' => 'GetSeriesBySeasonId', 'seasonID' => '126cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeriesController::GetSeriesBySeasonId'], ['seasonID'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'GetSeries', 'id' => '546cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeriesController::GetSeries'], ['id'], ['GET' => 0], null, false, true, null]],
        163 => [[['_route' => 'GetSeasons', 'serialID' => '4f6cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeasonsController::GetSeasons'], ['serialID'], ['GET' => 0], null, false, true, null]],
        185 => [[['_route' => 'GetSeason', 'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeasonsController::GetSeason'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'GetPlan', 'id' => '999cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\PlansController::GetPlan'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'GetUser', 'id' => '111cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\UsersController::GetUsero'], ['id'], ['GET' => 0], null, false, true, null]],
        284 => [[['_route' => 'PutSerial', 'id' => '4f6cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SerialsController::PutSerial'], ['id'], ['PUT' => 0], null, false, true, null]],
        308 => [[['_route' => 'PutSeries', 'id' => '546cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeriesController::PutSeries'], ['id'], ['PUT' => 0], null, false, true, null]],
        335 => [[['_route' => 'PutSeason', 'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeasonsController::PutSeason'], ['id'], ['PUT' => 0], null, false, true, null]],
        362 => [[['_route' => 'PutUser', 'id' => '111cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\UsersController::PutUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        393 => [[['_route' => 'PatchPlan', 'id' => '999cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\PlansController::PatchPlan'], ['id'], ['PATCH' => 0], null, false, true, null]],
        438 => [[['_route' => 'DeleteSerial', 'id' => '4f6cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SerialsController::DeleteSerial'], ['id'], ['DELETE' => 0], null, false, true, null]],
        462 => [[['_route' => 'DeleteSeries', 'id' => '546cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeriesController::deleteSeries'], ['id'], ['DELETE' => 0], null, false, true, null]],
        489 => [[['_route' => 'DeleteSeason', 'id' => '126cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\SeasonsController::deleteSeason'], ['id'], ['DELETE' => 0], null, false, true, null]],
        516 => [[['_route' => 'DeletePlan', 'id' => '999cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\PlansController::DeletePlan'], ['id'], ['DELETE' => 0], null, false, true, null]],
        542 => [
            [['_route' => 'DeleteUser', 'id' => '111cf35x-2c4y-483z-a0a9-158621f77a21', '_controller' => 'App\\Controller\\UsersController::DeleteUser'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
