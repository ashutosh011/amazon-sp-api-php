<?php
/**
 * ShipmentType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / Ashutosh
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace Ashutosh\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * ShipmentType Class Doc Comment.
 *

 * @description Specifies the carrier shipment type in a putTransportDetails request.
 *
 * @author   Stefan Neuhaus / Ashutosh
 */
class ShipmentType
{
    /**
     * Possible values of this enum.
     */
    const SP = 'SP';
    const LTL = 'LTL';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SP,
self::LTL,        ];
    }
}
