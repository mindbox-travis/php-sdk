<?php

namespace Mindbox\Tests\Helpers;

use Mindbox\DTO\OperationDTO;
use Mindbox\Helpers\ProductListHelper;

/**
 * Class ProductListHelperTest
 *
 * @package Mindbox\Tests\Helpers
 */
class ProductListHelperTest extends AbstractMindboxHelperTest
{
    /**
     * @var ProductListHelper $orderHelper
     */
    protected $helper;

    /**
     * @var \Mindbox\Clients\AbstractMindboxClient|\PHPUnit\Framework\MockObject\MockObject $mindboxClientStub
     */
    protected $mindboxClientStub;

    /**
     * @var \Mindbox\MindboxResponse|\PHPUnit\Framework\MockObject\MockObject $mindboxResponseStub
     */
    protected $mindboxResponseStub;

    public function setUp()
    {
        $this->mindboxResponseStub = $this->createMock(\Mindbox\MindboxResponse::class);

        $this->mindboxClientStub = $this->getMockBuilder(\Mindbox\Clients\AbstractMindboxClient::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->helper = new ProductListHelper($this->mindboxClientStub);
    }

    public function testRemoveFromCart()
    {
        $dto           = new \Mindbox\DTO\RemoveProductFromListRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operation = new OperationDTO();
        $operation->setRemoveProductFromList($dto);

        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operation, '', [], false, $addDeviceUUID);

        $this->helper->removeFromCart($dto, $operationName, $addDeviceUUID);
    }

    public function testAddToCart()
    {
        $dto           = new \Mindbox\DTO\AddProductToListRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operation = new OperationDTO();
        $operation->setAddProductToList($dto);

        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operation, '', [], false, $addDeviceUUID);

        $this->helper->addToCart($dto, $operationName, $addDeviceUUID);
    }

    public function testSetProductCount()
    {
        $dto           = new \Mindbox\DTO\SetProductCountInListRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operation = new OperationDTO();
        $operation->setSetProductCountInList($dto);

        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operation, '', [], false, $addDeviceUUID);

        $this->helper->setProductCount($dto, $operationName, $addDeviceUUID);
    }

    public function testSetProductList()
    {
        $dto           = new \Mindbox\DTO\ProductListItemRequestCollection();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operation = new OperationDTO();
        $operation->setProductList($dto);

        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operation, '', [], false, $addDeviceUUID);

        $this->helper->setProductList($dto, $operationName, null, $addDeviceUUID);
    }

    public function testSetProductListWithCustomer()
    {
        $dto           = new \Mindbox\DTO\ProductListItemRequestCollection();
        $customer      = new \Mindbox\DTO\CustomerIdentityRequestDTO();
        $operationName = 'Website.OperationName';
        $addDeviceUUID = false;

        $operation = new OperationDTO();
        $operation->setProductList($dto);
        $operation->setCustomer($customer);

        $this->mindboxClientStub->expects($this->once())
            ->method('prepareRequest')
            ->with('POST', $operationName, $operation, '', [], false, $addDeviceUUID);

        $this->helper->setProductList($dto, $operationName, $customer, $addDeviceUUID);
    }
}
