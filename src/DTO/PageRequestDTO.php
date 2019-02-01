<?php


namespace Mindbox\DTO;

/**
 * @property string sinceDateTimeUtc
 * @property string tillDateTimeUtc
 * @property string pageNumber
 * @property string itemsPerPage
 **/
class PageRequestDTO extends DTO
{
    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'page';

    /**
     * @return string
     */
    public function getSinceDateTimeUtc()
    {
        return $this->getField('sinceDateTimeUtc');
    }

    /**
     * @param mixed $sinceDateTimeUtc
     */
    public function setSinceDateTimeUtc($sinceDateTimeUtc)
    {
        $this->setField('sinceDateTimeUtc', $sinceDateTimeUtc);
    }

    /**
     * @return string
     */
    public function getTillDateTimeUtc()
    {
        return $this->getField('tillDateTimeUtc');
    }

    /**
     * @param mixed $tillDateTimeUtc
     */
    public function setTillDateTimeUtc($tillDateTimeUtc)
    {
        $this->setField('tillDateTimeUtc', $tillDateTimeUtc);
    }

    /**
     * @return string
     */
    public function getPageNumber()
    {
        return $this->getField('pageNumber');
    }

    /**
     * @param mixed $pageNumber
     */
    public function setPageNumber($pageNumber)
    {
        $this->setField('pageNumber', $pageNumber);
    }

    /**
     * @return string
     */
    public function getItemsPerPage()
    {
        return $this->getField('itemsPerPage');
    }

    /**
     * @param mixed $itemsPerPage
     */
    public function setItemsPerPage($itemsPerPage)
    {
        $this->setField('itemsPerPage', $itemsPerPage);
    }
}
