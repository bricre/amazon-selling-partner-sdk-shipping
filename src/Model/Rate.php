<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The available rate that can be used to send the shipment.
 */
class Rate extends AbstractModel
{
    /**
     * An identifier for the rate.
     *
     * @var string
     */
    public $rateId = null;

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
     * The time after which the offering will expire.
     *
     * @var string
     */
    public $expirationTime = null;

    /**
     * @var \Amz\Shipping\Model\ServiceType
     */
    public $serviceType = null;

    /**
     * @var \Amz\Shipping\Model\ShippingPromiseSet
     */
    public $promise = null;
}
