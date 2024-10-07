<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'create_evse' => [['stationId'], ['_controller' => 'App\\Controller\\Admin\\EvseController::create'], [], [['text', '/create'], ['variable', '/', '[^/]++', 'stationId', true], ['text', '/admin/stations']], [], [], []],
    'admin_recharge_session' => [[], ['_controller' => 'App\\Controller\\Admin\\RechargeSessionController::index'], [], [['text', '/admin/session']], [], [], []],
    'admin_stop_session' => [['sessionId'], ['_controller' => 'App\\Controller\\Admin\\RechargeSessionController::stopSession'], [], [['text', '/stop'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/admin/session']], [], [], []],
    'create_station' => [[], ['_controller' => 'App\\Controller\\Admin\\StationController::create'], [], [['text', '/admin/stations/create']], [], [], []],
    'admin_view_stations' => [[], ['_controller' => 'App\\Controller\\Admin\\StationController::getStations'], [], [['text', '/admin/stations']], [], [], []],
    'admin_info_station' => [['stationId'], ['_controller' => 'App\\Controller\\Admin\\StationController::getStationEvses'], [], [['variable', '/', '[^/]++', 'stationId', true], ['text', '/admin/stations']], [], [], []],
    'admin_view_user' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::getUsers'], [], [['text', '/admin/list-user']], [], [], []],
    'app_recharge_session' => [[], ['_controller' => 'App\\Controller\\RechargeSessionController::index'], [], [['text', '/session']], [], [], []],
    'app_sessions_history' => [[], ['_controller' => 'App\\Controller\\RechargeSessionController::history'], [], [['text', '/session/history']], [], [], []],
    'run_session' => [['evseId'], ['_controller' => 'App\\Controller\\RechargeSessionController::startSession'], [], [['text', '/start'], ['variable', '/', '[^/]++', 'evseId', true], ['text', '/session']], [], [], []],
    'stop_session' => [['sessionId'], ['_controller' => 'App\\Controller\\RechargeSessionController::stopSession'], [], [['text', '/stop'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/session']], [], [], []],
    'pause_session' => [['sessionId'], ['_controller' => 'App\\Controller\\RechargeSessionController::pauseSession'], [], [['text', '/pause'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/session']], [], [], []],
    'resume_session' => [['sessionId'], ['_controller' => 'App\\Controller\\RechargeSessionController::resumeSession'], [], [['text', '/resume'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/session']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'app_station_index' => [[], ['_controller' => 'App\\Controller\\StationController::index'], [], [['text', '/']], [], [], []],
    'view_stations' => [[], ['_controller' => 'App\\Controller\\StationController::getStations'], [], [['text', '/stations']], [], [], []],
    'view_map' => [[], ['_controller' => 'App\\Controller\\StationController::viewMap'], [], [['text', '/stations/map']], [], [], []],
    'info_station' => [['stationId'], ['_controller' => 'App\\Controller\\StationController::getStationEvses'], [], [['variable', '/', '[^/]++', 'stationId', true], ['text', '/stations']], [], [], []],
    'user_profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/profile']], [], [], []],
    'user_change_password' => [[], ['_controller' => 'App\\Controller\\UserController::changePassword'], [], [['text', '/profile/change-password']], [], [], []],
    'App\Controller\Admin\EvseController::create' => [['stationId'], ['_controller' => 'App\\Controller\\Admin\\EvseController::create'], [], [['text', '/create'], ['variable', '/', '[^/]++', 'stationId', true], ['text', '/admin/stations']], [], [], []],
    'App\Controller\Admin\RechargeSessionController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\RechargeSessionController::index'], [], [['text', '/admin/session']], [], [], []],
    'App\Controller\Admin\RechargeSessionController::stopSession' => [['sessionId'], ['_controller' => 'App\\Controller\\Admin\\RechargeSessionController::stopSession'], [], [['text', '/stop'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/admin/session']], [], [], []],
    'App\Controller\Admin\StationController::create' => [[], ['_controller' => 'App\\Controller\\Admin\\StationController::create'], [], [['text', '/admin/stations/create']], [], [], []],
    'App\Controller\Admin\StationController::getStations' => [[], ['_controller' => 'App\\Controller\\Admin\\StationController::getStations'], [], [['text', '/admin/stations']], [], [], []],
    'App\Controller\Admin\StationController::getStationEvses' => [['stationId'], ['_controller' => 'App\\Controller\\Admin\\StationController::getStationEvses'], [], [['variable', '/', '[^/]++', 'stationId', true], ['text', '/admin/stations']], [], [], []],
    'App\Controller\Admin\UserController::getUsers' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::getUsers'], [], [['text', '/admin/list-user']], [], [], []],
    'App\Controller\RechargeSessionController::index' => [[], ['_controller' => 'App\\Controller\\RechargeSessionController::index'], [], [['text', '/session']], [], [], []],
    'App\Controller\RechargeSessionController::history' => [[], ['_controller' => 'App\\Controller\\RechargeSessionController::history'], [], [['text', '/session/history']], [], [], []],
    'App\Controller\RechargeSessionController::startSession' => [['evseId'], ['_controller' => 'App\\Controller\\RechargeSessionController::startSession'], [], [['text', '/start'], ['variable', '/', '[^/]++', 'evseId', true], ['text', '/session']], [], [], []],
    'App\Controller\RechargeSessionController::stopSession' => [['sessionId'], ['_controller' => 'App\\Controller\\RechargeSessionController::stopSession'], [], [['text', '/stop'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/session']], [], [], []],
    'App\Controller\RechargeSessionController::pauseSession' => [['sessionId'], ['_controller' => 'App\\Controller\\RechargeSessionController::pauseSession'], [], [['text', '/pause'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/session']], [], [], []],
    'App\Controller\RechargeSessionController::resumeSession' => [['sessionId'], ['_controller' => 'App\\Controller\\RechargeSessionController::resumeSession'], [], [['text', '/resume'], ['variable', '/', '[^/]++', 'sessionId', true], ['text', '/session']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\StationController::index' => [[], ['_controller' => 'App\\Controller\\StationController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\StationController::getStations' => [[], ['_controller' => 'App\\Controller\\StationController::getStations'], [], [['text', '/stations']], [], [], []],
    'App\Controller\StationController::viewMap' => [[], ['_controller' => 'App\\Controller\\StationController::viewMap'], [], [['text', '/stations/map']], [], [], []],
    'App\Controller\StationController::getStationEvses' => [['stationId'], ['_controller' => 'App\\Controller\\StationController::getStationEvses'], [], [['variable', '/', '[^/]++', 'stationId', true], ['text', '/stations']], [], [], []],
    'App\Controller\UserController::profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/profile']], [], [], []],
    'App\Controller\UserController::changePassword' => [[], ['_controller' => 'App\\Controller\\UserController::changePassword'], [], [['text', '/profile/change-password']], [], [], []],
];
