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
            'pretty_version' => '5.10.0-alpha.1706190878',
            'version' => '5.10.0.0-alpha1706190878',
            'reference' => '781754906c4113de3606a91a599f0d28a6deed17',
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
