<?php


namespace Mindbox\DTO;

/**
 * @property SkuRequestDTO             sku
 * @property CategoryRequestCollection categories
 **/
class ProductRequestDTO extends ProductIdentityRequestDTO
{
    use ProductDTO, CustomFieldRequestDTO;

    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'sku'        => SkuRequestDTO::class,
        'categories' => CategoryRequestCollection::class,
    ];

    /**
     * @return SkuRequestDTO
     */
    public function getSku()
    {
        return $this->getField('sku');
    }

    /**
     * @param array|SkuRequestDTO $sku
     */
    public function setSku($sku)
    {
        $this->setField('sku', $sku);
    }

    /**
     * @return CategoryRequestCollection
     */
    public function getCategories()
    {
        return $this->getField('categories');
    }

    /**
     * @param array|CategoryRequestCollection $categories
     */
    public function setCategories($categories)
    {
        $this->setField('categories', $categories);
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->setField('price', $price);
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->setField('name', $name);
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->setField('description', $description);
    }

    /**
     * @param mixed $isAvailable
     */
    public function setIsAvailable($isAvailable)
    {
        $this->setField('isAvailable', $isAvailable);
    }

    /**
     * @param mixed $oldPrice
     */
    public function setOldPrice($oldPrice)
    {
        $this->setField('oldPrice', $oldPrice);
    }

    /**
     * @param mixed $shelfLife
     */
    public function setShelfLife($shelfLife)
    {
        $this->setField('shelfLife', $shelfLife);
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->setField('url', $url);
    }

    /**
     * @param mixed $pictureUrl
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->setField('pictureUrl', $pictureUrl);
    }
}
