<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The account related data.
 */
class Account extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\AccountId
     */
    public $accountId = null;
}
