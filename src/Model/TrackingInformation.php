<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the getTrackingInformation operation.
 */
class TrackingInformation extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\TrackingId
     */
    public $trackingId = null;

    /**
     * @var \Amz\Shipping\Model\TrackingSummary
     */
    public $summary = null;

    /**
     * @var \Amz\Shipping\Model\PromisedDeliveryDate
     */
    public $promisedDeliveryDate = null;

    /**
     * @var \Amz\Shipping\Model\EventList
     */
    public $eventHistory = null;
}
