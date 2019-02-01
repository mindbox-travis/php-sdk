<?php

namespace Mindbox\Tests\DTO;

use Mindbox\DTO\CustomerRequestDTO;
use Mindbox\DTO\SubscriptionRequestCollection;
use Mindbox\DTO\SubscriptionRequestDTO;

/**
 * Class CustomerRequestDTOTest
 *
 * @package Mindbox\Tests\DTO
 */
class CustomerRequestDTOTest extends CustomerIdentityRequestDTOTest
{
    /**
     * @var CustomerRequestDTO $dto
     */
    public $dto;

    /**
     * @var string
     */
    protected $dtoClassName = CustomerRequestDTO::class;

    /**
     *
     */
    public function asJsonFieldsProvider()
    {
        return array_merge(parent::asJsonFieldsProvider(), [
            [
                [
                    'ids'  => [
                        'someField'  => 'someValue',
                        'otherField' => 'otherValue',
                    ],
                    'area' => [
                        'someField' => 'someValue',
                    ],
                ],
                '{"ids":{"someField":"someValue","otherField":"otherValue"},"area":{"someField":"someValue"}}',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                        [
                            'someField2' => 'someValue2',
                        ],
                        CustomerRequestDTO::XML_ITEM_NAME_INDEX => 'subscription',
                    ],
                ],
                '{"subscriptions":[{"someField":"someValue"},{"someField2":"someValue2"}]}',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                        CustomerRequestDTO::XML_ITEM_NAME_INDEX => 'subscription',
                    ],
                ],
                '{"subscriptions":[{"someField":"someValue"}]}',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                        [
                            'someField2' => 'someValue2',
                        ],
                    ],
                ],
                '{"subscriptions":[{"someField":"someValue"},{"someField2":"someValue2"}]}',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                    ],
                ],
                '{"subscriptions":[{"someField":"someValue"}]}',
            ],
            [
                [
                    'customFields' => [
                        'someField'      => 'someValue',
                        'someArrayField' => [
                            'someValue',
                            'someValue2',
                            CustomerRequestDTO::XML_ITEM_NAME_INDEX => 'value',
                        ],
                    ],
                ],
                '{"customFields":{"someField":"someValue","someArrayField":["someValue","someValue2"]}}',
            ],
            [
                [
                    'customFields' => [
                        'someField'      => 'someValue',
                        'someArrayField' => [
                            'someValue',
                            'someValue2',
                            CustomerRequestDTO::XML_ITEM_NAME_INDEX => 'value',
                        ],
                    ],
                ],
                '{"customFields":{"someField":"someValue","someArrayField":["someValue","someValue2"]}}',
            ],
            [
                [
                    'customFields' => [
                        'someField' => 'someValue',
                    ],
                ],
                '{"customFields":{"someField":"someValue"}}',
            ],
        ]);
    }

    /**
     *
     */
    public function asXmlFieldsProvider()
    {
        return array_merge(parent::asXmlFieldsProvider(), [
            [
                [
                    'ids'  => [
                        'someField'  => 'someValue',
                        'otherField' => 'otherValue',
                    ],
                    'area' => [
                        'someField' => 'someValue',
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><ids><someField>someValue</someField><otherField>otherValue</otherField></ids><area><someField>someValue</someField></area></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                        [
                            'someField2' => 'someValue2',
                        ],
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><subscriptions><subscription><someField>someValue</someField></subscription><subscription><someField2>someValue2</someField2></subscription></subscriptions></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><subscriptions><subscription><someField>someValue</someField></subscription></subscriptions></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'subscriptions' => [
                        'subscription' => [
                            [
                                'someField' => 'someValue',
                            ],
                        ],
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><subscriptions><subscription><someField>someValue</someField></subscription></subscriptions></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                        [
                            'someField2' => 'someValue2',
                        ],
                        CustomerRequestDTO::XML_ITEM_NAME_INDEX => 'subscription',
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><subscriptions><subscription><someField>someValue</someField></subscription><subscription><someField2>someValue2</someField2></subscription></subscriptions></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'subscriptions' => [
                        [
                            'someField' => 'someValue',
                        ],
                        CustomerRequestDTO::XML_ITEM_NAME_INDEX => 'subscription',
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><subscriptions><subscription><someField>someValue</someField></subscription></subscriptions></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'customFields' => [
                        'someField'      => 'someValue',
                        'someArrayField' => [
                            'someValue',
                            'someValue2',
                        ],
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><customFields><someField>someValue</someField><someArrayField><value>someValue</value><value>someValue2</value></someArrayField></customFields></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'customFields' => [
                        'someField'      => 'someValue',
                        'someArrayField' => [
                            'someValue',
                            'someValue2',
                            CustomerRequestDTO::XML_ITEM_NAME_INDEX => 'value',
                        ],
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><customFields><someField>someValue</someField><someArrayField><value>someValue</value><value>someValue2</value></someArrayField></customFields></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
            [
                [
                    'customFields' => [
                        'someField' => 'someValue',
                    ],
                ],
                '<?xml version="1.0" encoding="utf-8"?>
<' . ($this->dtoClassName)::getXmlName() . '><customFields><someField>someValue</someField></customFields></' . ($this->dtoClassName)::getXmlName() . '>
',
            ],
        ]);
    }

    public function setUp()
    {
        $data      = [
            'ids'                  => ['someField' => 'someValue'],
            'email'                => 'some_email',
            'mobilePhone'          => 'some_mobilePhone',
            'lastName'             => 'some_lastName',
            'firstName'            => 'some_firstName',
            'middleName'           => 'some_middleName',
            'fullName'             => 'some_fullName',
            'birthDate'            => 'some_birthDate',
            'password'             => 'some_password',
            'area'                 => ['someField' => 'someValue'],
            'subscriptions'        => [['someField' => 'someValue'], ['someField2' => 'someValue2']],
            'customFields'         => ['someField' => 'someValue'],
            'authenticationTicket' => 'some_authenticationTicket',
        ];
        $this->dto = new CustomerRequestDTO($data);
    }

    public function testGetEmail()
    {
        $field = $this->dto->getEmail();

        $this->assertSame('some_email', $field);
    }

    public function testSetEmail()
    {
        $this->dto->setEmail('new_email');
        $field = $this->dto->getEmail();

        $this->assertSame('new_email', $field);
    }

    public function testGetMobilePhone()
    {
        $field = $this->dto->getMobilePhone();

        $this->assertSame('some_mobilePhone', $field);
    }

    public function testSetMobilePhone()
    {
        $this->dto->setMobilePhone('new_mobilePhone');
        $field = $this->dto->getMobilePhone();

        $this->assertSame('new_mobilePhone', $field);
    }

    public function testGetLastName()
    {
        $field = $this->dto->getLastName();

        $this->assertSame('some_lastName', $field);
    }

    public function testSetLastName()
    {
        $this->dto->setLastName('new_lastName');
        $field = $this->dto->getLastName();

        $this->assertSame('new_lastName', $field);
    }

    public function testGetFirstName()
    {
        $field = $this->dto->getFirstName();

        $this->assertSame('some_firstName', $field);
    }

    public function testSetFirstName()
    {
        $this->dto->setFirstName('new_firstName');
        $field = $this->dto->getFirstName();

        $this->assertSame('new_firstName', $field);
    }

    public function testGetMiddleName()
    {
        $field = $this->dto->getMiddleName();

        $this->assertSame('some_middleName', $field);
    }

    public function testSetMiddleName()
    {
        $this->dto->setMiddleName('new_middleName');
        $field = $this->dto->getMiddleName();

        $this->assertSame('new_middleName', $field);
    }

    public function testGetFullName()
    {
        $field = $this->dto->getFullName();

        $this->assertSame('some_fullName', $field);
    }

    public function testSetFullName()
    {
        $this->dto->setFullName('new_fullName');
        $field = $this->dto->getFullName();

        $this->assertSame('new_fullName', $field);
    }

    public function testGetBirthDate()
    {
        $field = $this->dto->getBirthDate();

        $this->assertSame('some_birthDate', $field);
    }

    public function testSetBirthDate()
    {
        $this->dto->setBirthDate('new_birthDate');
        $field = $this->dto->getBirthDate();

        $this->assertSame('new_birthDate', $field);
    }

    public function testGetPassword()
    {
        $field = $this->dto->getPassword();

        $this->assertSame('some_password', $field);
    }

    public function testSetPassword()
    {
        $this->dto->setPassword('new_password');
        $field = $this->dto->getPassword();

        $this->assertSame('new_password', $field);
    }

    public function testGetArea()
    {
        $field = $this->dto->getArea();

        $this->assertInstanceOf(\Mindbox\DTO\AreaRequestDTO::class, $field);
    }

    public function testSetArea()
    {
        $this->dto->setArea(['name' => 'someName']);
        $field = $this->dto->getArea();

        $this->assertInstanceOf(\Mindbox\DTO\AreaRequestDTO::class, $field);
        $this->assertSame('someName', $field->getName());
    }

    public function testGetSubscriptions()
    {
        $field = $this->dto->getSubscriptions();

        $this->assertInstanceOf(\Mindbox\DTO\SubscriptionRequestCollection::class, $field);
    }

    public function testSetSubscriptions()
    {
        $this->dto->setSubscriptions(['subscription' => ['topic' => 'some_topic']]);
        $field = $this->dto->getSubscriptions();

        $this->assertInstanceOf(\Mindbox\DTO\SubscriptionRequestCollection::class, $field);

        $this->dto->setSubscriptions([new \Mindbox\DTO\SubscriptionRequestDTO()]);
        $field = $this->dto->getSubscriptions();

        $this->assertInstanceOf(\Mindbox\DTO\SubscriptionRequestCollection::class, $field);
    }

    public function testGetCustomFields()
    {
        $field = $this->dto->getCustomFields();

        $this->assertSame(['someField' => 'someValue'], $field);
    }

    public function testSetCustomFields()
    {
        $setField = ['customField' => ['topic' => 'some_topic']];
        $this->dto->setCustomFields($setField);
        $field = $this->dto->getCustomFields();

        $this->assertSame($setField, $field);
    }

    public function testGetCustomField()
    {
        $field = $this->dto->getCustomField('someField');

        $this->assertSame('someValue', $field);
    }

    public function testSetCustomField()
    {
        $this->dto->setCustomField('customField', ['some_topic']);
        $field = $this->dto->getCustomField('customField');

        $this->assertSame(['some_topic'], $field);
    }

    public function testGetAuthenticationTicket()
    {
        $field = $this->dto->getAuthenticationTicket();

        $this->assertSame('some_authenticationTicket', $field);
    }

    public function testSetAuthenticationTicket()
    {
        $this->dto->setAuthenticationTicket('new_authenticationTicket');
        $field = $this->dto->getAuthenticationTicket();

        $this->assertSame('new_authenticationTicket', $field);
    }

    public function testGetFieldsAsArrayByCollection()
    {
        $dto = new CustomerRequestDTO();
        $dto->setPassword('password1');
        $dto->setMiddleName('middleName1');

        $subscriptions = [];

        $subscription = new SubscriptionRequestDTO();
        $subscription->setPointOfContact('pointOfContact1');

        $subscriptions[] = $subscription;

        $subscription = new SubscriptionRequestDTO();
        $subscription->setPointOfContact('pointOfContact2');

        $subscriptions[] = $subscription;

        $subscriptionsCollection = new SubscriptionRequestCollection($subscriptions);

        $dto->setSubscriptions($subscriptionsCollection);

        $array = [
            'password'      => 'password1',
            'middleName'    => 'middleName1',
            'subscriptions' => [
                [
                    'pointOfContact' => 'pointOfContact1',
                ],
                [
                    'pointOfContact' => 'pointOfContact2',
                ],
            ],
        ];

        $this->assertSame($array, $dto->getFieldsAsArray());

        $array['subscriptions'][CustomerRequestDTO::XML_ITEM_NAME_INDEX] = 'subscription';

        $this->assertSame($array, $dto->getFieldsAsArray(false));
    }

    public function testGetFieldsAsArrayBySetField()
    {
        $dto = new CustomerRequestDTO();
        $dto->setField('password', 'password1');
        $dto->setField('middleName', 'middleName1');

        $subscriptions = [
            [
                'pointOfContact' => 'pointOfContact1',
            ],
            [
                'pointOfContact' => 'pointOfContact2',
            ],
        ];
        $dto->setField('subscriptions', $subscriptions);

        $array = [
            'password'      => 'password1',
            'middleName'    => 'middleName1',
            'subscriptions' => [
                [
                    'pointOfContact' => 'pointOfContact1',
                ],
                [
                    'pointOfContact' => 'pointOfContact2',
                ],
            ],
        ];

        $this->assertSame($array, $dto->getFieldsAsArray());

        $array['subscriptions'][CustomerRequestDTO::XML_ITEM_NAME_INDEX] = 'subscription';

        $this->assertSame($array, $dto->getFieldsAsArray(false));
    }

    public function testGetFieldsAsArrayByConstructor()
    {
        $array = [
            'password'      => 'password1',
            'middleName'    => 'middleName1',
            'subscriptions' => [
                [
                    'pointOfContact' => 'pointOfContact1',
                ],
                [
                    'pointOfContact' => 'pointOfContact2',
                ],
            ],
        ];

        $dto = new CustomerRequestDTO($array);

        $this->assertSame($array, $dto->getFieldsAsArray());

        $array['subscriptions'][CustomerRequestDTO::XML_ITEM_NAME_INDEX] = 'subscription';

        $this->assertSame($array, $dto->getFieldsAsArray(false));
    }

    public function testGetFieldsAsArrayWithoutCollection()
    {
        $dto = new CustomerRequestDTO();
        $dto->setPassword('password1');
        $dto->setMiddleName('middleName1');

        $subscriptions = [];

        $subscription = new SubscriptionRequestDTO();
        $subscription->setPointOfContact('pointOfContact1');

        $subscriptions[] = $subscription;

        $subscription = new SubscriptionRequestDTO();
        $subscription->setPointOfContact('pointOfContact2');

        $subscriptions[] = $subscription;

        $dto->setSubscriptions($subscriptions);

        $array = [
            'password'      => 'password1',
            'middleName'    => 'middleName1',
            'subscriptions' => [
                [
                    'pointOfContact' => 'pointOfContact1',
                ],
                [
                    'pointOfContact' => 'pointOfContact2',
                ],
            ],
        ];

        $this->assertSame($array, $dto->getFieldsAsArray());

        $array['subscriptions'][CustomerRequestDTO::XML_ITEM_NAME_INDEX] = 'subscription';

        $this->assertSame($array, $dto->getFieldsAsArray(false));
    }
}
