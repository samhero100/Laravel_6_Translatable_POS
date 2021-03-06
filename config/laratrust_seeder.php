<?php

return [
    'role_structure' => [
        'super_admin' => [
            'categories' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'clients' => 'c,r,u,d',
            'orders' => 'c,r,u,d',
            'users' => 'c,r,u,d',
            'regions' => 'c,r,u,d',
            'governs' => 'c,r,u,d',
            'zones' => 'c,r,u,d',
            'areas' => 'c,r,u,d',

        ],
        'admin' => [
            'categories' => 'c,r',
            'products' => 'c,r',
            'clients' => 'c,r,u,d',
            'orders' => 'c,r,u,d',
            'users' => 'r',
            'regions' => 'c,r,u,d',
            'governs' => 'c,r,u,d',
            'zones' => 'c,r,u,d',
            'areas' => 'c,r,u,d',


        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
