<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5339781065454d4eaf48eed388c7310b
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dompdf\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Svg\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src',
            ),
        ),
        'F' => 
        array (
            'FontLib\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-font-lib/src',
            ),
        ),
    );

    public static $classMap = array (
        'Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'HTML5_Data' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Data.php',
        'HTML5_InputStream' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/InputStream.php',
        'HTML5_Parser' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Parser.php',
        'HTML5_Tokenizer' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Tokenizer.php',
        'HTML5_TreeBuilder' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/TreeBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5339781065454d4eaf48eed388c7310b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5339781065454d4eaf48eed388c7310b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5339781065454d4eaf48eed388c7310b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5339781065454d4eaf48eed388c7310b::$classMap;

        }, null, ClassLoader::class);
    }
}
