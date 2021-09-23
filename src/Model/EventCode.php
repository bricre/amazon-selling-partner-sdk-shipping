<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The event code of a shipment, such as Departed, Received, and ReadyForReceive.
 */
class EventCode extends AbstractModel
{
    protected $isRawObject = true;
}
