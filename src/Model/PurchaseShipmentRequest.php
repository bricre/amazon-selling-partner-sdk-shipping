<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the purchaseShipment operation.
 */
class PurchaseShipmentRequest extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\ClientReferenceId
     */
    public $clientReferenceId = null;

    /**
     * @var \Amz\Shipping\Model\Address
     */
    public $shipTo = null;

    /**
     * @var \Amz\Shipping\Model\Address
     */
    public $shipFrom = null;

    /**
     * The start date and time. This defaults to the current date and time.
     *
     * @var string
     */
    public $shipDate = null;

    /**
     * @var \Amz\Shipping\Model\ServiceType
     */
    public $serviceType = null;

    /**
     * @var \Amz\Shipping\Model\ContainerList
     */
    public $containers = null;

    /**
     * @var \Amz\Shipping\Model\LabelSpecification
     */
    public $labelSpecification = null;
}
