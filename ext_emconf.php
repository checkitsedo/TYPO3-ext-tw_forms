<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'tollwerk extended TYPO3 forms',
    'description' => 'TYPO3 extension for enhancing native forms',
    'version' => '10.0.0',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'php' => '7.4.0-7.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => '',
    'author_email' => '',
    'author_company' => '',
    'autoload' => [
        'psr-4' => [
            'Tollwerk\\TwForms\\' => 'Classes'
        ],
    ],
];
