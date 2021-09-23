<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the createShipment operation.
 */
class CreateShipmentRequest extends AbstractModel
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
     * @var \Amz\Shipping\Model\ContainerList
     */
    public $containers = null;
}
