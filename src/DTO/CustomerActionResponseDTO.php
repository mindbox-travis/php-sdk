<?php


namespace Mindbox\DTO;

/**
 * @property array                                   ids
 * @property ActionTemplateResponseDTO               actionTemplate
 * @property string                                  dateTimeUtc
 * @property PointOfContactResponseDTO               pointOfContact
 * @property CustomerResponseDTO                     customer
 * @property CustomerBalanceChangeResponseCollection customerBalanceChanges
 * @property OrderResponseDTO                        order
 **/
class CustomerActionResponseDTO extends DTO
{
    use IdentityDTO;

    /**
     * @var string DTO name.
     */
    protected static $xmlName = 'customerAction';

    /**
     * @var array Maps object key names to DTO types.
     */
    protected static $DTOMap = [
        'actionTemplate'         => ActionTemplateResponseDTO::class,
        'pointOfContact'         => PointOfContactResponseDTO::class,
        'customer'               => CustomerResponseDTO::class,
        'customerBalanceChanges' => CustomerBalanceChangeResponseCollection::class,
        'order'                  => OrderResponseDTO::class,
    ];

    /**
     * @return ActionTemplateResponseDTO
     */
    public function getActionTemplate()
    {
        return $this->getField('actionTemplate');
    }

    /**
     * @return string
     */
    public function getDateTimeUtc()
    {
        return $this->getField('dateTimeUtc');
    }

    /**
     * @return PointOfContactResponseDTO
     */
    public function getPointOfContact()
    {
        return $this->getField('pointOfContact');
    }

    /**
     * @return CustomerResponseDTO
     */
    public function getCustomer()
    {
        return $this->getField('customer');
    }

    /**
     * @return CustomerBalanceChangeResponseCollection
     */
    public function getCustomerBalanceChanges()
    {
        return $this->getField('customerBalanceChanges');
    }

    /**
     * @return OrderResponseDTO
     */
    public function getOrder()
    {
        return $this->getField('order');
    }
}
