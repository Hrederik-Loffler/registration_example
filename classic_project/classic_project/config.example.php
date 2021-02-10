<?php

return [
    'database' => [
        'connection' => 'mysql:host=127.0.0.1',
        'dbname' => 'classic_project',
        'username' => 'root',
        'password' => '!Passwordsql123',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ],
    'share' => [
        'text' => 'Check out this Meetup with SoCal AngularJS!'
    ]

];
