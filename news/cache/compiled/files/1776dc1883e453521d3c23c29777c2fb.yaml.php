<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/blueprints/theme/media.yaml',
    'modified' => 1740590017,
    'size' => 1796,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'social_options' => [
                    'type' => 'section',
                    'title' => 'DELIVER.ADMIN.THEME.MEDIA.SECTION_TITLE',
                    'text' => 'DELIVER.ADMIN.THEME.MEDIA.SECTION_TEXT',
                    'section_text_classes' => 'bold-light',
                    'outerclasses' => 'admin_section',
                    'heading_classes' => 'admin_options',
                    'fields' => [
                        'social_enabled' => [
                            'type' => 'toggle',
                            'label' => 'DELIVER.ADMIN.THEME.MEDIA.ENABLED',
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
                        'social' => [
                            'label' => 'DELIVER.ADMIN.THEME.MEDIA.ICONS.LABEL',
                            'type' => 'list',
                            'style' => 'vertical',
                            'collapsed' => true,
                            'collapsible' => true,
                            'labelclasses' => 'bold',
                            'max' => 6,
                            'fields' => [
                                '.name' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'DELIVER.ADMIN.THEME.MEDIA.ICONS.ITEMS.NAME',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.url' => [
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'DELIVER.ADMIN.THEME.MEDIA.ICONS.ITEMS.URL',
                                    'labelclasses' => 'bold-light'
                                ],
                                '.target' => [
                                    'type' => 'select',
                                    'label' => 'DELIVER.ADMIN.THEME.MEDIA.ICONS.ITEMS.TARGET.LABEL',
                                    'labelclasses' => 'bold-light',
                                    'default' => '_self',
                                    'size' => 'medium',
                                    'options' => [
                                        '_self' => 'DELIVER.ADMIN.THEME.MEDIA.ICONS.ITEMS.TARGET.SELF',
                                        '_blank' => 'DELIVER.ADMIN.THEME.MEDIA.ICONS.ITEMS.TARGET.BLANK'
                                    ]
                                ],
                                '.icon' => [
                                    'type' => 'iconpicker',
                                    'size' => 'medium',
                                    'label' => 'DELIVER.ADMIN.THEME.MEDIA.ICONS.ITEMS.ICON',
                                    'labelclasses' => 'bold-light'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
