<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/plugins/seo/blueprints.yaml',
    'modified' => 1536894020,
    'size' => 4214,
    'data' => [
        'name' => 'SEO',
        'version' => '2.3.5',
        'description' => 'Manage your site’s meta tags for display in search engine results or social media networks. Includes an easy-to-use live preview feature.',
        'icon' => 'google',
        'testing' => false,
        'author' => [
            'name' => 'Paul Massendari',
            'email' => 'paul@massendari.com'
        ],
        'homepage' => 'https://github.com/paulmassen/grav-plugin-seo',
        'keywords' => [
            0 => 'seo',
            1 => 'meta',
            2 => 'microdata',
            3 => 'schema',
            4 => 'plugin'
        ],
        'bugs' => 'https://github.com/paulmassen/grav-plugin-seo/issues',
        'license' => 'MIT/GPL',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.3.8'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.6.6'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'plugin_section' => [
                    'type' => 'section',
                    'title' => 'General Settings',
                    'underline' => true
                ],
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
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
                'facebookid' => [
                    'type' => 'text',
                    'label' => 'Facebook App ID'
                ],
                'twitterid' => [
                    'type' => 'text',
                    'label' => 'Twitter ID',
                    'placeholder' => '@yourusername'
                ],
                'twitter_default' => [
                    'type' => 'toggle',
                    'label' => 'On page creation, enable twitter metadata?',
                    'default' => 1,
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ]
                ],
                'facebook_default' => [
                    'type' => 'toggle',
                    'label' => 'On page creation, enable facebook metadata?',
                    'default' => 1,
                    'highlight' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ]
                ],
                'microdata_section' => [
                    'type' => 'section',
                    'title' => 'Microdata Settings',
                    'underline' => true
                ],
                'md_columns' => [
                    'type' => 'columns',
                    'fields' => [
                        'mdcolumn1' => [
                            'type' => 'column',
                            'fields' => [
                                'article' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Article Microdata',
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
                                'event' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Event Microdata',
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
                                'restaurant' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Restaurant Microdata',
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
                                'musicevent' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Music Event Microdata',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'mdcolumn2' => [
                            'type' => 'column',
                            'fields' => [
                                'person' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Person Microdata',
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
                                'organization' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Organization Microdata',
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
                                'musicalbum' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Music Album Microdata',
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
                                'product' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Product Microdata',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
