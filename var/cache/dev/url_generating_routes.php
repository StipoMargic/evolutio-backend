<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_todo_create' => [[], ['_controller' => 'App\\Controller\\TodoController::create'], [], [['text', '/api/todos']], [], [], []],
    'app_todo_index' => [[], ['_controller' => 'App\\Controller\\TodoController::index'], [], [['text', '/api/todos']], [], [], []],
    'app_todo_show' => [['id'], ['_controller' => 'App\\Controller\\TodoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/todos']], [], [], []],
    'app_todo_update' => [['id'], ['_controller' => 'App\\Controller\\TodoController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/todos']], [], [], []],
];
