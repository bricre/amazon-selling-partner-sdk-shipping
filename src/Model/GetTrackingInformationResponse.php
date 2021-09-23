<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getTrackingInformation operation.
 */
class GetTrackingInformationResponse extends AbstractModel
{
    /**
     * The payload for getTrackingInformation operation.
     *
     * @var \Amz\Shipping\Model\TrackingInformation
     */
    public $payload = null;

    /**
     * Encountered errors for the operation.
     *
     * @var \Amz\Shipping\Model\ErrorList
     */
    public $errors = null;
}
