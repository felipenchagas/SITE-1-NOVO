<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/deliver/blueprints/pages/default.yaml',
    'modified' => 1740590017,
    'size' => 4887,
    'data' => [
        'title' => 'Default Page',
        'extends@' => 'default',
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.title' => [
                                    'replace@' => true
                                ],
                                'content' => [
                                    'replace@' => true
                                ],
                                'header.media_order' => [
                                    'replace@' => true
                                ],
                                '_Heading_Section' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'DELIVER.ADMIN.DEFAULT.TITLE_SECTION'
                                ],
                                '_Heading' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        '_Title' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.title' => [
                                                    'type' => 'text',
                                                    'autofocus' => true,
                                                    'style' => 'vertical',
                                                    'label' => 'PLUGIN_ADMIN.TITLE'
                                                ],
                                                'header.title_text_color' => [
                                                    'type' => 'colorpicker',
                                                    'label' => 'DELIVER.ADMIN.COMMON.TEXT_COLOR',
                                                    'help' => 'DELIVER.ADMIN.COMMON.TEXT_COLOR_HELP',
                                                    'placeholder' => '#ffffff'
                                                ],
                                                'header.title_bg_color' => [
                                                    'type' => 'colorpicker',
                                                    'label' => 'DELIVER.ADMIN.COMMON.TITLE_BG_COLOR',
                                                    'placeholder' => '#b4b093'
                                                ]
                                            ]
                                        ],
                                        '_TitleToggle' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.show_title' => [
                                                    'type' => 'toggle',
                                                    'style' => 'vertical',
                                                    'label' => 'DELIVER.ADMIN.DEFAULT.SHOW_TITLE',
                                                    'help' => 'DELIVER.ADMIN.DEFAULT.SHOW_TITLE_HELP',
                                                    'default' => 1,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
                                                    ]
                                                ],
                                                'header.title_bg_choice' => [
                                                    'type' => 'radio',
                                                    'label' => 'DELIVER.ADMIN.DEFAULT.TITLE_BG_CHOICE.LABEL',
                                                    'help' => 'DELIVER.ADMIN.DEFAULT.TITLE_BG_CHOICE.HELP',
                                                    'style' => 'vertical',
                                                    'default' => 'color',
                                                    'options' => [
                                                        'color' => 'DELIVER.ADMIN.DEFAULT.TITLE_BG_CHOICE.COLOR',
                                                        'image' => 'DELIVER.ADMIN.DEFAULT.TITLE_BG_CHOICE.IMAGE'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                '_Content_Section' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'DELIVER.ADMIN.DEFAULT.CONTENT_SECTION'
                                ],
                                '_ContentOptions' => [
                                    'type' => 'column',
                                    'fields' => [
                                        'content' => [
                                            'type' => 'markdown',
                                            'validate' => [
                                                'type' => 'textarea'
                                            ]
                                        ]
                                    ]
                                ],
                                '_Media_Section' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'title' => 'DELIVER.ADMIN.DEFAULT.IMAGE_OPTIONS'
                                ],
                                '_MediaOptions' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        '_MediaContent' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.media_order' => [
                                                    'type' => 'pagemedia',
                                                    'label' => 'PLUGIN_ADMIN.PAGE_MEDIA'
                                                ]
                                            ]
                                        ],
                                        '_ImageOptions' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.show_featured_image' => [
                                                    'type' => 'toggle',
                                                    'label' => 'DELIVER.ADMIN.DEFAULT.SHOW_FEATURED_IMAGE',
                                                    'help' => 'DELIVER.ADMIN.DEFAULT.SHOW_FEATURED_IMAGE_HELP',
                                                    'default' => 0,
                                                    'highlight' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'header.featured_image' => [
                                                    'ordering@' => 'header.subtitle',
                                                    'size' => 'large',
                                                    'type' => 'pagemediaselect',
                                                    'label' => 'DELIVER.ADMIN.DEFAULT.FEATURED_IMAGE.LABEL',
                                                    'help' => 'DELIVER.ADMIN.DEFAULT.FEATURED_IMAGE.HELP',
                                                    'preview_images' => true
                                                ],
                                                'header.big_header' => [
                                                    'type' => 'toggle',
                                                    'label' => 'DELIVER.ADMIN.DEFAULT.BIG_HEADER',
                                                    'help' => 'DELIVER.ADMIN.DEFAULT.BIG_HEADER_HELP',
                                                    'default' => 0,
                                                    'highlight' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.YES',
                                                        0 => 'PLUGIN_ADMIN.NO'
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
                        ],
                        'advanced' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'column1' => [
                                            'fields' => [
                                                'header.body_classes' => [
                                                    'markdown' => true,
                                                    'placeholder' => 'header-lite fullwidth'
                                                ],
                                                '_body_classes_help' => [
                                                    'type' => 'display',
                                                    'size' => 'large',
                                                    'markdown' => true,
                                                    'content' => 'DELIVER.ADMIN.DEFAULT.BODY_CLASSSES_CONTENT'
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
    ]
];
