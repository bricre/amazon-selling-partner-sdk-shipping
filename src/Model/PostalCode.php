<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The postal code of that address. It contains a series of letters or digits or
 * both, sometimes including spaces or punctuation.
 */
class PostalCode extends AbstractModel
{
    protected $isRawObject = true;
}
