<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The weight.
 */
class Weight extends AbstractModel
{
    /**
     * The unit of measurement.
     *
     * @var string
     */
    public $unit = null;

    /**
     * The measurement value.
     *
     * @var float
     */
    public $value = null;
}
