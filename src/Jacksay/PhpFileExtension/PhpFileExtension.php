<?php

namespace Jacksay\PhpFileExtension;
use Jacksay\PhpFileExtension\Exception\NotFoundExtension;
use Jacksay\PhpFileExtension\Strategy\IMimeCleaner;
use Jacksay\PhpFileExtension\Strategy\MimeCleaner;

/**
 * Created by PhpStorm.
 * User: jacksay
 * Date: 04/12/2015
 * Time: 11:32
 */
class PhpFileExtension
{
    /** @var array */
    private $_extensions = [];

    /** @var IMimeCleaner */
    private $_mimeCleaner;

    /**
     * PhpFileExtension constructor.
     * @param IMimeCleaner $cleanerStrategy
     */
    function __construct( IMimeCleaner $cleanerStrategy = null )
    {
        $this->_mimeCleaner = $cleanerStrategy ?  : new MimeCleaner();
    }

    /**
     * @param $mimeType
     * @param $extension
     * @param string $description
     * @param string $nature
     * @return $this
     */
    public function addExtension( $mimeType, $extension, $description='',
                                  $nature = '')
    {
        $mimeType = $this->_mimeCleaner->clean($mimeType);

        if( isset($this->_extensions[$mimeType]) ){
            if( !in_array($extension,
                $this->_extensions[$mimeType]['extensions']) ){
                $this->_extensions[$mimeType]['extensions'][] = $extension;
            }
        } else {
            $this->_extensions[$mimeType] = [
                'extensions' => is_array($extension) ? $extension :
                    [$extension],
                'description' => $description,
                'nature' => $nature
            ];
        }
        return $this;
    }

    /**
     * @param $mimeType
     * @return mixed
     * @throws NotFoundExtension
     */
    public function getExtension( $mimeType )
    {
        $mimeType = $this->_mimeCleaner->clean($mimeType);

        if( isset($this->_extensions[$mimeType]) ){
            return $this->_extensions[$mimeType]['extensions'][0];
        }
        throw new NotFoundExtension(sprintf("Unknow extension for type mime
        %s", $mimeType));
    }
}