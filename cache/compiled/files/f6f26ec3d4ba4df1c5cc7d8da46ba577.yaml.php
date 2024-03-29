<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/anchors/blueprints.yaml',
    'modified' => 1438304259,
    'data' => [
        'name' => 'Anchors',
        'version' => '1.3.0',
        'description' => 'This plugin provides automatic header anchors via the [anchorjs](http://bryanbraun.github.io/anchorjs) jQuery plugin.',
        'icon' => 'anchor',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-anchors',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'anchor, header, plugin, code',
        'bugs' => 'https://github.com/getgrav/grav-plugin-anchors/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'selectors' => [
                    'type' => 'text',
                    'label' => 'Selectors',
                    'size' => 'large',
                    'placeholder' => 'Anchor Selectors',
                    'help' => 'Comma separated list of header selectors to activate on'
                ]
            ]
        ]
    ]
];
