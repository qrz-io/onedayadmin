# Qrz_OneDayAdmin
Magento module that allows you to grant 1 day admin access to some accounts.

# How it works
A cron runs every day at midnight, and deactivates the admin users that use the selected roles. Nothing else is changed for the admin users, so you can simply activate them again to grant 1 more day of access.

The module creates a new admin role, "OneDayAdmin", with all permissions (you can of course edit them afterwards). It also gives you the ability to pick which roles should be of One day access only. 

# How to get

This module is available through the Firegento Magento Module Composer Repository. To install, add http://packages.firegento.com/ to your composer.json repositories and require this module. I also recommend installing the [Magento composer installer](https://github.com/magento-hackathon/magento-composer-installer).

Add the following to your composer.json:


```
{
    ...
    "repositories": [
        {
            "type": "composer",
            "url": "http://packages.firegento.com"
        }
    ],
    "require" : {
        ...
        "qrz-io/onedayadmin":                             "~1.0",
        "magento-hackathon/magento-composer-installer":   "~2.0"
    },
    "extra": {
        "magento-root-dir": "./"
    }
    ...
}
```
