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
        $this->assertEquals(
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                $cleaner->clean('application/vnd.openxmlformats-officedocument.wordprocessingml.document; '));

        $this->assertEquals(
            'shdjfhsjdf/jsdhfhsdfh.jdshfjsdhf-hjfsdhfjsdhf.jksdjf',
            $cleaner->clean('shdjfhsjdf/jsdhfhsdfh.jdshfjsdhf-hjfsdhfjsdhf.jksdjf'));

        $this->assertEquals(
            'shdjfhsjdf/jsdhfhsdfh.jdshfjsdhf-hjfsdhfjsdhf.jksdjf',
            $cleaner->clean('shdjfhsjdf/jsdhfhsdfh.jdshfjsdhf-hjfsdhfjsdhf.jksdjf; charset=utf8'));

        $this->assertEquals(
            'abc/123.abc-1A2B3C.ABC',
            $cleaner->clean('abc/123.abc-1A2B3C.ABC; charset=iso-007'));
    }

}