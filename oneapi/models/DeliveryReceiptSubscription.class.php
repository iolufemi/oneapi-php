<?php

// Example:
// {"deliveryReceiptSubscription":{"callbackReference":{"callbackData":null,"notifyURL":"http://192.168.10.111/save_requests"},"resourceURL":"http://api.parseco.com/1/smsmessaging/outbound/subscriptions/q1id6ksfc8"}}

class DeliveryReceiptSubscription extends AbstractObject {

    public $subscriptionId;

    public function __construct() {
        parent::__construct();
    }

}

Models::register(
        'DeliveryReceiptSubscription',
        new SubFieldConversionRule('subscriptionId', 'deliveryReceiptSubscription.resourceURL')
);