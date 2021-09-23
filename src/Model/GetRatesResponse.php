<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getRates operation.
 */
class GetRatesResponse extends AbstractModel
{
    /**
     * The payload for getRates operation.
     *
     * @var \Amz\Shipping\Model\GetRatesResult
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
