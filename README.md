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

#License
The MIT License (MIT)

Copyright (c) 2015 Cristian Quiroz

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

