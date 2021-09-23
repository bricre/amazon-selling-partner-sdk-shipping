<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The location where the person, business or institution is located.
 */
class Location extends AbstractModel
{
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
}
