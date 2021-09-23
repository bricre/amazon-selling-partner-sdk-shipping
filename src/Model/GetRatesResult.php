<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the getRates operation.
 */
class GetRatesResult extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\ServiceRateList
     */
    public $serviceRates = null;
}
