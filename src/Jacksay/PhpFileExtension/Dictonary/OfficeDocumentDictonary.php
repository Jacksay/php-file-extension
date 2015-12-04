<?php
namespace Jacksay\PhpFileExtension\Dictonary;


use Jacksay\PhpFileExtension\PhpFileExtension;

/**
 * Commons extensions used for office document (from Word, Exel, Openoffice,
 * etc.)
 *
 * Class OfficeDocumentDictonary
 * @package Jacksay\PhpFileExtension\Dictonary
 */
class OfficeDocumentDictonary implements IDictonary
{

    public function loadExtensions(PhpFileExtension $manager)
    {
        $manager
            ->addExtension('application/vnd.ms-word.document.macroEnabled.12t','docm')
            ->addExtension('application/vnd.openxmlformats-officedocument.wordprocessingml.template','dotx')

            // Excel
            ->addExtension('application/vnd.ms-excel','xls')

            // Word
            ->addExtension('application/msword','doc')

            // Open Document (OpenOffice / LibreOffice)
            ->addExtension('application/vnd.oasis.opendocument.text','odt')
            ->addExtension('application/vnd.oasis.opendocument.spreadsheet','ods')
            ->addExtension('application/vnd.oasis.opendocument.presentation','odp')
            ->addExtension('application/vnd.oasis.opendocument.graphics','odg')
            ->addExtension('application/vnd.oasis.opendocument.chart','odc')
            ->addExtension('application/vnd.oasis.opendocument.formula','odf')
            ->addExtension('application/vnd.oasis.opendocument.database','odb')
            ->addExtension('application/vnd.oasis.opendocument.image','odi')
            ->addExtension('application/vnd.oasis.opendocument.text-master','odm')

            // MS Office
            ->addExtension('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'docx', 'Document Microsoft Office Word 2007')
            ->addExtension('application/vnd.ms-word.document.macroEnabled.12 ', 'docm', 'Document Office Word 2007 prenant en charge les macros')
            ->addExtension('application/vnd.openxmlformats-officedocument.wordprocessingml.template', 'dotx', 'Modèle Office Word 2007')
            ->addExtension('application/vnd.ms-word.template.macroEnabled.12', 'dotm', 'Modèle de document Office Word 2007 prenant en charge les macros')
            ->addExtension('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'xlsx', 'Classeur Microsoft Office Excel 2007')
            ->addExtension('application/vnd.ms-excel.sheet.macroEnabled.12', 'xlsm', 'Classeur Office Excel 2007 prenant en charge les macros')
            ->addExtension('application/vnd.openxmlformats-officedocument.spreadsheetml.template', 'xltx', 'Modèle Office Excel 2007')
            ->addExtension('application/vnd.ms-excel.template.macroEnabled.12', 'xltm', 'Modèle de classeur Office Excel 2007 prenant en charge les macros')
            ->addExtension('application/vnd.ms-excel.sheet.binary.macroEnabled.12', 'xlsb', 'Classeur binaire Office Excel 2007')
            ->addExtension('application/vnd.ms-excel.addin.macroEnabled.12', 'xlam', 'Complément Office Excel 2007')
            ->addExtension('application/vnd.openxmlformats-officedocument.presentationml.presentation', 'pptx', 'Présentation Microsoft Office PowerPoint 2007')
            ->addExtension('application/vnd.ms-powerpoint.presentation.macroEnabled.12', 'pptm', 'Présentation Office PowerPoint 2007 prenant en charge les macros')
            ->addExtension('application/vnd.openxmlformats-officedocument.presentationml.slideshow', 'ppsx', 'Diaporama Office PowerPoint 2007')
            ->addExtension('application/vnd.ms-powerpoint.slideshow.macroEnabled.12', 'ppsm', 'Diaporama Office PowerPoint 2007 prenant en charge les macros')
            ->addExtension('application/vnd.openxmlformats-officedocument.presentationml.template', 'potx', 'Modèle Office PowerPoint 2007')
            ->addExtension('application/vnd.ms-powerpoint.template.macroEnabled.12', 'potm', 'Modèle de présentation Office PowerPoint 2007 prenant en charge les macros')
            ->addExtension('application/vnd.ms-powerpoint.addin.macroEnabled.12', 'ppam', 'Complément Office PowerPoint 2007')
            ->addExtension('application/vnd.openxmlformats-officedocument.presentationml.slide', 'sldx', 'Diapositive Office PowerPoint 2007')
            ->addExtension('application/vnd.ms-powerpoint.slide.macroEnabled.12', 'sldm', 'Diapositive Office PowerPoint 2007 prenant en charge les macros')
            ->addExtension('application/onenote', 'one', 'Section Microsoft Office OneNote 2007')
            ->addExtension('application/onenote', 'onetoc2', 'Sommaire Office OneNote 2007')
            ->addExtension('application/onenote', 'onetmp', 'Fichier temporaire Office OneNote 2007')
            ->addExtension('application/onenote', 'onepkg', 'Package Office OneNote 2007')
            ->addExtension('application/vnd.ms-officetheme', 'thmx', 'Thème de version Office system 2007')
        ;
    }
}