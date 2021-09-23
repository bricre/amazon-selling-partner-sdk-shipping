<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getAccount operation.
 */
class GetAccountResponse extends AbstractModel
{
    /**
     * The payload for getAccount operation.
     *
     * @var \Amz\Shipping\Model\Account
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
