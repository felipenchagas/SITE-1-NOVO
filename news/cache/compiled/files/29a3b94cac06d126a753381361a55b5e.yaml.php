<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/blueprints.yaml',
    'modified' => 1740590017,
    'size' => 1456,
    'data' => [
        'name' => 'Deliver',
        'slug' => 'deliver',
        'type' => 'theme',
        'version' => '2.0.0',
        'description' => 'Deliver theme is a port of the Michael Reimer\'s Deliver Free PSD theme.',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'collaborators' => [
            0 => [
                'name' => 'Pedro Moreno',
                'email' => 'pmoreno@pmdesign.dev',
                'url' => 'https://pmoreno@pmdesign.dev'
            ]
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-deliver',
        'demo' => 'http://demo.getgrav.org/deliver-skeleton/',
        'keywords' => 'deliver, theme, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-deliver/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.8'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'theme_settings' => [
                            'type' => 'tab',
                            'title' => 'DELIVER.ADMIN.THEME.SETTINGS.TAB',
                            'import@' => [
                                'type' => 'theme/settings.yaml',
                                'context' => 'blueprints://'
                            ]
                        ],
                        'header' => [
                            'type' => 'tab',
                            'title' => 'DELIVER.ADMIN.THEME.HEADER.TAB',
                            'import@' => [
                                'type' => 'theme/header.yaml',
                                'context' => 'blueprints://'
                            ]
                        ],
                        'footer' => [
                            'type' => 'tab',
                            'title' => 'DELIVER.ADMIN.THEME.FOOTER.TAB',
                            'import@' => [
                                'type' => 'theme/footer.yaml',
                                'context' => 'blueprints://'
                            ]
                        ],
                        'social_media' => [
                            'type' => 'tab',
                            'title' => 'DELIVER.ADMIN.THEME.MEDIA.TAB',
                            'import@' => [
                                'type' => 'theme/media.yaml',
                                'context' => 'blueprints://'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
