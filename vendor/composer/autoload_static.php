<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_7_11
{
    public static $classMap = array (
        'Automattic\\Jetpack\\Jetpack_Mu_Wpcom' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/class-jetpack-mu-wpcom.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Launchpad_Task_Lists' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/launchpad/class-launchpad-task-lists.php',
        'Marketplace_Products_Updater' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/marketplace-products-updater/class-marketplace-products-updater.php',
        'WPCOM_REST_API_V2_Endpoint_Launchpad' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/wpcom-endpoints/class-wpcom-rest-api-v2-endpoint-launchpad.php',
        'WPCOM_REST_API_V2_Endpoint_Launchpad_Navigator' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/wpcom-endpoints/class-wpcom-rest-api-v2-endpoint-launchpad-navigator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ1_7_11::$classMap;

        }, null, ClassLoader::class);
    }
}
