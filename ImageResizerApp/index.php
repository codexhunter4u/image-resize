<?php

/**
 * Image Resizer index file
 *
 * @author Mohan Jadhav <mohan212jadhav@gmail.com>
 */

use ImageResizerApp\Classes\ImageResizer;
use ImageResizerApp\Stratergy\CoverStrategy;
use ImageResizerApp\Stratergy\ContainStrategy;

/**
 * Auto load all classes
 *
 * @param string $className
 * 
 * @return void
 */
function autoLoadClasses($className): void 
{
    $fileName = str_replace('\\', '/', $className) . '.php';
    $filePath = "/var/www/html/" . $fileName;

    if (file_exists($filePath)) {
        require_once $filePath;
    }
}

// Special autoload register here
spl_autoload_register('autoLoadClasses');

// Sample Input for image ratio calcualtion
$imageA = ['width' => 180, 'height' => 250];
$imageB = ['width' => 360, 'height' => 200];

// Print output for Contain image details
$resizer = new ImageResizer(new ContainStrategy());
$output = $resizer->resize($imageA, $imageB);
echo sprintf("Contain: width: %s, height: %s", $output['width'], $output['height']) . "<br>";

// Print output for Cover image details
$resizer = new ImageResizer(new CoverStrategy());
$output = $resizer->resize($imageA, $imageB);
echo sprintf("Cover: width: %s, height: %s", $output['width'], $output['height']) . "<br>";
