<?php

namespace Amz\Shipping\Api;

use Amz\Shipping\Model\CancelShipmentResponse as CancelShipmentResponse;
use Amz\Shipping\Model\CreateShipmentRequest as CreateShipmentRequest;
use Amz\Shipping\Model\CreateShipmentResponse as CreateShipmentResponse;
use Amz\Shipping\Model\GetAccountResponse as GetAccountResponse;
use Amz\Shipping\Model\GetRatesRequest as GetRatesRequest;
use Amz\Shipping\Model\GetRatesResponse as GetRatesResponse;
use Amz\Shipping\Model\GetShipmentResponse as GetShipmentResponse;
use Amz\Shipping\Model\GetTrackingInformationResponse as GetTrackingInformationResponse;
use Amz\Shipping\Model\PurchaseLabelsRequest as PurchaseLabelsRequest;
use Amz\Shipping\Model\PurchaseLabelsResponse as PurchaseLabelsResponse;
use Amz\Shipping\Model\PurchaseShipmentRequest as PurchaseShipmentRequest;
use Amz\Shipping\Model\PurchaseShipmentResponse as PurchaseShipmentResponse;
use Amz\Shipping\Model\RetrieveShippingLabelRequest as RetrieveShippingLabelRequest;
use Amz\Shipping\Model\RetrieveShippingLabelResponse as RetrieveShippingLabelResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Shipping extends AbstractAPI
{
    /**
     * Create a new shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param CreateShipmentRequest $Model Create a new shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return CreateShipmentResponse
     */
    public function createShipment(CreateShipmentRequest $Model): CreateShipmentResponse
    {
        return $this->client->request('createShipment', 'POST', 'shipping/v1/shipments',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Return the entire shipment object for the shipmentId.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId
     *
     * @return GetShipmentResponse
     */
    public function getShipment($shipmentId): GetShipmentResponse
    {
        return $this->client->request('getShipment', 'GET', "shipping/v1/shipments/{$shipmentId}",
            [
            ]
        );
    }

    /**
     * Cancel a shipment by the given shipmentId.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId
     *
     * @return CancelShipmentResponse
     */
    public function cancelShipment($shipmentId): CancelShipmentResponse
    {
        return $this->client->request('cancelShipment', 'POST', "shipping/v1/shipments/{$shipmentId}/cancel",
            [
            ]
        );
    }

    /**
     * Purchase shipping labels based on a given rate.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId
     * @param PurchaseLabelsRequest $Model Purchase shipping labels based on a given
     *                                     rate.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return PurchaseLabelsResponse
     */
    public function purchaseLabels($shipmentId, PurchaseLabelsRequest $Model): PurchaseLabelsResponse
    {
        return $this->client->request('purchaseLabels', 'POST', "shipping/v1/shipments/{$shipmentId}/purchaseLabels",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Retrieve shipping label based on the shipment id and tracking id.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $shipmentId
     * @param $trackingId
     * @param RetrieveShippingLabelRequest $Model Retrieve shipping label based on the
     *                                            shipment id and tracking id.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return RetrieveShippingLabelResponse
     */
    public function retrieveLabel($shipmentId, $trackingId, RetrieveShippingLabelRequest $Model): RetrieveShippingLabelResponse
    {
        return $this->client->request('retrieveShippingLabel', 'POST', "shipping/v1/shipments/{$shipmentId}/containers/{$trackingId}/label",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Purchase shipping labels.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param PurchaseShipmentRequest $Model Purchase shipping labels.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return PurchaseShipmentResponse
     */
    public function purchaseShipment(PurchaseShipmentRequest $Model): PurchaseShipmentResponse
    {
        return $this->client->request('purchaseShipment', 'POST', 'shipping/v1/purchaseShipment',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Get service rates.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param GetRatesRequest $Model Get service rates.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetRatesResponse
     */
    public function getRates(GetRatesRequest $Model): GetRatesResponse
    {
        return $this->client->request('getRates', 'POST', 'shipping/v1/rates',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Verify if the current account is valid.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 15 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return GetAccountResponse
     */
    public function getAccount(): GetAccountResponse
    {
        return $this->client->request('getAccount', 'GET', 'shipping/v1/account',
            [
            ]
        );
    }

    /**
     * Return the tracking information of a shipment.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $trackingId
     *
     * @return GetTrackingInformationResponse
     */
    public function getTrackingInformation($trackingId): GetTrackingInformationResponse
    {
        return $this->client->request('getTrackingInformation', 'GET', "shipping/v1/tracking/{$trackingId}",
            [
            ]
        );
    }
}
