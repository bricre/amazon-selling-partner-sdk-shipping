<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The label details of the container.
 */
class Label extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\LabelStream
     */
    public $labelStream = null;

    /**
     * @var \Amz\Shipping\Model\LabelSpecification
     */
    public $labelSpecification = null;
}
