<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The specific rate purchased for the shipment, or null if unpurchased.
 */
class AcceptedRate extends AbstractModel
{
    /**
     * The total charge that will be billed for the rate.
     *
     * @var \Amz\Shipping\Model\Currency
     */
    public $totalCharge = null;

    /**
     * The weight that was used to calculate the totalCharge.
     *
     * @var \Amz\Shipping\Model\Weight
     */
    public $billedWeight = null;

    /**
     * @var \Amz\Shipping\Model\ServiceType
     */
    public $serviceType = null;

    /**
     * @var \Amz\Shipping\Model\ShippingPromiseSet
     */
    public $promise = null;
}
