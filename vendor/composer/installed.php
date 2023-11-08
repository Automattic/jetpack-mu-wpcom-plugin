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
            'pretty_version' => '4.18.0-alpha.1699455924',
            'version' => '4.18.0.0-alpha1699455924',
            'reference' => '2b2302ba32e090189c0fe17ac1ee85f691ca7151',
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
