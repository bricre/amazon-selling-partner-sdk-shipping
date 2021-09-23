<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the retrieveShippingLabel operation.
 */
class RetrieveShippingLabelResponse extends AbstractModel
{
    /**
     * The payload for retrieveShippingLabel operation.
     *
     * @var \Amz\Shipping\Model\RetrieveShippingLabelResult
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
