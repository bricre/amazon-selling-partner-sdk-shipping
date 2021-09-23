<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Item in the container.
 */
class ContainerItem extends AbstractModel
{
    /**
     * The quantity of the items of this type in the container.
     *
     * @var float
     */
    public $quantity = null;

    /**
     * The unit price of an item of this type (the total value of this item type in the
     * container is unitPrice * quantity).
     *
     * @var \Amz\Shipping\Model\Currency
     */
    public $unitPrice = null;

    /**
     * The unit weight of an item of this type (the total weight of this item type in
     * the container is unitWeight * quantity).
     *
     * @var \Amz\Shipping\Model\Weight
     */
    public $unitWeight = null;

    /**
     * A descriptive title of the item.
     *
     * @var string
     */
    public $title = null;
}
