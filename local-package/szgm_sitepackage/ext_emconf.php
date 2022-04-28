<?php

/**
 * Extension Manager/Repository config file for ext "szgm_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'SZGM Sitepackage',
    'description' => 'A Szenzor-gm weboldal upgrade',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Tns\\SzgmSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Petrován Zoltán',
    'author_email' => 'zoltan.petrovan@thenextshift.net',
    'author_company' => 'TNS',
    'version' => '1.0.0',
];
