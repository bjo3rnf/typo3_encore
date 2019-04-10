<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 with Webpack Encore',
    'description' => 'Webpack Encore from symfony for TYPO3',
    'category' => 'fe',
    'author' => 'Sebastian Schreiber',
    'author_email' => 'breakpoint@schreibersebastian.de',
    'state' => 'stable',
    'clearCacheOnLoad' => false,
    'version' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.13-9.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
