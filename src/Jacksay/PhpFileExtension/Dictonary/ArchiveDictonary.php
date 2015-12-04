<?php
/**
 * @author Stéphane Bouvry<stephane.bouvry@unicaen.fr>
 * @date: 04/12/15 13:29
 * @copyright Certic (c) 2015
 */

namespace Jacksay\PhpFileExtension\Dictonary;


use Jacksay\PhpFileExtension\PhpFileExtension;

class ArchiveDictonary implements IDictonary
{
    public function loadExtensions(PhpFileExtension $manager)
    {
        $manager
            ->addExtension('application/zip',     'zip')
        ;
    }
}