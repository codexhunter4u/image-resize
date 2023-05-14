<?php

/**
 * Images resize cover strategy for Coverage class
 *
 * @author Mohan Jadhav <mohan212jadhav@gmail.com>
 */

declare(strict_types=1);

namespace ImageResizerApp\Stratergy;

use ImageResizerApp\Interfaces\ImageResizeInterface;

class CoverStrategy implements ImageResizeInterface
{
    /**
     * @param array $imageA
     * @param array $imageB
     * 
     * @return array
     */
    public function resize($imageA, $imageB): array
    {
        $ratioA = $imageA['width'] / $imageA['height'];
        $ratioB = $imageB['width'] / $imageB['height'];

        if ($ratioA > $ratioB) {
            $width = $imageA['width'];
            $height = $imageA['width'] / $ratioB;
        } else {
            $width = $imageA['height'] * $ratioB;
            $height = $imageA['height'];
        }
        
        return ['width' => $width, 'height' => $height];
    }
}
