<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/private/private.yaml',
    'modified' => 1438305237,
    'data' => [
        'enabled' => true,
        'routes' => [
            'login' => '/login',
            'logout' => '/logout'
        ],
        'session_ss' => 'random_value',
        'private_site' => true,
        'private_tag' => 'hidden',
        'enable_username' => false,
        'users' => [
            'no_user' => '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8'
        ],
        'texts' => [
            'h1' => 'Private Area',
            'h2' => 'Please <strong>login</strong> to view this content...'
        ],
        'fields' => [
            'username' => [
                'label' => 'Username',
                'placeholder' => 'Enter your username'
            ],
            'password' => [
                'label' => 'Password',
                'placeholder' => 'Enter your password'
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => 'Please leave this field empty for Antispam'
            ],
            'login' => [
                'label' => 'Login'
            ]
        ],
        'messages' => [
            'success' => 'You are logged.',
            'error' => 'Oops! There was a problem with your submission. Please try again or <a href=\'https://github.com/Diyzzuf/grav-plugin-private/issues\' target=\'_blank\'>report an issue </a>',
            'fail' => 'Oops! Something went wrong.. Try Again !'
        ]
    ]
];
