<?php

namespace Jacksay\PhpFileExtension\Strategy;

require __DIR__.'/../../../../vendor/autoload.php';

/**
 * Created by PhpStorm.
 * User: jacksay
 * Date: 04/12/2015
 * Time: 12:08
 */
class MimeCleanerTest extends \PHPUnit_Framework_TestCase
{
    public function testCleaner()
    {
        $mime = "toto; charset=binary";
        $cleaner = new MimeCleaner();

        $this->assertTrue($cleaner->clean($mime) == 'toto');
    }

}