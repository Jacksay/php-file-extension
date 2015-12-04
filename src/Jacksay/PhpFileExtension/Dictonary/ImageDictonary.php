<?php

namespace Jacksay\PhpFileExtension\Dictonary;

use Jacksay\PhpFileExtension\PhpFileExtension;

/**
 * @author Stéphane Bouvry<stephane.bouvry@unicaen.fr>
 * @date: 04/12/15 13:12
 * @copyright Certic (c) 2015
 */
class ImageDictonary implements IDictonary
{

    public function loadExtensions(PhpFileExtension $manager)
    {
        $manager
            // JPG
            ->addExtension('image/jpg', 'jpg')
            ->addExtension('image/jpeg', 'jpg')
            ->addExtension('image/pjpeg', 'jpg') // MS
            // GIF
            ->addExtension('image/gif', 'gif')

            ->addExtension('image/tiff', 'tif')

            // PNG
            ->addExtension('image/png', 'png')
            ->addExtension('image/x-png', 'png') // MS

            ->addExtension('image/svg+xml', 'svg')
        ;
    }
}