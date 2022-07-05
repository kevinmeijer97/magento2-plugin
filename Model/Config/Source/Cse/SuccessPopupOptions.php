<?php

namespace Paynl\Payment\Model\Config\Source\Cse;

use Paynl\Payment\Model\Config\Source\PayOption;

class SuccessPopupOptions extends PayOption
{
    public function __construct($options = array())
    {
        $options = [
            'inline' => __('Inline'),
            'popup_native' => __('Default Magento Popup'),
            'none' => __('Don\'t show popup, instant redirect'),
        ];
        parent::__construct($options);
    }
}
