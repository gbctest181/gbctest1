<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/alimentation' => [[['_route' => 'alimentation_index', '_controller' => 'App\\Controller\\AlimentationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/alimentation/new' => [[['_route' => 'alimentation_new', '_controller' => 'App\\Controller\\AlimentationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/final' => [[['_route' => 'client_final_index', '_controller' => 'App\\Controller\\ClientFinalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/final/new' => [[['_route' => 'client_final_new', '_controller' => 'App\\Controller\\ClientFinalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/intervention' => [[['_route' => 'client_intervention_index', '_controller' => 'App\\Controller\\ClientInterventionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/intervention/new' => [[['_route' => 'client_intervention_new', '_controller' => 'App\\Controller\\ClientInterventionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formation' => [[['_route' => 'formation_index', '_controller' => 'App\\Controller\\FormationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/formation/new' => [[['_route' => 'formation_new', '_controller' => 'App\\Controller\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/intervention' => [[['_route' => 'intervention_index', '_controller' => 'App\\Controller\\InterventionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/intervention/new' => [[['_route' => 'intervention_new', '_controller' => 'App\\Controller\\InterventionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materiel/b/i' => [[['_route' => 'materiel_b_i_index', '_controller' => 'App\\Controller\\MaterielBIController::index'], null, ['GET' => 0], null, true, false, null]],
        '/materiel/b/i/new' => [[['_route' => 'materiel_b_i_new', '_controller' => 'App\\Controller\\MaterielBIController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/materiel/v/e' => [[['_route' => 'materiel_v_e_index', '_controller' => 'App\\Controller\\MaterielVEController::index'], null, ['GET' => 0], null, true, false, null]],
        '/materiel/v/e/new' => [[['_route' => 'materiel_v_e_new', '_controller' => 'App\\Controller\\MaterielVEController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/piece/b/i' => [[['_route' => 'piece_b_i_index', '_controller' => 'App\\Controller\\PieceBIController::index'], null, ['GET' => 0], null, true, false, null]],
        '/piece/b/i/new' => [[['_route' => 'piece_b_i_new', '_controller' => 'App\\Controller\\PieceBIController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/piece/v/e' => [[['_route' => 'piece_v_e_index', '_controller' => 'App\\Controller\\PieceVEController::index'], null, ['GET' => 0], null, true, false, null]],
        '/piece/v/e/new' => [[['_route' => 'piece_v_e_new', '_controller' => 'App\\Controller\\PieceVEController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/proces/verbal' => [[['_route' => 'proces_verbal_index', '_controller' => 'App\\Controller\\ProcesVerbalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/proces/verbal/new' => [[['_route' => 'proces_verbal_new', '_controller' => 'App\\Controller\\ProcesVerbalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/technicien' => [[['_route' => 'technicien_index', '_controller' => 'App\\Controller\\TechnicienController::index'], null, ['GET' => 0], null, true, false, null]],
        '/technicien/new' => [[['_route' => 'technicien_new', '_controller' => 'App\\Controller\\TechnicienController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/a(?'
                    .'|limentation/([^/]++)(?'
                        .'|(*:70)'
                        .'|/edit(*:82)'
                        .'|(*:89)'
                    .')'
                    .'|pi(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:130)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:161)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:197)'
                        .')'
                    .')'
                .')'
                .'|/client/(?'
                    .'|final/([^/]++)(?'
                        .'|(*:236)'
                        .'|/edit(*:249)'
                        .'|(*:257)'
                    .')'
                    .'|intervention/([^/]++)(?'
                        .'|(*:290)'
                        .'|/edit(*:303)'
                        .'|(*:311)'
                    .')'
                .')'
                .'|/formation/([^/]++)(?'
                    .'|(*:343)'
                    .'|/edit(*:356)'
                    .'|(*:364)'
                .')'
                .'|/intervention/([^/]++)(?'
                    .'|(*:398)'
                    .'|/edit(*:411)'
                    .'|(*:419)'
                .')'
                .'|/materiel/(?'
                    .'|b/i/([^/]++)(?'
                        .'|(*:456)'
                        .'|/edit(*:469)'
                        .'|(*:477)'
                    .')'
                    .'|v/e/([^/]++)(?'
                        .'|(*:501)'
                        .'|/edit(*:514)'
                        .'|(*:522)'
                    .')'
                .')'
                .'|/p(?'
                    .'|iece/(?'
                        .'|b/i/([^/]++)(?'
                            .'|(*:560)'
                            .'|/edit(*:573)'
                            .'|(*:581)'
                        .')'
                        .'|v/e/([^/]++)(?'
                            .'|(*:605)'
                            .'|/edit(*:618)'
                            .'|(*:626)'
                        .')'
                    .')'
                    .'|roces/verbal/([^/]++)(?'
                        .'|(*:660)'
                        .'|/edit(*:673)'
                        .'|(*:681)'
                    .')'
                .')'
                .'|/technicien/([^/]++)(?'
                    .'|(*:714)'
                    .'|/edit(*:727)'
                    .'|(*:735)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'alimentation_show', '_controller' => 'App\\Controller\\AlimentationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'alimentation_edit', '_controller' => 'App\\Controller\\AlimentationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        89 => [[['_route' => 'alimentation_delete', '_controller' => 'App\\Controller\\AlimentationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        130 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        161 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        197 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        236 => [[['_route' => 'client_final_show', '_controller' => 'App\\Controller\\ClientFinalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'client_final_edit', '_controller' => 'App\\Controller\\ClientFinalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'client_final_delete', '_controller' => 'App\\Controller\\ClientFinalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        290 => [[['_route' => 'client_intervention_show', '_controller' => 'App\\Controller\\ClientInterventionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'client_intervention_edit', '_controller' => 'App\\Controller\\ClientInterventionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        311 => [[['_route' => 'client_intervention_delete', '_controller' => 'App\\Controller\\ClientInterventionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        343 => [[['_route' => 'formation_show', '_controller' => 'App\\Controller\\FormationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'formation_edit', '_controller' => 'App\\Controller\\FormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        398 => [[['_route' => 'intervention_show', '_controller' => 'App\\Controller\\InterventionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'intervention_edit', '_controller' => 'App\\Controller\\InterventionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        419 => [[['_route' => 'intervention_delete', '_controller' => 'App\\Controller\\InterventionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        456 => [[['_route' => 'materiel_b_i_show', '_controller' => 'App\\Controller\\MaterielBIController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'materiel_b_i_edit', '_controller' => 'App\\Controller\\MaterielBIController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'materiel_b_i_delete', '_controller' => 'App\\Controller\\MaterielBIController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        501 => [[['_route' => 'materiel_v_e_show', '_controller' => 'App\\Controller\\MaterielVEController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        514 => [[['_route' => 'materiel_v_e_edit', '_controller' => 'App\\Controller\\MaterielVEController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        522 => [[['_route' => 'materiel_v_e_delete', '_controller' => 'App\\Controller\\MaterielVEController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        560 => [[['_route' => 'piece_b_i_show', '_controller' => 'App\\Controller\\PieceBIController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        573 => [[['_route' => 'piece_b_i_edit', '_controller' => 'App\\Controller\\PieceBIController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        581 => [[['_route' => 'piece_b_i_delete', '_controller' => 'App\\Controller\\PieceBIController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        605 => [[['_route' => 'piece_v_e_show', '_controller' => 'App\\Controller\\PieceVEController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        618 => [[['_route' => 'piece_v_e_edit', '_controller' => 'App\\Controller\\PieceVEController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        626 => [[['_route' => 'piece_v_e_delete', '_controller' => 'App\\Controller\\PieceVEController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        660 => [[['_route' => 'proces_verbal_show', '_controller' => 'App\\Controller\\ProcesVerbalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        673 => [[['_route' => 'proces_verbal_edit', '_controller' => 'App\\Controller\\ProcesVerbalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        681 => [[['_route' => 'proces_verbal_delete', '_controller' => 'App\\Controller\\ProcesVerbalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        714 => [[['_route' => 'technicien_show', '_controller' => 'App\\Controller\\TechnicienController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'technicien_edit', '_controller' => 'App\\Controller\\TechnicienController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [
            [['_route' => 'technicien_delete', '_controller' => 'App\\Controller\\TechnicienController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
