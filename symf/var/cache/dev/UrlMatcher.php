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
        '/afficherArb' => [[['_route' => 'display_arb', '_controller' => 'App\\Controller\\ArbitreMatchController::index'], null, null, null, false, false, null]],
        '/addArbitre' => [[['_route' => 'addArb', '_controller' => 'App\\Controller\\ArbitreMatchController::addTerrain'], null, null, null, false, false, null]],
        '/listArb' => [[['_route' => 'listArb', '_controller' => 'App\\Controller\\ArbitreMatchController::list'], null, ['GET' => 0], null, false, false, null]],
        '/TrierspcASC' => [[['_route' => 'triespc', '_controller' => 'App\\Controller\\ArbitreMatchController::trierSpecialite'], null, ['GET' => 0], null, false, false, null]],
        '/search' => [
            [['_route' => 'recherchearb', '_controller' => 'App\\Controller\\ArbitreMatchController::searchoffreajax'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'ajax_search', '_controller' => 'Club:Entity:search'], null, null, null, false, false, null],
        ],
        '/backk' => [[['_route' => 'app_backkkkk', '_controller' => 'App\\Controller\\BackkkkkController::index1'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\BackkkkkController::user'], null, null, null, false, false, null]],
        '/terrain' => [[['_route' => 'terrain', '_controller' => 'App\\Controller\\BackkkkkController::terrain'], null, null, null, false, false, null]],
        '/stock' => [[['_route' => 'stock', '_controller' => 'App\\Controller\\BackkkkkController::stock'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'club', '_controller' => 'App\\Controller\\BackkkkkController::club'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement', '_controller' => 'App\\Controller\\BackkkkkController::evenement'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\BackkkkkController::dashboard'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_blog_indexcontact', '_controller' => 'App\\Controller\\BlogController::indexContact'], null, null, null, false, false, null]],
        '/afficher' => [
            [['_route' => 'display_CategorieClub', '_controller' => 'App\\Controller\\CategorieClubController::index'], null, null, null, false, false, null],
            [['_route' => 'display_terrain', '_controller' => 'App\\Controller\\TerrainController::index'], null, null, null, false, false, null],
        ],
        '/addCategorieClub' => [[['_route' => 'addCategorie_club', '_controller' => 'App\\Controller\\CategorieClubController::addCatClub'], null, null, null, false, false, null]],
        '/afficher2' => [[['_route' => 'display_CategorieStock', '_controller' => 'App\\Controller\\CategorieStockController::index'], null, null, null, false, false, null]],
        '/addCategorieStock' => [[['_route' => 'app_categorie_stock', '_controller' => 'App\\Controller\\CategorieStockController::addCategorieStock'], null, null, null, false, false, null]],
        '/afficher1' => [[['_route' => 'display_club', '_controller' => 'App\\Controller\\ClubController::index'], null, null, null, false, false, null]],
        '/addClub' => [[['_route' => 'adddd', '_controller' => 'App\\Controller\\ClubController::addClub'], null, null, null, false, false, null]],
        '/afficherClientClub' => [[['_route' => 'afficherClientClub', '_controller' => 'App\\Controller\\ClubController::afficherClientClub'], null, null, null, false, false, null]],
        '/afficherClientClubCategorie' => [[['_route' => 'afficherClientClubCategorie', '_controller' => 'App\\Controller\\ClubController::afficherClientClubCategorie'], null, null, null, false, false, null]],
        '/chart' => [[['_route' => 'chary_index', '_controller' => 'App\\Controller\\ClubController::chart'], null, null, null, false, false, null]],
        '/chary_index_ajax' => [[['_route' => 'chary_index_ajax', '_controller' => 'App\\Controller\\ClubController::chary_index_ajax'], null, null, null, false, false, null]],
        '/afficherr' => [[['_route' => 'display_match', '_controller' => 'App\\Controller\\FootController::index'], null, null, null, false, false, null]],
        '/addMatch' => [[['_route' => 'addMatch', '_controller' => 'App\\Controller\\FootController::addTerrain'], null, null, null, false, false, null]],
        '/listMatch' => [[['_route' => 'listMatch', '_controller' => 'App\\Controller\\FootController::list'], null, ['GET' => 0], null, false, false, null]],
        '/TrierdateASC/back' => [[['_route' => 'trie1', '_controller' => 'App\\Controller\\FootController::trierdate1'], null, ['GET' => 0], null, false, false, null]],
        '/TriertypeDESC/back' => [[['_route' => 'trie3', '_controller' => 'App\\Controller\\FootController::Triertype'], null, ['GET' => 0], null, false, false, null]],
        '/search/back' => [[['_route' => 'offreajax', '_controller' => 'App\\Controller\\FootController::searchoffreajax'], null, ['GET' => 0], null, false, false, null]],
        '/admin/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\FootController::calendar'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'stats', '_controller' => 'App\\Controller\\FootController::statistiques'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/afficherrr' => [[['_route' => 'match', '_controller' => 'App\\Controller\\FrontController::indexfront'], null, null, null, false, false, null]],
        '/homeclient' => [[['_route' => 'home_client', '_controller' => 'App\\Controller\\HomeClientController::index'], null, null, null, false, false, null]],
        '/json/addStock' => [[['_route' => 'addStock', '_controller' => 'App\\Controller\\JsonController::addStock'], null, null, null, false, false, null]],
        '/json/updateStock' => [[['_route' => 'updateStock', '_controller' => 'App\\Controller\\JsonController::updateStock'], null, null, null, false, false, null]],
        '/json/deleteStock' => [[['_route' => 'deleteStock', '_controller' => 'App\\Controller\\JsonController::deleteStock'], null, null, null, false, false, null]],
        '/json/afficheStock' => [[['_route' => 'afficheStock', '_controller' => 'App\\Controller\\JsonController::afficheStock'], null, null, null, false, false, null]],
        '/json/addClub' => [[['_route' => 'addClub', '_controller' => 'App\\Controller\\JsonController::addClub'], null, null, null, false, false, null]],
        '/json/updateClub' => [[['_route' => 'updateClub', '_controller' => 'App\\Controller\\JsonController::updateClub'], null, null, null, false, false, null]],
        '/json/deleteClub' => [[['_route' => 'deleteClub', '_controller' => 'App\\Controller\\JsonController::deleteClub'], null, null, null, false, false, null]],
        '/json/afficheClub' => [[['_route' => 'afficheClub', '_controller' => 'App\\Controller\\JsonController::afficheClub'], null, null, null, false, false, null]],
        '/personnel/terrain' => [[['_route' => 'app_personnel_terrain', '_controller' => 'App\\Controller\\PersonnelTerrainController::index'], null, null, null, false, false, null]],
        '/stock_list' => [[['_route' => 'stock_list', '_controller' => 'App\\Controller\\StockController::index'], null, null, null, false, false, null]],
        '/add_stock' => [[['_route' => 'add', '_controller' => 'App\\Controller\\StockController::addstock'], null, null, null, false, false, null]],
        '/ajax_search_stock' => [[['_route' => 'ajax_search_stock', '_controller' => 'App\\Controller\\StockController::chercherstock'], null, null, null, true, false, null]],
        '/topfive' => [[['_route' => 'topfive', '_controller' => 'App\\Controller\\StockController::afficherTopfivestock'], null, null, null, false, false, null]],
        '/addTerrain' => [[['_route' => 'addTerrain', '_controller' => 'App\\Controller\\TerrainController::addTerrain'], null, null, null, false, false, null]],
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
                .'|/s(?'
                    .'|upprimer(?'
                        .'|/([^/]++)(?'
                            .'|(*:197)'
                        .')'
                        .'|r/([^/]++)(*:216)'
                        .'|2/([^/]++)(*:234)'
                        .'|1/([^/]++)(*:252)'
                        .'|_stock/([^/]++)(*:275)'
                    .')'
                    .'|how_(?'
                        .'|clubs_cat/([^/]++)(*:309)'
                        .'|products_cat/([^/]++)(*:338)'
                    .')'
                .')'
                .'|/modifier(?'
                    .'|Arbitre/([^/]++)(*:376)'
                    .'|Categorie(?'
                        .'|Club/([^/]++)(*:409)'
                        .'|Stock/([^/]++)(*:431)'
                    .')'
                    .'|club/([^/]++)(*:453)'
                    .'|Match/([^/]++)(*:475)'
                    .'|_stock/([^/]++)(*:498)'
                    .'|Terrain/([^/]++)(*:522)'
                .')'
                .'|/detail(?'
                    .'|_stock/([^/]++)(*:556)'
                    .'|stockClient/([^/]++)(*:584)'
                .')'
                .'|/pdf/([^/]++)(*:606)'
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
        197 => [
            [['_route' => 'supp_arb', '_controller' => 'App\\Controller\\ArbitreMatchController::supprimer'], ['id'], null, null, false, true, null],
            [['_route' => 'supp_match', '_controller' => 'App\\Controller\\FootController::supprimer'], ['id'], null, null, false, true, null],
            [['_route' => 'supp_terrain', '_controller' => 'App\\Controller\\TerrainController::supprimer'], ['id'], null, null, false, true, null],
        ],
        216 => [[['_route' => 'suppp', '_controller' => 'App\\Controller\\CategorieClubController::supprimer'], ['id'], null, null, false, true, null]],
        234 => [[['_route' => 'supp_categoriestock', '_controller' => 'App\\Controller\\CategorieStockController::supprimer'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'supp_club', '_controller' => 'App\\Controller\\ClubController::supprimer'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'suppression', '_controller' => 'App\\Controller\\StockController::supprimerstock'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'show_clubs_cat', '_controller' => 'App\\Controller\\CategorieClubController::showClubs'], ['id'], null, null, false, true, null]],
        338 => [[['_route' => 'show_products', '_controller' => 'App\\Controller\\CategorieStockController::showProducts'], ['id'], null, null, false, true, null]],
        376 => [[['_route' => 'modifierArb', '_controller' => 'App\\Controller\\ArbitreMatchController::modifierTerrain'], ['id'], null, null, false, true, null]],
        409 => [[['_route' => 'modifierCategorieClub', '_controller' => 'App\\Controller\\CategorieClubController::modifierClub'], ['id'], null, null, false, true, null]],
        431 => [[['_route' => 'modifierCategorieStock', '_controller' => 'App\\Controller\\CategorieStockController::modifierStock'], ['id'], null, null, false, true, null]],
        453 => [[['_route' => 'modifierclub', '_controller' => 'App\\Controller\\ClubController::modifierTerrain'], ['id'], null, null, false, true, null]],
        475 => [[['_route' => 'modifierMatch', '_controller' => 'App\\Controller\\FootController::modifierTerrain'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'modification', '_controller' => 'App\\Controller\\StockController::modifierstock'], ['id'], null, null, false, true, null]],
        522 => [[['_route' => 'modifierTerrain', '_controller' => 'App\\Controller\\TerrainController::modifierTerrain'], ['id'], null, null, false, true, null]],
        556 => [[['_route' => 'detail_stock', '_controller' => 'App\\Controller\\StockController::detailstock'], ['id'], null, null, false, true, null]],
        584 => [[['_route' => 'detailstockClient', '_controller' => 'App\\Controller\\StockController::detailstockClient'], ['id'], null, null, false, true, null]],
        606 => [
            [['_route' => 'article_pdf', '_controller' => 'App\\Controller\\StockController::stockpdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
