<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The request schema for the purchaseLabels operation.
 */
class PurchaseLabelsRequest extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\RateId
     */
    public $rateId = null;

    /**
     * @var \Amz\Shipping\Model\LabelSpecification
     */
    public $labelSpecification = null;
}
