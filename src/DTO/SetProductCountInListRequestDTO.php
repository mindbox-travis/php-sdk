<?php


namespace Mindbox\DTO;

/**
 * @property ProductRequestDTO product
 * @property string            count
 **/
class SetProductCountInListRequestDTO extends DTO
{
    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'product' => ProductRequestDTO::class,
    ];

    /**
     * @var string DTO name for Xml.
     */
    protected static $xmlName = 'setProductCountInList';

    /**
     * @return ProductRequestDTO
     */
    public function getProduct()
    {
        return $this->getField('product');
    }

    /**
     * @param array|ProductRequestDTO $product
     */
    public function setProduct($product)
    {
        $this->setField('product', $product);
    }

    /**
     * @return string
     */
    public function getCount()
    {
        return $this->getField('count');
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->setField('count', $count);
    }
}
