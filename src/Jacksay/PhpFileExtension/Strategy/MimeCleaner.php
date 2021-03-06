<?php

namespace Jacksay\PhpFileExtension\Strategy;

/**
 * Just remove ;charset binary on mime type
 */
class MimeCleaner implements IMimeCleaner
{
    /**
     * @param $typeMime
     * @return string
     */
    public function clean($typeMime)
    {
        if( preg_match("/([a-zA-Z0-9-\\/\\.]*)(; .*)?/", $typeMime, $matches) ){
            return $matches[1];
        }
        return $typeMime;
    }
}