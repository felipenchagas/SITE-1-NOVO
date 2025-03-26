<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/user/themes/appi/blueprints.yaml',
    'modified' => 1740152040,
    'size' => 935,
    'data' => [
        'name' => 'Appi',
        'description' => 'Grav theme based on Appi HTML theme of blacktie.co.',
        'version' => '2.0.1',
        'icon' => 'mobile',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'flatfiledeveloper@gmail.com',
            'url' => 'https://flatfiledeveloper.com'
        ],
        'homepage' => 'https://github.com/tranduyhung/grav-theme-appi',
        'demo' => 'https://grav-theme-appi.flatfiledeveloper.com/',
        'keywords' => 'theme, template, blacktie, responsive, html5, mobile, phone, tablet, app, application, store, bootstrap',
        'bugs' => 'https://github.com/tranduyhung/grav-theme-appi/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'copyright' => [
                    'type' => 'textarea',
                    'label' => 'Copyright Text',
                    'help' => 'Copyright text shown in About page\'s footer',
                    'placeholder' => 'Copyright text shown in About page\'s footer'
                ],
                'favicon' => [
                    'type' => 'text',
                    'label' => 'favicon',
                    'help' => 'File name of an image in the theme\'s "img" folder to use as favicon',
                    'placeholder' => 'File name of an image in theme\'s "img" folder'
                ]
            ]
        ]
    ]
];
