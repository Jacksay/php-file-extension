<?php

namespace Jacksay\PhpFileExtension;
use Jacksay\PhpFileExtension\Dictonary\DocumentDictionary;
use Jacksay\PhpFileExtension\Dictonary\ImageDictonary;


/**
 * Created by PhpStorm.
 * User: jacksay
 * Date: 04/12/2015
 * Time: 12:34
 */
class PhpFileExtensionTest extends \PHPUnit_Framework_TestCase
{
    public function testExtensionAdd()
    {
        $ext = new PhpFileExtension();

        // Image
        (new DocumentDictionary())->loadExtensions($ext);
        (new ImageDictonary())->loadExtensions($ext);


        $this->assertEquals($ext->getExtension('image/jpg'), 'jpg');
        $this->assertEquals($ext->getExtension('image/jpeg'), 'jpg');
        $this->assertEquals($ext->getExtension('image/jpeg; charset=binary'),
            'jpg');
        $this->assertEquals($ext->getExtension('image/jpg; charset=binary'),
            'jpg');
    }

}