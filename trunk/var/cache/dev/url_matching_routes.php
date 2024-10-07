<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/session' => [[['_route' => 'admin_recharge_session', '_controller' => 'App\\Controller\\Admin\\RechargeSessionController::index'], null, null, null, false, false, null]],
        '/admin/stations/create' => [[['_route' => 'create_station', '_controller' => 'App\\Controller\\Admin\\StationController::create'], null, null, null, false, false, null]],
        '/admin/stations' => [[['_route' => 'admin_view_stations', '_controller' => 'App\\Controller\\Admin\\StationController::getStations'], null, ['GET' => 0], null, false, false, null]],
        '/admin/list-user' => [[['_route' => 'admin_view_user', '_controller' => 'App\\Controller\\Admin\\UserController::getUsers'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'app_recharge_session', '_controller' => 'App\\Controller\\RechargeSessionController::index'], null, null, null, false, false, null]],
        '/session/history' => [[['_route' => 'app_sessions_history', '_controller' => 'App\\Controller\\RechargeSessionController::history'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_station_index', '_controller' => 'App\\Controller\\StationController::index'], null, null, null, false, false, null]],
        '/stations' => [[['_route' => 'view_stations', '_controller' => 'App\\Controller\\StationController::getStations'], null, ['GET' => 0], null, false, false, null]],
        '/stations/map' => [[['_route' => 'view_map', '_controller' => 'App\\Controller\\StationController::viewMap'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\UserController::profile'], null, null, null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePassword'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/s(?'
                    .'|tations/([^/]++)(?'
                        .'|/create(*:79)'
                        .'|(*:86)'
                    .')'
                    .'|ession/([^/]++)/stop(*:114)'
                .')'
                .'|/s(?'
                    .'|ession/([^/]++)/(?'
                        .'|st(?'
                            .'|art(*:155)'
                            .'|op(*:165)'
                        .')'
                        .'|pause(*:179)'
                        .'|resume(*:193)'
                    .')'
                    .'|tations/([^/]++)(*:218)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        79 => [[['_route' => 'create_evse', '_controller' => 'App\\Controller\\Admin\\EvseController::create'], ['stationId'], null, null, false, false, null]],
        86 => [[['_route' => 'admin_info_station', '_controller' => 'App\\Controller\\Admin\\StationController::getStationEvses'], ['stationId'], null, null, false, true, null]],
        114 => [[['_route' => 'admin_stop_session', '_controller' => 'App\\Controller\\Admin\\RechargeSessionController::stopSession'], ['sessionId'], null, null, false, false, null]],
        155 => [[['_route' => 'run_session', '_controller' => 'App\\Controller\\RechargeSessionController::startSession'], ['evseId'], null, null, false, false, null]],
        165 => [[['_route' => 'stop_session', '_controller' => 'App\\Controller\\RechargeSessionController::stopSession'], ['sessionId'], null, null, false, false, null]],
        179 => [[['_route' => 'pause_session', '_controller' => 'App\\Controller\\RechargeSessionController::pauseSession'], ['sessionId'], null, null, false, false, null]],
        193 => [[['_route' => 'resume_session', '_controller' => 'App\\Controller\\RechargeSessionController::resumeSession'], ['sessionId'], null, null, false, false, null]],
        218 => [
            [['_route' => 'info_station', '_controller' => 'App\\Controller\\StationController::getStationEvses'], ['stationId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
