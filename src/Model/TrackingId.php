<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The tracking id generated to each shipment. It contains a series of letters or
 * digits or both.
 */
class TrackingId extends AbstractModel
{
    protected $isRawObject = true;
}
