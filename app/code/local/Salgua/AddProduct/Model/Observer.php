<?php
/**
 * AddProduct Module
 * 
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * info@salgua.com so we can send you a copy immediately.
 *  
 */
class Salgua_AddProduct_Model_Observer
{
    public function __construct()
    {
    }
    public function applyCoupon(Varien_Event_Observer $observer){
    $coupon_code = trim(Mage::getSingleton("checkout/session")->getData("coupon_code"));
    if ($coupon_code != ''){
        Mage::getSingleton('checkout/cart')->getQuote()->setCouponCode($coupon_code)->save();
    }
}
}