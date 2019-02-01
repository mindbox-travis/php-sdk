<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CustomerActionResponseDTO;

/**
 * Class CustomerActionResponseDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CustomerActionResponseDTOTest extends DTOTest
{
    /**
     * @var CustomerActionResponseDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = CustomerActionResponseDTO::class;

    public function setUp()
    {
        $data      = [
            'ids'                    => ['someField' => 'someValue'],
            'actionTemplate'         => ['someField' => 'someValue'],
            'dateTimeUtc'            => 'some_dateTimeUtc',
            'pointOfContact'         => ['someField' => 'someValue'],
            'customer'               => ['someField' => 'someValue'],
            'customerBalanceChanges' => [['someField' => 'someValue']],
            'order'                  => ['someField' => 'someValue'],
        ];
        $this->dto = new CustomerActionResponseDTO($data);
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

    public function testGetActionTemplate()
    {
        $field = $this->dto->getActionTemplate();

        $this->assertInstanceOf(\Mindbox\DTO\ActionTemplateResponseDTO::class, $field);
    }

    public function testGetDateTimeUtc()
    {
        $field = $this->dto->getDateTimeUtc();

        $this->assertSame('some_dateTimeUtc', $field);
    }

    public function testGetPointOfContact()
    {
        $field = $this->dto->getPointOfContact();

        $this->assertInstanceOf(\Mindbox\DTO\PointOfContactResponseDTO::class, $field);
    }

    public function testGetCustomer()
    {
        $field = $this->dto->getCustomer();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerResponseDTO::class, $field);
    }

    public function testGetCustomerBalanceChanges()
    {
        $field = $this->dto->getCustomerBalanceChanges();

        $this->assertInstanceOf(\Mindbox\DTO\CustomerBalanceChangeResponseCollection::class, $field);
    }

    public function testGetOrder()
    {
        $field = $this->dto->getOrder();

        $this->assertInstanceOf(\Mindbox\DTO\OrderResponseDTO::class, $field);
    }
}
