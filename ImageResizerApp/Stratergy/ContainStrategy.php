<?php

/**
 * Images resize strategy for Container class
 *
 * @author Mohan Jadhav <mohan212jadhav@gmail.com>
 */

declare(strict_types=1);

namespace ImageResizerApp\Stratergy;

use ImageResizerApp\Interfaces\ImageResizeInterface;

class ContainStrategy implements ImageResizeInterface
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
            $width = $imageA['height'] * $ratioB;
            $height = $imageA['height'];
        } else {
            $width = $imageA['width'];
            $height = $imageA['width'] / $ratioB;
        }

        return ['width' => $width, 'height' => $height];
    }
}
