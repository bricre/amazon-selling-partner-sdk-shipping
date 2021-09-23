<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the purchaseLabels operation.
 */
class PurchaseLabelsResponse extends AbstractModel
{
    /**
     * The payload for purchaseLabels operation.
     *
     * @var \Amz\Shipping\Model\PurchaseLabelsResult
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
