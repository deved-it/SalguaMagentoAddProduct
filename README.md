SalguaMagentoAddProduct
=======================

A simply Magento module to add products to the cart using querystring without the form_key parameter

Add Product by url Magento Extension
------------------------------------

With this extension you can add a product to your cart using querystring, without use the "form_key" parameter, mandatory starting from Magento 1.8. 
In addition you can add and apply an optional coupon code.

Installation
------------

1. Copy the whole content of this module in your Magento installation directory. IMPORTANT: you have to merge the content, not override!
2. Clear cache in /var/cache/
3. Check for module in your admin panel under System -> Configuration -> Advanced -> Disable Modules Output.  If it shows up in this list, you're all set.

Alternatively you can use modman to install this extension.


Usage
-----

You can add a product to the cart at the following URL:

> http://yourshop.com/urlcheckout/add

The only required parameter is the `product` parameter which represents a product id:
> http://yourshop.com/urlcheckout/add?product=6

Optionally you can add a quantity with the `qty` parameter:
> http://yourshop.com/urlcheckout/add?product=6&qty=2

Optionally you can add multiple products with multiple quantities by separating them with a `|`:
> http://yourshop.com/urlcheckout/add?product=6|10&qty=1|2

Optionally you can apply a coupon code with the `coupon_code` parameter:
> http://yourshop.com/urlcheckout/add?product=6&coupon_code=codehere


