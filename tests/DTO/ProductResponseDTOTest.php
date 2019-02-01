<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\ProductResponseDTO;

/**
 * Class ProductResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class ProductResponseDTOTest extends DTOTest
{
    /**
     * @var ProductResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = ProductResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'          => ['someField' => 'someValue'],
            'sku'          => ['someField' => 'someValue'],
            'price'        => 'some_price',
            'categories'   => ['some_category' => 'some_categoryValue'],
            'name'         => 'some_name',
            'description'  => 'some_description',
            'isAvailable'  => 'some_isAvailable',
            'oldPrice'     => 'some_oldPrice',
            'shelfLife'    => 'some_shelfLife',
            'url'          => 'some_url',
            'pictureUrl'   => 'some_pictureUrl',
            'customFields' => ['someField' => 'someValue'],
        ];
        $this->dto = new ProductResponseDTO($data);
    }

    public function testGetIds()
    {
        $field = $this->dto->getIds();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testGetId()
    {
        $field = $this->dto->getId('someField');

        $this->assertSame('someValue', $field);
    }

    public function testGetSku()
    {
        $field = $this->dto->getSku();

        $this->assertInstanceOf(\Mindbox\DTO\SkuResponseDTO::class, $field);
    }

    public function testGetPrice()
    {
        $field = $this->dto->getPrice();

        $this->assertSame('some_price', $field);
    }

    public function testGetCategories()
    {
        $field = $this->dto->getCategories();

        $this->assertInstanceOf(\Mindbox\DTO\CategoryResponseCollection::class, $field);
    }

    public function testGetName()
    {
        $field = $this->dto->getName();

        $this->assertSame('some_name', $field);
    }

    public function testGetDescription()
    {
        $field = $this->dto->getDescription();

        $this->assertSame('some_description', $field);
    }

    public function testGetIsAvailable()
    {
        $field = $this->dto->getIsAvailable();

        $this->assertSame('some_isAvailable', $field);
    }

    public function testGetOldPrice()
    {
        $field = $this->dto->getOldPrice();

        $this->assertSame('some_oldPrice', $field);
    }

    public function testGetShelfLife()
    {
        $field = $this->dto->getShelfLife();

        $this->assertSame('some_shelfLife', $field);
    }

    public function testGetUrl()
    {
        $field = $this->dto->getUrl();

        $this->assertSame('some_url', $field);
    }

    public function testGetPictureUrl()
    {
        $field = $this->dto->getPictureUrl();

        $this->assertSame('some_pictureUrl', $field);
    }

    public function testGetCustomFields()
    {
        $field = $this->dto->getCustomFields();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testGetCustomField()
    {
        $field = $this->dto->getCustomField('someField');

        $this->assertSame('someValue', $field);
    }
}
