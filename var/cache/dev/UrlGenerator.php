<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'alimentation_index' => [[], ['_controller' => 'App\\Controller\\AlimentationController::index'], [], [['text', '/alimentation/']], [], []],
    'alimentation_new' => [[], ['_controller' => 'App\\Controller\\AlimentationController::new'], [], [['text', '/alimentation/new']], [], []],
    'alimentation_show' => [['id'], ['_controller' => 'App\\Controller\\AlimentationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/alimentation']], [], []],
    'alimentation_edit' => [['id'], ['_controller' => 'App\\Controller\\AlimentationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/alimentation']], [], []],
    'alimentation_delete' => [['id'], ['_controller' => 'App\\Controller\\AlimentationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/alimentation']], [], []],
    'client_final_index' => [[], ['_controller' => 'App\\Controller\\ClientFinalController::index'], [], [['text', '/client/final/']], [], []],
    'client_final_new' => [[], ['_controller' => 'App\\Controller\\ClientFinalController::new'], [], [['text', '/client/final/new']], [], []],
    'client_final_show' => [['id'], ['_controller' => 'App\\Controller\\ClientFinalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/final']], [], []],
    'client_final_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientFinalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/client/final']], [], []],
    'client_final_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientFinalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/final']], [], []],
    'client_intervention_index' => [[], ['_controller' => 'App\\Controller\\ClientInterventionController::index'], [], [['text', '/client/intervention/']], [], []],
    'client_intervention_new' => [[], ['_controller' => 'App\\Controller\\ClientInterventionController::new'], [], [['text', '/client/intervention/new']], [], []],
    'client_intervention_show' => [['id'], ['_controller' => 'App\\Controller\\ClientInterventionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/intervention']], [], []],
    'client_intervention_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientInterventionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/client/intervention']], [], []],
    'client_intervention_delete' => [['id'], ['_controller' => 'App\\Controller\\ClientInterventionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client/intervention']], [], []],
    'formation_index' => [[], ['_controller' => 'App\\Controller\\FormationController::index'], [], [['text', '/formation/']], [], []],
    'formation_new' => [[], ['_controller' => 'App\\Controller\\FormationController::new'], [], [['text', '/formation/new']], [], []],
    'formation_show' => [['id'], ['_controller' => 'App\\Controller\\FormationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], []],
    'formation_edit' => [['id'], ['_controller' => 'App\\Controller\\FormationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], []],
    'formation_delete' => [['id'], ['_controller' => 'App\\Controller\\FormationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/formation']], [], []],
    'intervention_index' => [[], ['_controller' => 'App\\Controller\\InterventionController::index'], [], [['text', '/intervention/']], [], []],
    'intervention_new' => [[], ['_controller' => 'App\\Controller\\InterventionController::new'], [], [['text', '/intervention/new']], [], []],
    'intervention_show' => [['id'], ['_controller' => 'App\\Controller\\InterventionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/intervention']], [], []],
    'intervention_edit' => [['id'], ['_controller' => 'App\\Controller\\InterventionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/intervention']], [], []],
    'intervention_delete' => [['id'], ['_controller' => 'App\\Controller\\InterventionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/intervention']], [], []],
    'materiel_b_i_index' => [[], ['_controller' => 'App\\Controller\\MaterielBIController::index'], [], [['text', '/materiel/b/i/']], [], []],
    'materiel_b_i_new' => [[], ['_controller' => 'App\\Controller\\MaterielBIController::new'], [], [['text', '/materiel/b/i/new']], [], []],
    'materiel_b_i_show' => [['id'], ['_controller' => 'App\\Controller\\MaterielBIController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiel/b/i']], [], []],
    'materiel_b_i_edit' => [['id'], ['_controller' => 'App\\Controller\\MaterielBIController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materiel/b/i']], [], []],
    'materiel_b_i_delete' => [['id'], ['_controller' => 'App\\Controller\\MaterielBIController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiel/b/i']], [], []],
    'materiel_v_e_index' => [[], ['_controller' => 'App\\Controller\\MaterielVEController::index'], [], [['text', '/materiel/v/e/']], [], []],
    'materiel_v_e_new' => [[], ['_controller' => 'App\\Controller\\MaterielVEController::new'], [], [['text', '/materiel/v/e/new']], [], []],
    'materiel_v_e_show' => [['id'], ['_controller' => 'App\\Controller\\MaterielVEController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiel/v/e']], [], []],
    'materiel_v_e_edit' => [['id'], ['_controller' => 'App\\Controller\\MaterielVEController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/materiel/v/e']], [], []],
    'materiel_v_e_delete' => [['id'], ['_controller' => 'App\\Controller\\MaterielVEController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/materiel/v/e']], [], []],
    'piece_b_i_index' => [[], ['_controller' => 'App\\Controller\\PieceBIController::index'], [], [['text', '/piece/b/i/']], [], []],
    'piece_b_i_new' => [[], ['_controller' => 'App\\Controller\\PieceBIController::new'], [], [['text', '/piece/b/i/new']], [], []],
    'piece_b_i_show' => [['id'], ['_controller' => 'App\\Controller\\PieceBIController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/piece/b/i']], [], []],
    'piece_b_i_edit' => [['id'], ['_controller' => 'App\\Controller\\PieceBIController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/piece/b/i']], [], []],
    'piece_b_i_delete' => [['id'], ['_controller' => 'App\\Controller\\PieceBIController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/piece/b/i']], [], []],
    'piece_v_e_index' => [[], ['_controller' => 'App\\Controller\\PieceVEController::index'], [], [['text', '/piece/v/e/']], [], []],
    'piece_v_e_new' => [[], ['_controller' => 'App\\Controller\\PieceVEController::new'], [], [['text', '/piece/v/e/new']], [], []],
    'piece_v_e_show' => [['id'], ['_controller' => 'App\\Controller\\PieceVEController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/piece/v/e']], [], []],
    'piece_v_e_edit' => [['id'], ['_controller' => 'App\\Controller\\PieceVEController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/piece/v/e']], [], []],
    'piece_v_e_delete' => [['id'], ['_controller' => 'App\\Controller\\PieceVEController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/piece/v/e']], [], []],
    'proces_verbal_index' => [[], ['_controller' => 'App\\Controller\\ProcesVerbalController::index'], [], [['text', '/proces/verbal/']], [], []],
    'proces_verbal_new' => [[], ['_controller' => 'App\\Controller\\ProcesVerbalController::new'], [], [['text', '/proces/verbal/new']], [], []],
    'proces_verbal_show' => [['id'], ['_controller' => 'App\\Controller\\ProcesVerbalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/proces/verbal']], [], []],
    'proces_verbal_edit' => [['id'], ['_controller' => 'App\\Controller\\ProcesVerbalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/proces/verbal']], [], []],
    'proces_verbal_delete' => [['id'], ['_controller' => 'App\\Controller\\ProcesVerbalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/proces/verbal']], [], []],
    'technicien_index' => [[], ['_controller' => 'App\\Controller\\TechnicienController::index'], [], [['text', '/technicien/']], [], []],
    'technicien_new' => [[], ['_controller' => 'App\\Controller\\TechnicienController::new'], [], [['text', '/technicien/new']], [], []],
    'technicien_show' => [['id'], ['_controller' => 'App\\Controller\\TechnicienController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/technicien']], [], []],
    'technicien_edit' => [['id'], ['_controller' => 'App\\Controller\\TechnicienController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/technicien']], [], []],
    'technicien_delete' => [['id'], ['_controller' => 'App\\Controller\\TechnicienController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/technicien']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '.+', 'shortName', true], ['text', '/api/contexts']], [], []],
    'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], [], [['text', '/admin/']], [], []],
];
