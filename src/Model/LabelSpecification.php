<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The label specification info.
 */
class LabelSpecification extends AbstractModel
{
    /**
     * The format of the label. Enum of PNG only for now.
     *
     * @var string
     */
    public $labelFormat = null;

    /**
     * The label stock size specification in length and height. Enum of 4x6 only for
     * now.
     *
     * @var string
     */
    public $labelStockSize = null;
}
