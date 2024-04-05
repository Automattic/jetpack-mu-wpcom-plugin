<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ2_1_13_alpha
{
    public static $files = array (
        '3773ef3f09c37da5478d578e32b03a4b' => __DIR__ . '/..' . '/automattic/jetpack-assets/actions.php',
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Assets' => __DIR__ . '/..' . '/automattic/jetpack-assets/src/class-assets.php',
        'Automattic\\Jetpack\\Assets\\Semver' => __DIR__ . '/..' . '/automattic/jetpack-assets/src/class-semver.php',
        'Automattic\\Jetpack\\Constants' => __DIR__ . '/..' . '/automattic/jetpack-constants/src/class-constants.php',
        'Automattic\\Jetpack\\Jetpack_Mu_Wpcom' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/class-jetpack-mu-wpcom.php',
        'Automattic\\Jetpack\\Scheduled_Updates' => __DIR__ . '/..' . '/automattic/scheduled-updates/src/class-scheduled-updates.php',
        'Automattic\\Jetpack\\Scheduled_Updates_Logs' => __DIR__ . '/..' . '/automattic/scheduled-updates/src/class-scheduled-updates-logs.php',
        'Automattic\\Jetpack\\Verbum_Admin' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/verbum-comments/assets/class-verbum-admin.php',
        'Automattic\\Jetpack\\Verbum_Comments' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/verbum-comments/class-verbum-comments.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Launchpad_Task_Lists' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/launchpad/class-launchpad-task-lists.php',
        'Marketplace_Products_Updater' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/marketplace-products-updater/class-marketplace-products-updater.php',
        'Verbum_Block_Utils' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/verbum-comments/assets/class-verbum-block-utils.php',
        'Verbum_Gutenberg_Editor' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/verbum-comments/assets/class-verbum-gutenberg-editor.php',
        'WPCOM_REST_API_V2_Endpoint_Launchpad' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/wpcom-endpoints/class-wpcom-rest-api-v2-endpoint-launchpad.php',
        'WPCOM_REST_API_V2_Endpoint_Launchpad_Navigator' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/wpcom-endpoints/class-wpcom-rest-api-v2-endpoint-launchpad-navigator.php',
        'WPCOM_REST_API_V2_Endpoint_Site_Migration_Migrate_Guru_Key' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/wpcom-endpoints/class-wpcom-rest-api-v2-endpoint-site-migration-migrate-guru-key.php',
        'WPCOM_REST_API_V2_Endpoint_Update_Schedules' => __DIR__ . '/..' . '/automattic/scheduled-updates/src/wpcom-endpoints/class-wpcom-rest-api-v2-endpoint-update-schedules.php',
        'WPCOM_REST_API_V2_Verbum_Auth' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/verbum-comments/assets/class-wpcom-rest-api-v2-verbum-auth.php',
        'WPCOM_REST_API_V2_Verbum_OEmbed' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/verbum-comments/assets/class-wpcom-rest-api-v2-verbum-oembed.php',
        'Wpcom_Block_Patterns_From_Api' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/block-patterns/class-wpcom-block-patterns-from-api.php',
        'Wpcom_Block_Patterns_Utils' => __DIR__ . '/..' . '/automattic/jetpack-mu-wpcom/src/features/block-patterns/class-wpcom-block-patterns-utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd9d132a783958a00a2c7cccff60ca42d_jetpack_mu_wpcom_pluginⓥ2_1_13_alpha::$classMap;

        }, null, ClassLoader::class);
    }
}
