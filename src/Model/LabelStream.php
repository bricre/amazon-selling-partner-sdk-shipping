<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Contains binary image data encoded as a base-64 string.
 */
class LabelStream extends AbstractModel
{
    protected $isRawObject = true;
}
