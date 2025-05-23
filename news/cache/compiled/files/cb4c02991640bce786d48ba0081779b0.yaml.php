<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/u576495821/domains/advstephani.com.br/public_html/news/system/languages/en.yaml',
    'modified' => 1740589847,
    'size' => 3697,
    'data' => [
        'GRAV' => [
            'FRONTMATTER_ERROR_PAGE' => '---
title: %1$s
---

# Erro: Frontmatter Inválido

Caminho: `%2$s`

**%3$s**

```
%4$s
```',
            'INFLECTOR_PLURALS' => [
                '/(quiz)$/i' => '\\1zes',
                '/^(ox)$/i' => '\\1en',
                '/([m|l])ouse$/i' => '\\1ice',
                '/(matr|vert|ind)ix|ex$/i' => '\\1ices',
                '/(x|ch|ss|sh)$/i' => '\\1es',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([^aeiouy]|qu)y$/i' => '\\1ies',
                '/(hive)$/i' => '\\1s',
                '/(?:([^f])fe|([lr])f)$/i' => '\\1\\2ves',
                '/sis$/i' => 'ses',
                '/([ti])um$/i' => '\\1a',
                '/(buffal|tomat)o$/i' => '\\1oes',
                '/(bu)s$/i' => '\\1ses',
                '/(alias|status)/i' => '\\1es',
                '/(octop|vir)us$/i' => '\\1i',
                '/(ax|test)is$/i' => '\\1es',
                '/s$/i' => 's',
                '/$/' => 's'
            ],
            'INFLECTOR_SINGULAR' => [
                '/(quiz)zes$/i' => '\\1',
                '/(matr)ices$/i' => '\\1ix',
                '/(vert|ind)ices$/i' => '\\1ex',
                '/^(ox)en/i' => '\\1',
                '/(alias|status)es$/i' => '\\1',
                '/([octop|vir])i$/i' => '\\1us',
                '/(cris|ax|test)es$/i' => '\\1is',
                '/(shoe)s$/i' => '\\1',
                '/(o)es$/i' => '\\1',
                '/(bus)es$/i' => '\\1',
                '/([m|l])ice$/i' => '\\1ouse',
                '/(x|ch|ss|sh)es$/i' => '\\1',
                '/(m)ovies$/i' => '\\1ovie',
                '/(s)eries$/i' => '\\1eries',
                '/([^aeiouy]|qu)ies$/i' => '\\1y',
                '/([lr])ves$/i' => '\\1f',
                '/(tive)s$/i' => '\\1',
                '/(hive)s$/i' => '\\1',
                '/([^f])ves$/i' => '\\1fe',
                '/(^analy)ses$/i' => '\\1sis',
                '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\\1\\2sis',
                '/([ti])a$/i' => '\\1um',
                '/(n)ews$/i' => '\\1ews',
                '/s$/i' => ''
            ],
            'INFLECTOR_UNCOUNTABLE' => [
                0 => 'equipment',
                1 => 'information',
                2 => 'rice',
                3 => 'money',
                4 => 'species',
                5 => 'series',
                6 => 'fish',
                7 => 'sheep'
            ],
            'INFLECTOR_IRREGULAR' => [
                'person' => 'pessoas',
                'man' => 'homens',
                'child' => 'crianças',
                'sex' => 'sexos',
                'move' => 'movimentos'
            ],
            'INFLECTOR_ORDINALS' => [
                'default' => 'º',
                'first' => 'º',
                'second' => 'º',
                'third' => 'º'
            ],
            'NICETIME' => [
                'NO_DATE_PROVIDED' => 'Nenhuma data fornecida',
                'BAD_DATE' => 'Data inválida',
                'AGO' => 'atrás',
                'FROM_NOW' => 'daqui a',
                'JUST_NOW' => 'agora mesmo',
                'SECOND' => 'segundo',
                'MINUTE' => 'minuto',
                'HOUR' => 'hora',
                'DAY' => 'dia',
                'WEEK' => 'semana',
                'MONTH' => 'mês',
                'YEAR' => 'ano',
                'DECADE' => 'década',
                'SEC' => 'seg',
                'MIN' => 'min',
                'HR' => 'h',
                'WK' => 'sem',
                'MO' => 'mês',
                'YR' => 'ano',
                'DEC' => 'dec',
                'SECOND_PLURAL' => 'segundos',
                'MINUTE_PLURAL' => 'minutos',
                'HOUR_PLURAL' => 'horas',
                'DAY_PLURAL' => 'dias',
                'WEEK_PLURAL' => 'semanas',
                'MONTH_PLURAL' => 'meses',
                'YEAR_PLURAL' => 'anos',
                'DECADE_PLURAL' => 'décadas',
                'SEC_PLURAL' => 'segs',
                'MIN_PLURAL' => 'mins',
                'HR_PLURAL' => 'hrs',
                'WK_PLURAL' => 'sems',
                'MO_PLURAL' => 'meses',
                'YR_PLURAL' => 'anos',
                'DEC_PLURAL' => 'decs'
            ],
            'FORM' => [
                'VALIDATION_FAIL' => '<b>Validação falhou:</b>',
                'INVALID_INPUT' => 'Entrada inválida em',
                'MISSING_REQUIRED_FIELD' => 'Campo obrigatório ausente:',
                'XSS_ISSUES' => 'Possíveis problemas de XSS detectados no campo \'%s\''
            ],
            'MONTHS_OF_THE_YEAR' => [
                0 => 'Janeiro',
                1 => 'Fevereiro',
                2 => 'Março',
                3 => 'Abril',
                4 => 'Maio',
                5 => 'Junho',
                6 => 'Julho',
                7 => 'Agosto',
                8 => 'Setembro',
                9 => 'Outubro',
                10 => 'Novembro',
                11 => 'Dezembro'
            ],
            'DAYS_OF_THE_WEEK' => [
                0 => 'Segunda-feira',
                1 => 'Terça-feira',
                2 => 'Quarta-feira',
                3 => 'Quinta-feira',
                4 => 'Sexta-feira',
                5 => 'Sábado',
                6 => 'Domingo'
            ],
            'YES' => 'Sim',
            'NO' => 'Não',
            'CRON' => [
                'EVERY' => 'a cada',
                'EVERY_HOUR' => 'a cada hora',
                'EVERY_MINUTE' => 'a cada minuto',
                'EVERY_DAY_OF_WEEK' => 'a cada dia da semana',
                'EVERY_DAY_OF_MONTH' => 'a cada dia do mês',
                'EVERY_MONTH' => 'a cada mês',
                'TEXT_PERIOD' => 'A cada <b />',
                'TEXT_MINS' => ' às <b /> minuto(s) após a hora',
                'TEXT_TIME' => ' às <b />:<b />',
                'TEXT_DOW' => ' no <b />',
                'TEXT_MONTH' => ' de <b />',
                'TEXT_DOM' => ' no <b />',
                'ERROR1' => 'A tag %s não é suportada!',
                'ERROR2' => 'Número incorreto de elementos',
                'ERROR3' => 'O jquery_element deve ser definido nas configurações do jqCron',
                'ERROR4' => 'Expressão não reconhecida'
            ]
        ]
    ]
];
