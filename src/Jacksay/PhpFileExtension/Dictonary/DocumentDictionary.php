<?php
/**
 * @author Stéphane Bouvry<stephane.bouvry@unicaen.fr>
 * @date: 04/12/15 13:30
 * @copyright Certic (c) 2015
 */

namespace Jacksay\PhpFileExtension\Dictonary;


use Jacksay\PhpFileExtension\PhpFileExtension;

class DocumentDictionary implements IDictonary
{

    public function loadExtensions(PhpFileExtension $manager)
    {
        $manager->addExtension('application/pdf', 'pdf');
    }
}