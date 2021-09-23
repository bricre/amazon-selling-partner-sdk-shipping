<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The time range.
 */
class TimeRange extends AbstractModel
{
    /**
     * The start date and time. This defaults to the current date and time.
     *
     * @var string
     */
    public $start = null;

    /**
     * The end date and time. This must come after the value of start. This defaults to
     * the next business day from the start.
     *
     * @var string
     */
    public $end = null;
}
