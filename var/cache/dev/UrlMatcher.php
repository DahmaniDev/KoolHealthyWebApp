<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/Articles' => [[['_route' => 'Articles', '_controller' => 'App\\Controller\\DefaultController::Articles'], null, null, null, false, false, null]],
        '/PreparedMeals' => [[['_route' => 'PreparedMeals', '_controller' => 'App\\Controller\\DefaultController::PreparedMeals'], null, null, null, false, false, null]],
        '/Contact' => [[['_route' => 'Contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, null]],
        '/partenariat' => [[['_route' => 'partenariat', '_controller' => 'App\\Controller\\DefaultController::partenariat'], null, null, null, false, false, null]],
        '/admin-kool-healthy-123456789' => [[['_route' => 'adminInterface', '_controller' => 'App\\Controller\\DefaultController::adminInterface'], null, null, null, false, false, null]],
        '/admin-kool-healthy-123456789-historiques-commandes' => [[['_route' => 'adminHistoriqueCommandes', '_controller' => 'App\\Controller\\DefaultController::adminHistoriqueCommandes'], null, null, null, false, false, null]],
        '/admin-kool-healthy-123456789-liste-traiteur' => [[['_route' => 'adminListeTraiteur', '_controller' => 'App\\Controller\\DefaultController::adminListeTraiteur'], null, null, null, false, false, null]],
        '/admin-kool-healthy-123456789-liste-membre' => [[['_route' => 'adminListeMembre', '_controller' => 'App\\Controller\\DefaultController::adminListeMembre'], null, null, null, false, false, null]],
        '/admin-kool-healthy-123456789-upload-article' => [[['_route' => 'adminUploadArticle', '_controller' => 'App\\Controller\\DefaultController::adminUploadArticle'], null, null, null, false, false, null]],
        '/admin-kool-healthy-123456789-ajout-traiteur' => [[['_route' => 'adminAjoutTraiteur', '_controller' => 'App\\Controller\\DefaultController::adminAjoutTraiteur'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/CalculateMyNeeds/([^/]++)(*:195)'
                .'|/Profile/([^/]++)(?'
                    .'|(*:223)'
                    .'|/(?'
                        .'|Commandes(*:244)'
                        .'|ModifierProfile(*:267)'
                    .')'
                .')'
                .'|/blog/([^/]++)(*:291)'
                .'|/re(?'
                    .'|cette/([^/]++)(*:319)'
                    .'|pas/([^/]++)(*:339)'
                .')'
                .'|/admin\\-kool\\-healthy\\-123456789\\-modifier\\-traiteur/([^/]++)(*:409)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'CalculateMyNeeds', '_controller' => 'App\\Controller\\DefaultController::CalculateMyNeeds'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'Profile', '_controller' => 'App\\Controller\\DefaultController::Profile'], ['id'], null, null, false, true, null]],
        244 => [[['_route' => 'Commandes', '_controller' => 'App\\Controller\\DefaultController::Commandes'], ['id'], null, null, false, false, null]],
        267 => [[['_route' => 'ModiferProfile', '_controller' => 'App\\Controller\\DefaultController::ModifierProfile'], ['id'], null, null, false, false, null]],
        291 => [[['_route' => 'blog', '_controller' => 'App\\Controller\\DefaultController::blog'], ['id'], null, null, false, true, null]],
        319 => [[['_route' => 'recette', '_controller' => 'App\\Controller\\DefaultController::recette'], ['id'], null, null, false, true, null]],
        339 => [[['_route' => 'repas', '_controller' => 'App\\Controller\\DefaultController::repas'], ['id'], null, null, false, true, null]],
        409 => [
            [['_route' => 'adminModifierTraiteur', '_controller' => 'App\\Controller\\DefaultController::adminModifierTraiteur'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
