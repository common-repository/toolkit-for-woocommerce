<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb63f5af5ec26f762620b4e3ca10d82be
{
    public static $files = array (
        'c14057a02afc95b84dc5bf85d98c5b66' => __DIR__ . '/..' . '/julien731/wp-dismissible-notices-handler/handler.php',
        'ff8834a662873e3e689a4283b27598d2' => __DIR__ . '/..' . '/julien731/wp-dismissible-notices-handler/includes/helper-functions.php',
        'a50f2d2ba04e0c6b552331bf2bdeba41' => __DIR__ . '/..' . '/julien731/wp-review-me/review.php',
        '2962a62f254a86099596fd77a48eac3a' => __DIR__ . '/../..' . '/constants.php',
        '2dcc1fe700145c8f64875eb0ae323e56' => __DIR__ . '/../..' . '/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GearGag_WooCommerce_Toolkit\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GearGag_WooCommerce_Toolkit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'GearGag_WooCommerce_Toolkit\\Batch_Delete_Products' => __DIR__ . '/../..' . '/Batch_Delete_Products.php',
        'GearGag_WooCommerce_Toolkit\\Change_Paypal_Item_Name' => __DIR__ . '/../..' . '/Change_Paypal_Item_Name.php',
        'GearGag_WooCommerce_Toolkit\\Plugin' => __DIR__ . '/../..' . '/index.php',
        'GearGag_WooCommerce_Toolkit\\admin\\Admin' => __DIR__ . '/../..' . '/admin/Admin.php',
        'GearGag_WooCommerce_Toolkit\\settings_page\\Settings_Page' => __DIR__ . '/../..' . '/settings_page/Settings_Page.php',
        'GearGag_WooCommerce_Toolkit\\settings_page\\Tab_Changelog' => __DIR__ . '/../..' . '/settings_page/Tab_Changelog.php',
        'GearGag_WooCommerce_Toolkit\\settings_page\\Tab_Diagnostic_Info' => __DIR__ . '/../..' . '/settings_page/Tab_Diagnostic_Info.php',
        'GearGag_WooCommerce_Toolkit\\settings_page\\Tab_Settings' => __DIR__ . '/../..' . '/settings_page/Tab_Settings.php',
        'GearGag_WooCommerce_Toolkit\\tools\\KSES' => __DIR__ . '/../..' . '/tools/KSES.php',
        'GearGag_WooCommerce_Toolkit\\tools\\Register_Assets' => __DIR__ . '/../..' . '/tools/Register_Assets.php',
        'GearGag_WooCommerce_Toolkit\\tools\\Register_Settings' => __DIR__ . '/../..' . '/tools/Register_Settings.php',
        'GearGag_WooCommerce_Toolkit\\tools\\Singleton' => __DIR__ . '/../..' . '/tools/Singleton.php',
        'GearGag_WooCommerce_Toolkit\\tools\\contracts\\Bootable' => __DIR__ . '/../..' . '/tools/contracts/Bootable.php',
        'GearGag_WooCommerce_Toolkit\\tools\\contracts\\Displayable' => __DIR__ . '/../..' . '/tools/contracts/Displayable.php',
        'GearGag_WooCommerce_Toolkit\\tools\\contracts\\Enqueueable' => __DIR__ . '/../..' . '/tools/contracts/Enqueueable.php',
        'GearGag_WooCommerce_Toolkit\\tools\\contracts\\Initable' => __DIR__ . '/../..' . '/tools/contracts/Initable.php',
        'GearGag_WooCommerce_Toolkit\\tools\\contracts\\Loadable' => __DIR__ . '/../..' . '/tools/contracts/Loadable.php',
        'GearGag_WooCommerce_Toolkit\\tools\\contracts\\Renderable' => __DIR__ . '/../..' . '/tools/contracts/Renderable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb63f5af5ec26f762620b4e3ca10d82be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb63f5af5ec26f762620b4e3ca10d82be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb63f5af5ec26f762620b4e3ca10d82be::$classMap;

        }, null, ClassLoader::class);
    }
}
