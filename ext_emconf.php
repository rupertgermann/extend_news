<?php

$EM_CONF['extend_news'] = [
    'title' => 'extend_news',
    'description' => 'extend_news',
    'category' => 'plugin',
    'version' => '1.0.0',
    'state' => 'beta',
    'clearcacheonload' => 0,
    'author' => 'Rupert Germann [pick2webServices]',
    'author_email' => 'rg@pick2.de',
    'author_company' => 'www.pick2.de',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'tt_news' => '*',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
