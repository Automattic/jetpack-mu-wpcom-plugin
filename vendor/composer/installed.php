<?php return array(
    'root' => array(
        'name' => 'automattic/jetpack-mu-wpcom-plugin',
        'pretty_version' => 'dev-trunk',
        'version' => 'dev-trunk',
        'reference' => NULL,
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'automattic/jetpack-mu-wpcom' => array(
            'pretty_version' => '3.7.0-alpha.1689022472',
            'version' => '3.7.0.0-alpha1689022472',
            'reference' => '87ae68d2328d6b909cfd180aba68963ff8449f4c',
            'type' => 'jetpack-library',
            'install_path' => __DIR__ . '/../automattic/jetpack-mu-wpcom',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'automattic/jetpack-mu-wpcom-plugin' => array(
            'pretty_version' => 'dev-trunk',
            'version' => 'dev-trunk',
            'reference' => NULL,
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
