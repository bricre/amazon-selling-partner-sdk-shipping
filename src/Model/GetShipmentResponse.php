<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getShipment operation.
 */
class GetShipmentResponse extends AbstractModel
{
    /**
     * The payload for getShipment operation.
     *
     * @var \Amz\Shipping\Model\Shipment
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
