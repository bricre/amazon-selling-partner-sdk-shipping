<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The promised delivery time and pickup time.
 */
class ShippingPromiseSet extends AbstractModel
{
    /**
     * The time window in which the shipment will be delivered.
     *
     * @var \Amz\Shipping\Model\TimeRange
     */
    public $deliveryWindow = null;

    /**
     * The time window in which Amazon Shipping will pick up the shipment.
     *
     * @var \Amz\Shipping\Model\TimeRange
     */
    public $receiveWindow = null;
}
