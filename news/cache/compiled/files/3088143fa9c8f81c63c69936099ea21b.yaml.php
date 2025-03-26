<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/blueprints/theme/settings.yaml',
    'modified' => 1740590017,
    'size' => 6045,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'theme_section_settings' => [
                    'type' => 'columns',
                    'fields' => [
                        'settings' => [
                            'type' => 'column',
                            'classes' => 'colum-admin',
                            'fields' => [
                                'configOptions' => [
                                    'type' => 'section',
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'title' => 'DELIVER.ADMIN.THEME.SETTINGS.THEME_CONFIG',
                                    'underline' => false,
                                    'fields' => [
                                        'dropdown.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.DROPDOWN_MENU',
                                            'labelclasses' => 'bold',
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
                                        'production-mode' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.PRODUCTION_MODE',
                                            'help' => 'DELIVER.ADMIN.THEME.SETTINGS.PRODUCTION_MODE_HELP',
                                            'labelclasses' => 'bold',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'sticky_menu.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.STICKY_MENU',
                                            'labelclasses' => 'bold',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'back_to_top_button.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.BACK_TO_TOP_BUTTON',
                                            'help' => 'DELIVER.ADMIN.THEME.SETTINGS.BACK_TO_TOP_BUTTON_HELP',
                                            'labelclasses' => 'bold',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'custom_css' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.CUSTOM_CSS',
                                            'help' => 'DELIVER.ADMIN.THEME.SETTINGS.CUSTOM_CSS_HELP',
                                            'labelclasses' => 'bold',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ]
                                        ],
                                        'custom_js' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.CUSTOM_JS',
                                            'help' => 'DELIVER.ADMIN.THEME.SETTINGS.CUSTOM_JS_HELP',
                                            'labelclasses' => 'bold',
                                            'highlight' => 0,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'logo' => [
                            'type' => 'column',
                            'classes' => 'colum-admin',
                            'fields' => [
                                'logo_options' => [
                                    'type' => 'section',
                                    'title' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.TITLE',
                                    'underline' => false,
                                    'outerclasses' => 'admin_section',
                                    'heading_classes' => 'admin_options',
                                    'fields' => [
                                        'theme_logo_enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.ENABLED',
                                            'labelclasses' => 'bold',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'theme_logo' => [
                                            'type' => 'file',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.DESKTOP',
                                            'description' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.DESCRIPTION',
                                            'labelclasses' => 'bold',
                                            'multiple' => false,
                                            'destination' => 'theme@:/images/logo',
                                            'avoid_overwriting' => false,
                                            'random_name' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'theme_logo_mobile' => [
                                            'type' => 'file',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.MOBILE',
                                            'labelclasses' => 'bold',
                                            'size' => 'large',
                                            'destination' => 'theme://images/logo',
                                            'multiple' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        'type_logo_header' => [
                                            'type' => 'radio',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER',
                                            'help' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_HELP',
                                            'labelclasses' => 'bold',
                                            'default' => 'text',
                                            'options' => [
                                                'image' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_IMAGE',
                                                'text' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_TEXT',
                                                'both' => 'DELIVER.ADMIN.THEME.SETTINGS.LOGO.TYPE_LOGO_HEADER_BOTH'
                                            ]
                                        ],
                                        'favicon' => [
                                            'type' => 'file',
                                            'label' => 'DELIVER.ADMIN.THEME.SETTINGS.FAVICON',
                                            'description' => 'DELIVER.ADMIN.THEME.SETTINGS.FAVICON_DESCRIPTION',
                                            'labelclasses' => 'bold',
                                            'destination' => 'theme@:/images',
                                            'multiple' => false,
                                            'avoid_overwriting' => false,
                                            'random_name' => false,
                                            'toggleable' => true,
                                            'filesize' => 3,
                                            'accept' => [
                                                0 => 'image/png',
                                                1 => '.ico'
                                            ]
                                        ]
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
