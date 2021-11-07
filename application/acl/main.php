<?php

return [
    'all' => [
        'login', 'register',
    ],
    'authorize' => [
        'index', 'contact', 'show'
    ], 
    'guest' => [
        'login', 'register',
    ],
    'admin' => [
        'hide', 'login', 'index', 'contact', 'register', 'show'
    ],
];