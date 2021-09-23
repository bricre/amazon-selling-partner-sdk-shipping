<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the purchaseShipment operation.
 */
class PurchaseShipmentResult extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\ShipmentId
     */
    public $shipmentId = null;

    /**
     * @var \Amz\Shipping\Model\ServiceRate
     */
    public $serviceRate = null;

    /**
     * @var \Amz\Shipping\Model\LabelResultList
     */
    public $labelResults = null;
}
