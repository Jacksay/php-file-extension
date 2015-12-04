<?php
/**
 * @author Stéphane Bouvry<stephane.bouvry@unicaen.fr>
 * @date: 04/12/15 13:13
 * @copyright Certic (c) 2015
 */

namespace Jacksay\Dictonary;

use Jacksay\PhpFileExtension\PhpFileExtension;

interface IDictonary
{
    public function loadExtensions( PhpFileExtension $manager );
}