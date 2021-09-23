<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the purchaseShipment operation.
 */
class PurchaseShipmentResponse extends AbstractModel
{
    /**
     * The payload for purchaseShipment operation.
     *
     * @var \Amz\Shipping\Model\PurchaseShipmentResult
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
