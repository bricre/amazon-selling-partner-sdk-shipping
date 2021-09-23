<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The total value of all items in the container.
 */
class Currency extends AbstractModel
{
    /**
     * The amount of currency.
     *
     * @var float
     */
    public $value = null;

    /**
     * A 3-character currency code.
     *
     * @var string
     */
    public $unit = null;
}
