<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Container in the shipment.
 */
class Container extends AbstractModel
{
    /**
     * The type of physical container being used. (always 'PACKAGE').
     *
     * @var string
     */
    public $containerType = null;

    /**
     * @var \Amz\Shipping\Model\ContainerReferenceId
     */
    public $containerReferenceId = null;

    /**
     * The total value of all items in the container.
     *
     * @var \Amz\Shipping\Model\Currency
     */
    public $value = null;

    /**
     * The length, width, height, and weight of the container.
     *
     * @var \Amz\Shipping\Model\Dimensions
     */
    public $dimensions = null;

    /**
     * A list of the items in the container.
     *
     * @var \Amz\Shipping\Model\ContainerItem[]
     */
    public $items = null;

    /**
     * The weight of the container.
     *
     * @var \Amz\Shipping\Model\Weight
     */
    public $weight = null;
}
