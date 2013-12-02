SalguaMagentoAddProduct
=======================

A simply Magento module to add products to the cart using querystring without the form_key parameter

Add Product by url Magento Extension
------------------------------------

With this extension you can add a product to your cart using querystring, without use the "form_key" parameter, mandatory starting from Magento 1.8. 
In addition you can add and apply an optional coupon code.

Installation
------------

Copy the whole content of this module in your Magento installation directory. 

IMPORTANT: you have to merge the content, not override!


Usage
-----

You can add a product to the cart simply using this url syntax:
http://yourshop.com/urlcheckout/add?product=6

where "6" is the product ID

if you want also to add and apply a coupon code, the syntax is

http://yourshop.com/urlcheckout/add?product=6&coupon_code=XXXXXX

where "XXXXXX" is your coupon code


