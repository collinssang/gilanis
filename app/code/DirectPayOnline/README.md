Direct Pay Online payment gateway Magento extension
------------------------------------------------------

The DirectPayOnline_Plug provides payment gateway functionality for your Magento CE e-commerce store.

Install
---------
1. Go to Magento2 root folder

2. Enter following commands to enable module:

    ```bash
    php bin/magento module:enable DirectPayOnline_Plug --clear-static-content
    php bin/magento setup:upgrade
    php bin/magento setup:static-content:deploy
    ```

3. Enable and configure Direct Pay Online module in Magento Admin under Stores/Configuration/Payment Methods/Direct Pay Online


Changelog
---------
* 1.0.3
  * Place order bug fix
* 1.0.2
  * Added SSL version update and DPO url changed to v6
* 1.0.1
  * Code improvements
* 1.0.0
  * First public Magento Marketplace release
