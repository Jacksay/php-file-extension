<?php

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
        $ext = new \Jacksay\PhpFileExtension\PhpFileExtension();

        $ext->addExtension('image/jpg', 'jpg');
        $ext->addExtension('image/jpeg', 'jpg');

        $this->assertEquals($ext->getExtension('image/jpg'), 'jpg');
        $this->assertEquals($ext->getExtension('image/jpeg'), 'jpg');
        $this->assertEquals($ext->getExtension('image/jpeg; charset=binary'),
            'jpg');
        $this->assertEquals($ext->getExtension('image/jpg; charset=binary'),
            'jpg');
    }

}