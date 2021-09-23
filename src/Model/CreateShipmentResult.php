<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the createShipment operation.
 */
class CreateShipmentResult extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\ShipmentId
     */
    public $shipmentId = null;

    /**
     * @var \Amz\Shipping\Model\RateList
     */
    public $eligibleRates = null;
}
