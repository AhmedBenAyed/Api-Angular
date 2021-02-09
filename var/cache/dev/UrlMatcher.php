<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activity' => [[['_route' => 'activity_index', '_controller' => 'App\\Controller\\ActivityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activity/new' => [[['_route' => 'activity_new', '_controller' => 'App\\Controller\\ActivityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/city' => [[['_route' => 'city_index', '_controller' => 'App\\Controller\\CityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/city/new' => [[['_route' => 'city_new', '_controller' => 'App\\Controller\\CityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/continent' => [[['_route' => 'continent_index', '_controller' => 'App\\Controller\\ContinentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/continent/new' => [[['_route' => 'continent_new', '_controller' => 'App\\Controller\\ContinentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/country' => [[['_route' => 'country_index', '_controller' => 'App\\Controller\\CountryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/country/new' => [[['_route' => 'country_new', '_controller' => 'App\\Controller\\CountryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hosting' => [[['_route' => 'hosting_index', '_controller' => 'App\\Controller\\HostingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hosting/new' => [[['_route' => 'hosting_new', '_controller' => 'App\\Controller\\HostingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trip' => [[['_route' => 'trip_index', '_controller' => 'App\\Controller\\TripController::index'], null, ['GET' => 0], null, true, false, null]],
        '/trip/new' => [[['_route' => 'trip_new', '_controller' => 'App\\Controller\\TripController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/activity/(?'
                    .'|view/([^/]++)(*:68)'
                    .'|delete/([^/]++)(*:90)'
                .')'
                .'|/c(?'
                    .'|ity/(?'
                        .'|months/([^/]++)(*:125)'
                        .'|activity/([^/]++)(*:150)'
                        .'|view/([^/]++)(*:171)'
                        .'|([^/]++)(*:187)'
                    .')'
                    .'|o(?'
                        .'|ntinent/(?'
                            .'|view/([^/]++)(*:224)'
                            .'|edit/([^/]++)(*:245)'
                            .'|delete/([^/]++)(*:268)'
                        .')'
                        .'|untry(?'
                            .'|/(?'
                                .'|view/([^/]++)(*:302)'
                                .'|edit/([^/]++)(*:323)'
                                .'|([^/]++)/edit(*:344)'
                            .')'
                            .'|delete/([^/]++)(?'
                                .'|(*:371)'
                                .'|(*:379)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/hosting/(?'
                    .'|view/([^/]++)(*:416)'
                    .'|edit/([^/]++)(*:437)'
                    .'|delete/([^/]++)(*:460)'
                .')'
                .'|/trip(?'
                    .'|/view/([^/]++)(*:491)'
                    .'|delete/([^/]++)(*:514)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        68 => [[['_route' => 'activity_show', '_controller' => 'App\\Controller\\ActivityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        90 => [[['_route' => 'activity_delete', '_controller' => 'App\\Controller\\ActivityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        125 => [[['_route' => 'city_months', '_controller' => 'App\\Controller\\CityController::citiesMonths'], ['id'], ['GET' => 0], null, false, true, null]],
        150 => [[['_route' => 'city_activity', '_controller' => 'App\\Controller\\CityController::citiesActivity'], ['name'], ['GET' => 0], null, false, true, null]],
        171 => [[['_route' => 'city_show', '_controller' => 'App\\Controller\\CityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        187 => [[['_route' => 'city_delete', '_controller' => 'App\\Controller\\CityController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        224 => [[['_route' => 'continent_show', '_controller' => 'App\\Controller\\ContinentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'continent_edit', '_controller' => 'App\\Controller\\ContinentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        268 => [[['_route' => 'continent_delete', '_controller' => 'App\\Controller\\ContinentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'country_show', '_controller' => 'App\\Controller\\CountryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'country_edit', '_controller' => 'App\\Controller\\CountryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        344 => [[['_route' => 'country_edit_name', '_controller' => 'App\\Controller\\CountryController::editByName'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [[['_route' => 'country_delete', '_controller' => 'App\\Controller\\CountryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        379 => [[['_route' => 'country_delete_name', '_controller' => 'App\\Controller\\CountryController::deleteByName'], ['name'], ['DELETE' => 0], null, false, true, null]],
        416 => [[['_route' => 'hosting_show', '_controller' => 'App\\Controller\\HostingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'hosting_edit', '_controller' => 'App\\Controller\\HostingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        460 => [[['_route' => 'hosting_delete', '_controller' => 'App\\Controller\\HostingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        491 => [[['_route' => 'trip_show', '_controller' => 'App\\Controller\\TripController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        514 => [
            [['_route' => 'trip_delete', '_controller' => 'App\\Controller\\TripController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
