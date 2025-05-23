<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/blueprints/theme/header.yaml',
    'modified' => 1740590017,
    'size' => 2016,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'custommenus_section' => [
                    'type' => 'section',
                    'outerclasses' => 'admin_section',
                    'heading_classes' => 'admin_options',
                    'title' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.SECTION_TITLE',
                    'fields' => [
                        'custommenus.enabled' => [
                            'type' => 'toggle',
                            'label' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ENABLE',
                            'help' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ENABLE_HELP',
                            'labelclasses' => 'bold',
                            'default' => 1,
                            'highlight' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'custommenu' => [
                            'name' => 'menu',
                            'type' => 'list',
                            'label' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.LABEL',
                            'labelclasses' => 'bold',
                            'collapsed' => true,
                            'collapsible' => true,
                            'fields' => [
                                '.text' => [
                                    'type' => 'text',
                                    'label' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TEXT',
                                    'description' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TEXT_DESCRIPTION',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.icon' => [
                                    'type' => 'text',
                                    'label' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.ICON',
                                    'description' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.ICON_DESCRIPTION',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.url' => [
                                    'type' => 'text',
                                    'label' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.URL',
                                    'description' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.URL_DESCRIPTION',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.target' => [
                                    'type' => 'select',
                                    'label' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TARGET.LABEL',
                                    'labelclasses' => 'bold-light',
                                    'default' => '_self',
                                    'size' => 'medium',
                                    'options' => [
                                        '_self' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TARGET.SELF',
                                        '_blank' => 'DELIVER.ADMIN.THEME.HEADER.CUSTOM_MENU.ITEMS.TARGET.BLANK'
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
