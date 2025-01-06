<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/customer_user_access_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mutate Request for
 * [CustomerUserAccessService.MutateCustomerUserAccess][google.ads.googleads.v18.services.CustomerUserAccessService.MutateCustomerUserAccess].
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.MutateCustomerUserAccessRequest</code>
 */
class MutateCustomerUserAccessRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The operation to perform on the customer
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.CustomerUserAccessOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $operation = null;

    /**
     * @param string                                                         $customerId Required. The ID of the customer being modified.
     * @param \Google\Ads\GoogleAds\V18\Services\CustomerUserAccessOperation $operation  Required. The operation to perform on the customer
     *
     * @return \Google\Ads\GoogleAds\V18\Services\MutateCustomerUserAccessRequest
     *
     * @experimental
     */
    public static function build(string $customerId, \Google\Ads\GoogleAds\V18\Services\CustomerUserAccessOperation $operation): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setOperation($operation);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer being modified.
     *     @type \Google\Ads\GoogleAds\V18\Services\CustomerUserAccessOperation $operation
     *           Required. The operation to perform on the customer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\CustomerUserAccessService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The operation to perform on the customer
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.CustomerUserAccessOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V18\Services\CustomerUserAccessOperation|null
     */
    public function getOperation()
    {
        return $this->operation;
    }

    public function hasOperation()
    {
        return isset($this->operation);
    }

    public function clearOperation()
    {
        unset($this->operation);
    }

    /**
     * Required. The operation to perform on the customer
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.services.CustomerUserAccessOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V18\Services\CustomerUserAccessOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Services\CustomerUserAccessOperation::class);
        $this->operation = $var;

        return $this;
    }

}
