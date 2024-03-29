<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/external_links/blueprints.yaml',
    'modified' => 1438304815,
    'data' => [
        'name' => 'External Links',
        'version' => '1.2.2',
        'description' => 'This plugin adds small icons to external and mailto links, informing users the link will take them to a new site or open their email client.',
        'icon' => 'external-link',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-external-links',
        'keywords' => [
            0 => 'external',
            1 => 'links',
            2 => 'filter',
            3 => 'formatter',
            4 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-external-links/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-external-links/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
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
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'weight' => [
                    'type' => 'text',
                    'label' => 'Set the weight (order of execution)',
                    'default' => 0,
                    'validate' => [
                        'type' => 'int',
                        'min' => -100,
                        'max' => 100
                    ]
                ],
                'exclude.classes' => [
                    'type' => 'text',
                    'label' => 'Exclude all links with this class',
                    'help' => 'Comma separated list.',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'exclude.domains' => [
                    'type' => 'text',
                    'label' => 'A list of domains to be excluded (any regular expression can be used)',
                    'help' => 'Comma separated list of domains e.g. _localhost/*_.',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'process' => [
                    'type' => 'toggle',
                    'label' => 'Filter external links',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'no_follow' => [
                    'type' => 'toggle',
                    'label' => 'Add `rel="nofollow"` to all external links',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'target' => [
                    'type' => 'text',
                    'label' => 'Set target attribute of the link.',
                    'default' => '_blank',
                    'placeholder' => '_blank'
                ]
            ]
        ]
    ]
];
