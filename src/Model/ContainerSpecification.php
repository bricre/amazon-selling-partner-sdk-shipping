<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Container specification for checking the service rate.
 */
class ContainerSpecification extends AbstractModel
{
    /**
     * The length, width, and height of the container.
     *
     * @var \Amz\Shipping\Model\Dimensions
     */
    public $dimensions = null;

    /**
     * The weight of the container.
     *
     * @var \Amz\Shipping\Model\Weight
     */
    public $weight = null;
}
