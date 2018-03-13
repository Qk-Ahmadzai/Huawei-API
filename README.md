# Huawei-HiLink API
---------------

Here I try to grab all unread sms from Huawei E303 Dongle (Tested E303), maybe it work with other too, an PHP Class to control an UMTS Stick from Huawei with its HiLink Interface or grab data like sms. database class write unread sms to MYSQL database.


## Class 
- hilink.class.php
- smsreceiver.php
- database.class.php
- crud.class.php
- usedb.php

## Script 
 - hilink.class.php Interface that to Huawei hiLink lot's of method like.
      - getSmsInbox()
      - getSmsOutbox()
      - getSmsDraft()
      - getUnreadSms()
      - online()
      - getTrafficStatistic()
      - printTraffic()
      - getConnectionStatus()
      - getConnectionType 2G, 3G, 3G+
      - getSimStatus
      - etc

  - smsreceiver.class.php 
      - auto reload in every 3 second to grab new data (unread sms) from dongle 
    
  - database.class.php
      - private $_host = "localhost";
	  - private $_username = "root";
	  - private $_password = "";
	  - private $_database = "sms";

  - crud.class.php
       - crud class have method for Create, Read, Update, Delete.
    


## Environment
- PHP >= 5.4.4
- [Huawei E303](http://www.huaweidevices.de/e303) with HiLink Interface
- Local Server like [WAMP SERVER](http://www.wampserver.com/en/) or [XAMPP SERVER](https://www.apachefriends.org/index.html)
- HiLink Interface  [Bitbucket | Issues](https://bitbucket.org/BlackyPanther/huawei-hilink/issues)

## Bugs / Issues
Please report bugs to [Bitbucket | Issues](https://bitbucket.org/BlackyPanther/huawei-hilink/issues)

## Known Bugs (not fixed in near future)
- Missing command to switch modes
- No possibility to access in alternate mode

## Sources
- [Programming and Installing Huawei HiLink E3131 under Linux](http://chaddyhv.wordpress.com/2012/08/13/programming-and-installing-huawei-hilink-e3131-under-linux/)
- [Raspberry Pi - via UMTS ins Netz](http://www.henrykoch.de/raspberry-pi-via-umts-ins-netz)
- Some lonely nights programming

-----

### LICENSE
HiLink Interface  [Bitbucket | Issues](https://bitbucket.org/BlackyPanther/huawei-hilink/issues)
My scripts are published under [MIT License](https://am-wd.de/?p=about#license).
