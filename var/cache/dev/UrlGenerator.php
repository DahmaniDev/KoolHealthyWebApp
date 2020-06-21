<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\DefaultController::home'], [], [['text', '/home']], [], []],
    'CalculateMyNeeds' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::CalculateMyNeeds'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/CalculateMyNeeds']], [], []],
    'Articles' => [[], ['_controller' => 'App\\Controller\\DefaultController::Articles'], [], [['text', '/Articles']], [], []],
    'PreparedMeals' => [[], ['_controller' => 'App\\Controller\\DefaultController::PreparedMeals'], [], [['text', '/PreparedMeals']], [], []],
    'PreparemyMeal' => [['calories'], ['_controller' => 'App\\Controller\\DefaultController::PreparemyMeal'], [], [['variable', '/', '[^/]++', 'calories'], ['text', '/PreparemyMeal']], [], []],
    'Profile' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::Profile'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Profile']], [], []],
    'Commandes' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::Commandes'], [], [['text', '/Commandes'], ['variable', '/', '[^/]++', 'id'], ['text', '/Profile']], [], []],
    'Contact' => [[], ['_controller' => 'App\\Controller\\DefaultController::contact'], [], [['text', '/Contact']], [], []],
    'blog' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::blog'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/blog']], [], []],
    'recette' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::recette'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/recette']], [], []],
    'partenariat' => [[], ['_controller' => 'App\\Controller\\DefaultController::partenariat'], [], [['text', '/partenariat']], [], []],
    'repas' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::repas'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/repas']], [], []],
    'commanderrepas' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::commanderrepas'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/commander-repas']], [], []],
    'ModiferProfile' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::ModifierProfile'], [], [['text', '/ModifierProfile'], ['variable', '/', '[^/]++', 'id'], ['text', '/Profile']], [], []],
    'adminInterface' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminInterface'], [], [['text', '/admin-kool-healthy-123456789']], [], []],
    'adminHistoriqueCommandes' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminHistoriqueCommandes'], [], [['text', '/admin-kool-healthy-123456789-historiques-commandes']], [], []],
    'adminListeTraiteur' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminListeTraiteur'], [], [['text', '/admin-kool-healthy-123456789-liste-traiteur']], [], []],
    'adminListeMembre' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminListeMembre'], [], [['text', '/admin-kool-healthy-123456789-liste-membre']], [], []],
    'adminListeMessages' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminListeMessages'], [], [['text', '/admin-kool-healthy-123456789-liste-messages']], [], []],
    'adminUploadArticle' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminUploadArticle'], [], [['text', '/admin-kool-healthy-123456789-upload-article']], [], []],
    'adminListeArticle' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminListeArticle'], [], [['text', '/admin-kool-healthy-123456789-liste-article']], [], []],
    'adminSupprimerArticle' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::adminSupprimerArticle'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin-kool-healthy-123456789-supprimer-article']], [], []],
    'adminSupprimerRecette' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::adminSupprimerRecette'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin-kool-healthy-123456789-supprimer-recette']], [], []],
    'adminAjoutTraiteur' => [[], ['_controller' => 'App\\Controller\\DefaultController::adminAjoutTraiteur'], [], [['text', '/admin-kool-healthy-123456789-ajout-traiteur']], [], []],
    'adminModifierTraiteur' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::adminModifierTraiteur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin-kool-healthy-123456789-modifier-traiteur']], [], []],
    'adminSupprimerTraiteur' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::adminSupprimerTraiteur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin-kool-healthy-123456789-supprimer-traiteur']], [], []],
    'adminSupprimerUser' => [['id'], ['_controller' => 'App\\Controller\\DefaultController::adminSupprimerUser'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin-kool-healthy-123456789-supprimer-user']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
