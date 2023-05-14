<?php

/**
 * Image Resize Interface
 *
 * @author Mohan Jadhav <mohan212jadhav@gmail.com>
 */

declare(strict_types=1);

namespace ImageResizerApp\Interfaces;

interface ImageResizeInterface {

    /**
     * @param array $imageA
     * @param array $imageB
     * 
     * @return array
     */
    public function resize($imageA, $imageB): array;
}
