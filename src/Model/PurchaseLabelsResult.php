<?php

namespace Amz\Shipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload schema for the purchaseLabels operation.
 */
class PurchaseLabelsResult extends AbstractModel
{
    /**
     * @var \Amz\Shipping\Model\ShipmentId
     */
    public $shipmentId = null;

    /**
     * @var \Amz\Shipping\Model\ClientReferenceId
     */
    public $clientReferenceId = null;

    /**
     * @var \Amz\Shipping\Model\AcceptedRate
     */
    public $acceptedRate = null;

    /**
     * @var \Amz\Shipping\Model\LabelResultList
     */
    public $labelResults = null;
}
