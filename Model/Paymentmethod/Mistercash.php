<?php

namespace Paynl\Payment\Model\Paymentmethod;

class Mistercash extends PaymentMethod
{
    protected $_code = 'paynl_payment_mistercash';

    /**
     * @return interger
     */
    protected function getDefaultPaymentOptionId()
    {
        return 436;
    }
}
