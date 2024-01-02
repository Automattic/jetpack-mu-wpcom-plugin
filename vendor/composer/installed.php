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
            'pretty_version' => '5.7.0-alpha.1704224704',
            'version' => '5.7.0.0-alpha1704224704',
            'reference' => 'c471e4e1684c2dc30e4ff4887b833e31a778dae5',
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
