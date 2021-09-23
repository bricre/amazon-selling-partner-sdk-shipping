<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the retrieveShippingLabel operation.
 */
class RetrieveShippingLabelResult extends AbstractModel
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
