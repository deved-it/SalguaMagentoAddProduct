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
 
 class Salgua_AddProduct_AddController extends Mage_Core_Controller_Front_Action {
     public function indexAction () {
         $coupon_code = $this->getRequest()->getParam('coupon_code'); //to automatically apply a coupon code
         if ($coupon_code != '') 
            {
                Mage::getSingleton("checkout/session")->setData("coupon_code",$coupon_code);
                Mage::getSingleton('checkout/cart')->getQuote()->setCouponCode($coupon_code)->save();
                Mage::getSingleton('core/session')->addSuccess($this->__('Coupon was automatically applied'));
            }
         $product_id = $this->getRequest()->getParam('product');
            $qty = $this->getRequest()->getParam('qty');  //used if your qty is not hard coded
            $cart = Mage::getModel('checkout/cart');
            $cart->init();
            if ($product_id == '') {
                $this->_redirect('/');
            }
            $productModel = Mage::getModel('catalog/product')->load($product_id);
            if (TRUE) {
                try
                {
                   $cart->addProduct($productModel, array('qty' => '1'));  //qty is hard coded
                }
                catch (Exception $e) {
                   $this->_redirect('/');
                }
            }
            $cart->save();
            if ($this->getRequest()->isXmlHttpRequest()) {
               exit('1');
            }
            $this->_redirect('checkout/cart');
     }
 }
