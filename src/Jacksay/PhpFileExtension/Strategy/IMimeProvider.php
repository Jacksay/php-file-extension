<?php
/**
 * @author Stéphane Bouvry<stephane.bouvry@unicaen.fr>
 * @date: 04/12/15 13:22
 * @copyright Certic (c) 2015
 */

namespace Jacksay\PhpFileExtension\Strategy;


interface IMimeProvider
{
    /**
     * Return MIME type of $filePath.
     *
     * @param string $filePath
     * @return string mixed
     */
    public function getMimeType( $filePath );
}