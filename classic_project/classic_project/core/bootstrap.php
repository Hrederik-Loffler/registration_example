<?php

use Core\Database\Connection;

Core\App::bind('config', require '../config.php');

Core\App::bind('database', new Core\Database\QueryBuilder(
    Core\Database\Connection::make(Core\App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);

    return require "../views/{$name}.view.php";
}

function extractFields(array $target, array $fields): array
{
    $res = [];

    foreach ($fields as $field) {
        $res[$field] = trim(htmlspecialchars($target[$field]));
    }

    return $res;
}
