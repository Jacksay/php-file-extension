<?php
/**
 * @author Stéphane Bouvry<stephane.bouvry@unicaen.fr>
 * @date: 04/12/15 13:23
 * @copyright Certic (c) 2015
 */

namespace Jacksay\PhpFileExtension\Strategy;

class MimeProvider implements IMimeProvider
{

    private $_command = "file -bi '%s'";

    /**
     * Return MIME type of $filePath.
     *
     * @param string $filePath
     * @return string mixed
     */
    public function getMimeType($filePath)
    {
        return exec(sprintf($this->_command, $filePath));
    }
}