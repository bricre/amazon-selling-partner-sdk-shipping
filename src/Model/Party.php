<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The account related with the shipment.
 */
class Party extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\AccountId
     */
    public $accountId = null;
}
