<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * An identifier for the container. This must be unique within all the containers
 * in the same shipment.
 */
class ContainerReferenceId extends AbstractModel
{
    protected $isRawObject = true;
}
