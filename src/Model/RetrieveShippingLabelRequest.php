<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the retrieveShippingLabel operation.
 */
class RetrieveShippingLabelRequest extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\LabelSpecification
     */
    public $labelSpecification = null;
}
