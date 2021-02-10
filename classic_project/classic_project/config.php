<?php

return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'dbname' => 'classic_project',
        'username' => 'main',
        'password' => 'passwordsql',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'share' => [
        'text' => 'Check out this Meetup with SoCal AngularJS!'
    ]

];
