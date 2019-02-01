<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CustomerIdentityRequestDTO;

/**
 * Class CustomerIdentityRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CustomerIdentityRequestDTOTest extends DTOTest
{
    /**
     * @var CustomerIdentityRequestDTO $dto
     */
    public $dto;
    /**
     * @var string
     */
    protected $dtoClassName = CustomerIdentityRequestDTO::class;

    public function setUp()
    {
        $data      = [
            'ids' => ['someField' => 'someValue'],
        ];
        $this->dto = new CustomerIdentityRequestDTO($data);
    }

    public function testGetIds()
    {
        $field = $this->dto->getIds();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testSetIds()
    {
        $this->dto->setIds(['bitrixId' => 'some_bitrixId']);
        $field = $this->dto->getIds();

        $this->assertSame(['bitrixId' => 'some_bitrixId'], $field);
    }

    public function testGetId()
    {
        $field = $this->dto->getId('someField');

        $this->assertSame('someValue', $field);
    }

    public function testSetId()
    {
        $field = $this->dto->getId('someField');

        $this->assertSame('someValue', $field);

        $this->dto->setId('new_bitrixId', 'new_bitrixId_val');
        $field = $this->dto->getId('new_bitrixId');

        $this->assertSame('new_bitrixId_val', $field);
    }
}
