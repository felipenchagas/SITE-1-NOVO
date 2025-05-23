<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/plugins/themer/blueprints.yaml',
    'modified' => 1468982548,
    'size' => 1003,
    'data' => [
        'name' => 'Themer',
        'version' => '1.1.0',
        'description' => 'This plugin enables you to use different themes on one site individual set per page or collection.',
        'icon' => 'magic',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-themer',
        'keywords' => [
            0 => 'themer',
            1 => 'theme',
            2 => 'plugin'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-themer/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-themer/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGINS.THEMER.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'templates' => [
                    'type' => 'themeselect',
                    'label' => 'PLUGINS.THEMER.TEMPLATES',
                    'help' => 'PLUGINS.THEMER.TEMPLATES_HELP',
                    'placeholder' => 'PLUGINS.THEMER.TEMPLATES_PLACEHOLDER',
                    'selectize' => true,
                    'multiple' => true,
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ]
            ]
        ]
    ]
];
