<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A set of measurements for a three-dimensional object.
 */
class Dimensions extends AbstractModel
{
    /**
     * The length of the container.
     *
     * @var float
     */
    public $length = null;

    /**
     * The width of the container.
     *
     * @var float
     */
    public $width = null;

    /**
     * The height of the container.
     *
     * @var float
     */
    public $height = null;

    /**
     * The unit of these measurements.
     *
     * @var string
     */
    public $unit = null;
}
