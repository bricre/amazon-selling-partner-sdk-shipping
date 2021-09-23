<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipment related data.
 */
class Shipment extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\ShipmentId
     */
    public $shipmentId = null;

    /**
     * @var \Amz\Shipping\Model\ClientReferenceId
     */
    public $clientReferenceId = null;

    /**
     * @var \Amz\Shipping\Model\Address
     */
    public $shipFrom = null;

    /**
     * @var \Amz\Shipping\Model\Address
     */
    public $shipTo = null;

    /**
     * @var \Amz\Shipping\Model\AcceptedRate
     */
    public $acceptedRate = null;

    /**
     * @var \Amz\Shipping\Model\Party
     */
    public $shipper = null;

    /**
     * @var \Amz\Shipping\Model\ContainerList
     */
    public $containers = null;
}
