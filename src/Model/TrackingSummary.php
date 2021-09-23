<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The tracking summary.
 */
class TrackingSummary extends AbstractModel
{
    /**
     * The derived status based on the events in the eventHistory.
     *
     * @var string
     */
    public $status = null;
}
