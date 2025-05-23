<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/bones/blueprints.yaml',
    'modified' => 1740157165,
    'size' => 27100,
    'data' => [
        'name' => 'Bones',
        'version' => '0.5.2',
        'description' => 'A **Grav** theme built with **Foundation**.',
        'icon' => 'cubes',
        'author' => [
            'name' => 'smartgravity',
            'email' => 'info@smartgravity.com',
            'url' => 'http://www.smartgravity.com'
        ],
        'homepage' => 'https://github.com/smartgravity/grav-theme-bones',
        'demo' => 'http://demos.smartgravity.com/grav-bones',
        'keywords' => 'bones, theme, foundation, core, simple, responsive, basic',
        'bugs' => 'https://github.com/smartgravity/grav-theme-bones/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'general_info' => [
                            'type' => 'tab',
                            'title' => 'Info',
                            'fields' => [
                                'theme_info_title' => [
                                    'type' => 'section',
                                    'title' => 'Theme Summary',
                                    'underline' => true,
                                    'fields' => [
                                        'columns' => [
                                            'type' => 'columns',
                                            'fields' => [
                                                'column1' => [
                                                    'type' => 'column',
                                                    'fields' => [
                                                        'theme_links' => [
                                                            'type' => 'display',
                                                            'label' => '<p style="padding-left:0;">The <strong>Bones</strong> theme is built on <a href="http://foundation.zurb.com/" target="_blank">Zurb Foundation</a> and meant to be customized. Easily toggle all javascript and stylesheets on and off so you can keep the page weight slim and still have all the resources you need. </p><p style="padding-left:0;"><a href="http://demos.smartgravity.com/grav-bones/" target="_blank">Grav Bones Demo <i class="fa fa-external-link"></i></a></p>'
                                                        ]
                                                    ]
                                                ],
                                                'column2' => [
                                                    'type' => 'column',
                                                    'fields' => [
                                                        'theme_info' => [
                                                            'type' => 'display',
                                                            'label' => '<p style="text-align:center;padding-left:0;"><img src="../../user/themes/bones/bones-macbook-pro.png" alt="Bones Screenshot" style="width:100%;" /></p>'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'foundation_info_title' => [
                                    'type' => 'section',
                                    'title' => 'Zurb Foundation',
                                    'underline' => true,
                                    'fields' => [
                                        'columns' => [
                                            'type' => 'columns',
                                            'fields' => [
                                                'column1' => [
                                                    'type' => 'column',
                                                    'fields' => [
                                                        'foundation_info' => [
                                                            'type' => 'display',
                                                            'label' => '<p style="padding-left:0;"><em>"Foundation is semantic, readable, flexible, and completely customizable. We’re constantly adding new resources and code snippets, including these handy HTML templates to help get you started!"</em></p><p style="padding-left:0;"><a href="http://foundation.zurb.com/" target="_blank">Foundation Homepage <i class="fa fa-external-link"></i></a><br /><a href="http://foundation.zurb.com/sites/docs/" target="_blank">Foundation Docs <i class="fa fa-external-link"></i></a></p>'
                                                        ]
                                                    ]
                                                ],
                                                'column2' => [
                                                    'type' => 'column',
                                                    'fields' => [
                                                        'foundation_image' => [
                                                            'type' => 'display',
                                                            'label' => '<p style="text-align:center;padding-left:0;"><img src="../../user/themes/bones/zurb-foundation-macbook.png" alt="Zurb Foundation" style="width:100%;" /></p>'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'general_options' => [
                            'type' => 'tab',
                            'title' => 'Options',
                            'fields' => [
                                'general_options_title' => [
                                    'type' => 'section',
                                    'title' => 'Features',
                                    'underline' => true
                                ],
                                'site_title.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Site Title in Logo',
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
                                'google_fonts_logo.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Google Fonts for Logo',
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
                                'fontawesome.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'FontAwesome',
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
                                'animate_css.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Animate CSS',
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
                                'wow_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'WOW js',
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
                                'google_prettify.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Google Prettify Code',
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
                                'menu_options_title' => [
                                    'type' => 'section',
                                    'title' => 'Menu Options',
                                    'underline' => true
                                ],
                                'dropdown.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Dropdown in Mainmenu',
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
                                'mobilemenu_breakpoint' => [
                                    'type' => 'select',
                                    'label' => 'Mobile Menu Breakpoint',
                                    'classes' => 'fancy',
                                    'size' => 'small',
                                    'default' => 'medium',
                                    'options' => [
                                        'large' => 'Large',
                                        'medium' => 'Medium',
                                        'all' => 'Mobile for All'
                                    ]
                                ],
                                'mobilemenu_position' => [
                                    'type' => 'select',
                                    'label' => 'Mobile Menu Position',
                                    'classes' => 'fancy',
                                    'size' => 'small',
                                    'default' => 'left',
                                    'options' => [
                                        'left' => 'left',
                                        'right' => 'right'
                                    ]
                                ]
                            ]
                        ],
                        'javascript_options' => [
                            'type' => 'tab',
                            'title' => 'Javascript',
                            'fields' => [
                                'js_files_title' => [
                                    'type' => 'section',
                                    'title' => 'Foundation Javascript',
                                    'underline' => true
                                ],
                                'foundation_abide_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'abide',
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
                                'foundation_accordion_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'accordion',
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
                                'foundation_accordionMenu_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'accordionMenu',
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
                                'foundation_drilldown_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'drilldown',
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
                                'foundation_dropdown_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'dropdown',
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
                                'foundation_dropdownMenu_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'dropdownMenu',
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
                                'foundation_equalizer_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'equalizer',
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
                                'foundation_interchange_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'interchange',
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
                                'foundation_magellan_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'magellan',
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
                                'foundation_offcanvas_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'offcanvas',
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
                                'foundation_orbit_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'orbit',
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
                                'foundation_responsiveMenu_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'responsiveMenu',
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
                                'foundation_responsiveToggle_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'responsiveToggle',
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
                                'foundation_reveal_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'reveal',
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
                                'foundation_slider_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'slider',
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
                                'foundation_sticky_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'sticky',
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
                                'foundation_tabs_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'tabs',
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
                                'foundation_toggler_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'toggler',
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
                                'foundation_tooltip_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'tooltip',
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
                                'js_utilities_title' => [
                                    'type' => 'section',
                                    'title' => 'Foundation Javascript Utilities',
                                    'underline' => true
                                ],
                                'foundation_util_box_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util box',
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
                                'foundation_util_keyboard_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util keyboard',
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
                                'foundation_util_mediaQuery_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util mediaQuery',
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
                                'foundation_util_motion_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util motion',
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
                                'foundation_util_nest_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util nest',
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
                                'foundation_util_timerAndImageLoader_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util timerAndImageLoader',
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
                                'foundation_util_touch_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util touch',
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
                                'foundation_util_triggers_js.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'util triggers',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'css_options' => [
                            'type' => 'tab',
                            'title' => 'CSS',
                            'fields' => [
                                'bones_css_files_title' => [
                                    'type' => 'section',
                                    'title' => 'Bones CSS',
                                    'underline' => true
                                ],
                                'css_bones.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Bones',
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
                                'custom_css_files_title' => [
                                    'type' => 'section',
                                    'title' => 'Custom CSS',
                                    'underline' => true
                                ],
                                'css_custom.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Custom',
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
                                'foundation_css_files_title' => [
                                    'type' => 'section',
                                    'title' => 'Foundation CSS',
                                    'underline' => true
                                ],
                                'css_global_styles.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Global Styles',
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
                                'css_grid.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Grid',
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
                                'css_flex_grid.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Flex Grid',
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
                                'css_typography.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Typography',
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
                                'css_button.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Button',
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
                                'css_forms.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Forms',
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
                                'css_visibility_classes.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Visibility Classes',
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
                                'css_float_classes.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Float Classes',
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
                                'css_accordion.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Accordion',
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
                                'css_accordion_menu.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Accordion Menu',
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
                                'css_badge.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Badge',
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
                                'css_breadcrumbs.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Breadcrumbs',
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
                                'css_button_group.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Button Group',
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
                                'css_callout.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Callout',
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
                                'css_close_button.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Close Button',
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
                                'css_drilldown_menu.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Drilldown Menu',
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
                                'css_dropdown.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Dropdown',
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
                                'css_dropdown_menu.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Dropdown Menu',
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
                                'css_flex_video.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Flex Video',
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
                                'css_label.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Label',
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
                                'css_media_object.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Media Object',
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
                                'css_menu.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Menu',
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
                                'css_off_canvas.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Off Canvas',
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
                                'css_orbit.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Orbit',
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
                                'css_pagination.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Pagination',
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
                                'css_progress_bar.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Progress Bar',
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
                                'css_slider.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Slider',
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
                                'css_sticky.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Sticky',
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
                                'css_reveal.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Reveal',
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
                                'css_switch.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Switch',
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
                                'css_table.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Table',
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
                                'css_tabs.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Tabs',
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
                                'css_thumbnail.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Thumbnail',
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
                                'css_title_bar.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Title Bar',
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
                                'css_tooltip.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Tooltip',
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
                                'css_top_bar.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Top Bar',
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
                                'foundation_css_utilities_title' => [
                                    'type' => 'section',
                                    'title' => 'Foundation CSS Utilities',
                                    'underline' => true
                                ],
                                'css_ui_transitions.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'UI Transitions',
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
                                'css_ui_animations.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'UI Animations',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
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
