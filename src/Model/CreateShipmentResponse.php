<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the createShipment operation.
 */
class CreateShipmentResponse extends AbstractModel
{
    /**
     * The payload for createShipment operation.
     *
     * @var \Amz\Shipping\Model\CreateShipmentResult
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
