<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/plugins/language-selector/blueprints.yaml',
    'modified' => 1542939398,
    'size' => 2407,
    'data' => [
        'name' => 'Language Selector',
        'version' => '1.1.0',
        'description' => 'Language Selector is a [Grav](http://github.com/getgrav/grav) plugin that provides native language selector with flags to switch between [multiple languages](http://learn.getgrav.org/content/multi-language).',
        'icon' => 'globe',
        'author' => [
            'name' => 'Clément G.',
            'email' => 'contact@clemdesign.fr',
            'url' => 'http://www.clemdesign.fr'
        ],
        'homepage' => 'https://github.com/clemdesign/grav-plugin-language-selector',
        'keywords' => 'mulitlang, multilanguage, translation, switcher, selector, flag',
        'bugs' => 'https://github.com/clemdesign/grav-plugin-language-selector/issues',
        'docs' => 'https://github.com/clemdesign/grav-plugin-language-selector/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGINS.LANGUAGE_SELECTOR.PLUGIN_STATUS',
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
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'PLUGINS.LANGUAGE_SELECTOR.BUILT_IN_CSS',
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
                'untranslated_pages_behavior' => [
                    'type' => 'select',
                    'label' => 'PLUGINS.LANGUAGE_SELECTOR.UNTRANSLATED_PAGES.LABEL',
                    'help' => 'PLUGINS.LANGUAGE_SELECTOR.UNTRANSLATED_PAGES.HELP',
                    'default' => 'none',
                    'options' => [
                        'none' => 'PLUGINS.LANGUAGE_SELECTOR.UNTRANSLATED_PAGES.OPT_NONE',
                        'redirect' => 'PLUGINS.LANGUAGE_SELECTOR.UNTRANSLATED_PAGES.OPT_REDIR',
                        'hide' => 'PLUGINS.LANGUAGE_SELECTOR.UNTRANSLATED_PAGES.OPT_HIDE'
                    ]
                ],
                'button_display' => [
                    'type' => 'select',
                    'label' => 'PLUGINS.LANGUAGE_SELECTOR.BUTTON_DISPLAY.LABEL',
                    'help' => 'PLUGINS.LANGUAGE_SELECTOR.BUTTON_DISPLAY.HELP',
                    'default' => 'default',
                    'options' => [
                        'default' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.OPT_DEFAULT',
                        'flag' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.OPT_FLAG',
                        'name' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.OPT_NAME'
                    ]
                ],
                'select_display' => [
                    'type' => 'select',
                    'label' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.LABEL',
                    'help' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.HELP',
                    'default' => 'default',
                    'options' => [
                        'default' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.OPT_DEFAULT',
                        'flag' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.OPT_FLAG',
                        'name' => 'PLUGINS.LANGUAGE_SELECTOR.SELECT_DISPLAY.OPT_NAME'
                    ]
                ]
            ]
        ]
    ]
];
