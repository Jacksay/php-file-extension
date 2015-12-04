<?php

namespace Jacksay\PhpFileExtension\Strategy;

/**
 * Created by PhpStorm.
 * User: jacksay
 * Date: 04/12/2015
 * Time: 11:35
 */
interface IMimeCleaner
{
    /**
     * @param $typeMime
     * @return string
     */
    public function clean( $typeMime );
}