<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An event of a shipment.
 */
class Event extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\EventCode
     */
    public $eventCode = null;

    /**
     * The date and time of an event for a shipment.
     *
     * @var string
     */
    public $eventTime = null;

    /**
     * @var \Amz\Shipping\Model\Location
     */
    public $location = null;
}
