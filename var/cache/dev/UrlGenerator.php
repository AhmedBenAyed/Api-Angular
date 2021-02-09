<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'activity_index' => [[], ['_controller' => 'App\\Controller\\ActivityController::index'], [], [['text', '/activity/']], [], []],
    'activity_new' => [[], ['_controller' => 'App\\Controller\\ActivityController::new'], [], [['text', '/activity/new']], [], []],
    'activity_show' => [['id'], ['_controller' => 'App\\Controller\\ActivityController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activity/view']], [], []],
    'activity_delete' => [['id'], ['_controller' => 'App\\Controller\\ActivityController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activity/delete']], [], []],
    'city_index' => [[], ['_controller' => 'App\\Controller\\CityController::index'], [], [['text', '/city/']], [], []],
    'city_months' => [['id'], ['_controller' => 'App\\Controller\\CityController::citiesMonths'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/city/months']], [], []],
    'city_activity' => [['name'], ['_controller' => 'App\\Controller\\CityController::citiesActivity'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/city/activity']], [], []],
    'city_new' => [[], ['_controller' => 'App\\Controller\\CityController::new'], [], [['text', '/city/new']], [], []],
    'city_show' => [['id'], ['_controller' => 'App\\Controller\\CityController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/city/view']], [], []],
    'city_delete' => [['id'], ['_controller' => 'App\\Controller\\CityController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/city']], [], []],
    'continent_index' => [[], ['_controller' => 'App\\Controller\\ContinentController::index'], [], [['text', '/continent/']], [], []],
    'continent_new' => [[], ['_controller' => 'App\\Controller\\ContinentController::new'], [], [['text', '/continent/new']], [], []],
    'continent_show' => [['id'], ['_controller' => 'App\\Controller\\ContinentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/continent/view']], [], []],
    'continent_edit' => [['id'], ['_controller' => 'App\\Controller\\ContinentController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/continent/edit']], [], []],
    'continent_delete' => [['id'], ['_controller' => 'App\\Controller\\ContinentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/continent/delete']], [], []],
    'country_index' => [[], ['_controller' => 'App\\Controller\\CountryController::index'], [], [['text', '/country/']], [], []],
    'country_new' => [[], ['_controller' => 'App\\Controller\\CountryController::new'], [], [['text', '/country/new']], [], []],
    'country_show' => [['id'], ['_controller' => 'App\\Controller\\CountryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/country/view']], [], []],
    'country_edit' => [['id'], ['_controller' => 'App\\Controller\\CountryController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/country/edit']], [], []],
    'country_edit_name' => [['id'], ['_controller' => 'App\\Controller\\CountryController::editByName'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/country']], [], []],
    'country_delete' => [['id'], ['_controller' => 'App\\Controller\\CountryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/countrydelete']], [], []],
    'country_delete_name' => [['name'], ['_controller' => 'App\\Controller\\CountryController::deleteByName'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/countrydelete']], [], []],
    'hosting_index' => [[], ['_controller' => 'App\\Controller\\HostingController::index'], [], [['text', '/hosting/']], [], []],
    'hosting_new' => [[], ['_controller' => 'App\\Controller\\HostingController::new'], [], [['text', '/hosting/new']], [], []],
    'hosting_show' => [['id'], ['_controller' => 'App\\Controller\\HostingController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hosting/view']], [], []],
    'hosting_edit' => [['id'], ['_controller' => 'App\\Controller\\HostingController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hosting/edit']], [], []],
    'hosting_delete' => [['id'], ['_controller' => 'App\\Controller\\HostingController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/hosting/delete']], [], []],
    'trip_index' => [[], ['_controller' => 'App\\Controller\\TripController::index'], [], [['text', '/trip/']], [], []],
    'trip_new' => [[], ['_controller' => 'App\\Controller\\TripController::new'], [], [['text', '/trip/new']], [], []],
    'trip_show' => [['id'], ['_controller' => 'App\\Controller\\TripController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/trip/view']], [], []],
    'trip_delete' => [['id'], ['_controller' => 'App\\Controller\\TripController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tripdelete']], [], []],
];
