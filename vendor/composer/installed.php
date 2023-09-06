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
            'pretty_version' => 'v4.7.0',
            'version' => '4.7.0.0',
            'reference' => '0bee28f7c50e1dca8225a715270944d0ce94cbb2',
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
