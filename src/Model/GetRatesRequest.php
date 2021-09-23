<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the getRates operation.
 */
class GetRatesRequest extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\Address
     */
    public $shipTo = null;

    /**
     * @var \Amz\Shipping\Model\Address
     */
    public $shipFrom = null;

    /**
     * @var \Amz\Shipping\Model\ServiceTypeList
     */
    public $serviceTypes = null;

    /**
     * The start date and time. This defaults to the current date and time.
     *
     * @var string
     */
    public $shipDate = null;

    /**
     * @var \Amz\Shipping\Model\ContainerSpecificationList
     */
    public $containerSpecifications = null;
}
