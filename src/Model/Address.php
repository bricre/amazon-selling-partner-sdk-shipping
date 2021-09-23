<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The address.
 */
class Address extends AbstractModel
{
    /**
     * The name of the person, business or institution at that address.
     *
     * @var string
     */
    public $name = null;

    /**
     * First line of that address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine3 = null;

    /**
     * @var \Amz\Shipping\Model\StateOrRegion
     */
    public $stateOrRegion = null;

    /**
     * @var \Amz\Shipping\Model\City
     */
    public $city = null;

    /**
     * @var \Amz\Shipping\Model\CountryCode
     */
    public $countryCode = null;

    /**
     * @var \Amz\Shipping\Model\PostalCode
     */
    public $postalCode = null;

    /**
     * The email address of the contact associated with the address.
     *
     * @var string
     */
    public $email = null;

    /**
     * The email cc addresses of the contact associated with the address.
     *
     * @var string[]|
     */
    public $copyEmails = null;

    /**
     * The phone number of the person, business or institution located at that address.
     *
     * @var string
     */
    public $phoneNumber = null;
}
