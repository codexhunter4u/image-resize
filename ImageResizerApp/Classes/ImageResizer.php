<?php

/**
 * ImageResizer class for resize the images
 *
 * @author Mohan Jadhav <mohan212jadhav@gmail.com>
*/

declare(strict_types=1);

namespace ImageResizerApp\Classes;

use ImageResizerApp\Interfaces\ImageResizeInterface;

class ImageResizer
{
    private $imageResizeInterface;

    /**
     * Constructor function
     *
     * @param ImageResizeInterface $imageResizeInterface
    */
    public function __construct(ImageResizeInterface $imageResizeInterface)
    {
        $this->imageResizeInterface = $imageResizeInterface;
    }

    /**
     * @param array $imageA
     * @param array $imageB
     * 
     * @return array
     */
    public function resize($imageA, $imageB): array
    {
        return $this->imageResizeInterface->resize($imageA, $imageB);
    }
}