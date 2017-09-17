<?php

// bootstrap autoloader
spl_autoload_register(function ($class_name) {
    if ($class_name) {
        $file =   __DIR__ .'/'.'src/' ;
        $file .= str_replace('\\', '/', $class_name);
        $file .=".php";
        if (file_exists($file)) {
            include $file;
        }else{
            $file =   __DIR__ .'/'.'dependencies/react-php/src/' ;
            $file .= str_replace('\\', '/', $class_name);
            $file .=".php";
            if (file_exists($file)) {
                include $file;
            }

        }
    }
});
/*
if (!class_exists('\SplClassLoader')) {
    include __DIR__ . '/dependencies/spl-class-loader/SplClassLoader.php';
}
$classLoader = new \SplClassLoader('nsqphp', __DIR__ . '/src/');
$classLoader->register();

$classLoader = new \SplClassLoader('React', __DIR__ . '/dependencies/react-php/src/');
$classLoader->register();
*/
