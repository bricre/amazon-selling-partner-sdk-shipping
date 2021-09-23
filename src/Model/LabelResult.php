<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Label details including label stream, format, size.
 */
class LabelResult extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\ContainerReferenceId
     */
    public $containerReferenceId = null;

    /**
     * The tracking identifier assigned to the container.
     *
     * @var string
     */
    public $trackingId = null;

    /**
     * @var \Amz\Shipping\Model\Label
     */
    public $label = null;
}
