<?php
  $index->content .= 
           "<p>I upgraded PHP from 8.1 to 8.3 on Apache and Ubuntu with the following commands:</p>
<pre>
root@jaimemontoya:/var/www/jaimemontoya.com# cd /etc/php
root@jaimemontoya:/etc/php# pwd
/etc/php
root@jaimemontoya:/etc/php# ls -al
total 32
drwxr-xr-x   6 root root  4096 Aug 17 08:56 .
drwxr-xr-x 160 root root 12288 Jan 11 06:20 ..
drwxr-xr-x   6 root root  4096 Aug  7  2019 7.0
drwxr-xr-x   5 root root  4096 Aug  7  2019 7.3
drwxr-xr-x   5 root root  4096 Nov  6  2021 8.0
drwxr-xr-x   5 root root  4096 Aug 17 08:56 8.1
root@jaimemontoya:/etc/php# php -v
PHP 8.1.2-1ubuntu2.14 (cli) (built: Aug 18 2023 11:41:11) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.2, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.2-1ubuntu2.14, Copyright (c), by Zend Technologies
root@jaimemontoya:/etc/php# apt-get update
Hit:1 http://us.archive.ubuntu.com/ubuntu jammy InRelease
Get:2 http://us.archive.ubuntu.com/ubuntu jammy-updates InRelease [119 kB]
Hit:3 http://dl.google.com/linux/chrome/deb stable InRelease
Hit:4 https://repos.insights.digitalocean.com/apt/do-agent main InRelease
Get:5 http://us.archive.ubuntu.com/ubuntu jammy-security InRelease [110 kB]
Hit:6 http://archive.ubuntu.com/ubuntu jammy InRelease
Get:7 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 Packages [1,277 kB]
Get:8 http://us.archive.ubuntu.com/ubuntu jammy-updates/universe amd64 Packages [1,023 kB]
Get:9 http://us.archive.ubuntu.com/ubuntu jammy-updates/multiverse amd64 Packages [42.1 kB]
Get:10 http://us.archive.ubuntu.com/ubuntu jammy-security/main amd64 Packages [1,062 kB]
Get:11 http://us.archive.ubuntu.com/ubuntu jammy-security/universe amd64 Packages [826 kB]
Fetched 4,459 kB in 3s (1,538 kB/s)
Reading package lists... Done
root@jaimemontoya:/etc/php# add-apt-repository ppa:ondrej/php
PPA publishes dbgsym, you may need to include 'main/debug' component
Repository: 'deb https://ppa.launchpadcontent.net/ondrej/php/ubuntu/ jammy main'
Description:
Co-installable PHP versions: PHP 5.6, PHP 7.x, PHP 8.x and most requested extensions are included. Only Supported Versions of PHP (http://php.net/supported-versions.php) for Supported Ubuntu Releases (https://wiki.ubuntu.com/Releases) are provided. Don't ask for end-of-life PHP versions or Ubuntu release, they won't be provided.

Debian oldstable and stable packages are provided as well: https://deb.sury.org/#debian-dpa

You can get more information about the packages at https://deb.sury.org

IMPORTANT: The <foo>-backports is now required on older Ubuntu releases.

BUGS&FEATURES: This PPA now has a issue tracker:
https://deb.sury.org/#bug-reporting

CAVEATS:
1. If you are using php-gearman, you need to add ppa:ondrej/pkg-gearman
2. If you are using apache2, you are advised to add ppa:ondrej/apache2
3. If you are using nginx, you are advised to add ppa:ondrej/nginx-mainline
   or ppa:ondrej/nginx

PLEASE READ: If you like my work and want to give me a little motivation, please consider donating regularly: https://donate.sury.org/

WARNING: add-apt-repository is broken with non-UTF-8 locales, see
https://github.com/oerdnj/deb.sury.org/issues/56 for workaround:

# LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
More info: https://launchpad.net/~ondrej/+archive/ubuntu/php
Adding repository.
Press [ENTER] to continue or Ctrl-c to cancel.
Adding deb entry to /etc/apt/sources.list.d/ondrej-ubuntu-php-jammy.list
Adding disabled deb-src entry to /etc/apt/sources.list.d/ondrej-ubuntu-php-jammy.list
Adding key to /etc/apt/trusted.gpg.d/ondrej-ubuntu-php.gpg with fingerprint 14AA40EC0831756756D7F66C4F4EA0AAE5267A6C
Hit:1 http://archive.ubuntu.com/ubuntu jammy InRelease
Hit:2 http://us.archive.ubuntu.com/ubuntu jammy InRelease
Get:3 http://us.archive.ubuntu.com/ubuntu jammy-updates InRelease [119 kB]
Hit:4 http://dl.google.com/linux/chrome/deb stable InRelease
Hit:5 https://repos.insights.digitalocean.com/apt/do-agent main InRelease
Get:6 http://us.archive.ubuntu.com/ubuntu jammy-security InRelease [110 kB]
Get:7 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy InRelease [23.9 kB]
Get:8 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 Packages [120 kB]
Get:9 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main Translation-en [36.6 kB]
Fetched 410 kB in 2s (202 kB/s)
Reading package lists... Done
root@jaimemontoya:/etc/php# apt update
Hit:1 http://archive.ubuntu.com/ubuntu jammy InRelease
Hit:2 http://us.archive.ubuntu.com/ubuntu jammy InRelease
Hit:3 http://us.archive.ubuntu.com/ubuntu jammy-updates InRelease
Hit:4 http://dl.google.com/linux/chrome/deb stable InRelease
Hit:5 http://us.archive.ubuntu.com/ubuntu jammy-security InRelease
Hit:6 https://repos.insights.digitalocean.com/apt/do-agent main InRelease
Hit:7 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy InRelease
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
97 packages can be upgraded. Run 'apt list --upgradable' to see them.
root@jaimemontoya:/etc/php# add-apt-repository ppa:ondrej/php
PPA publishes dbgsym, you may need to include 'main/debug' component
Repository: 'deb https://ppa.launchpadcontent.net/ondrej/php/ubuntu/ jammy main'
Description:
Co-installable PHP versions: PHP 5.6, PHP 7.x, PHP 8.x and most requested extensions are included. Only Supported Versions of PHP (http://php.net/supported-versions.php) for Supported Ubuntu Releases (https://wiki.ubuntu.com/Releases) are provided. Don't ask for end-of-life PHP versions or Ubuntu release, they won't be provided.

Debian oldstable and stable packages are provided as well: https://deb.sury.org/#debian-dpa

You can get more information about the packages at https://deb.sury.org

IMPORTANT: The <foo>-backports is now required on older Ubuntu releases.

BUGS&FEATURES: This PPA now has a issue tracker:
https://deb.sury.org/#bug-reporting

CAVEATS:
1. If you are using php-gearman, you need to add ppa:ondrej/pkg-gearman
2. If you are using apache2, you are advised to add ppa:ondrej/apache2
3. If you are using nginx, you are advised to add ppa:ondrej/nginx-mainline
   or ppa:ondrej/nginx

PLEASE READ: If you like my work and want to give me a little motivation, please consider donating regularly: https://donate.sury.org/

WARNING: add-apt-repository is broken with non-UTF-8 locales, see
https://github.com/oerdnj/deb.sury.org/issues/56 for workaround:

# LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
More info: https://launchpad.net/~ondrej/+archive/ubuntu/php
Adding repository.
Press [ENTER] to continue or Ctrl-c to cancel.
Adding deb entry to /etc/apt/sources.list.d/ondrej-ubuntu-php-jammy.list
Adding disabled deb-src entry to /etc/apt/sources.list.d/ondrej-ubuntu-php-jammy.list
Adding key to /etc/apt/trusted.gpg.d/ondrej-ubuntu-php.gpg with fingerprint 14AA40EC0831756756D7F66C4F4EA0AAE5267A6C
Hit:1 http://archive.ubuntu.com/ubuntu jammy InRelease
Hit:2 http://us.archive.ubuntu.com/ubuntu jammy InRelease
Get:3 http://us.archive.ubuntu.com/ubuntu jammy-updates InRelease [119 kB]
Hit:4 http://dl.google.com/linux/chrome/deb stable InRelease
Hit:5 https://repos.insights.digitalocean.com/apt/do-agent main InRelease
Get:6 http://us.archive.ubuntu.com/ubuntu jammy-security InRelease [110 kB]
Get:7 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy InRelease [23.9 kB]
Get:8 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 Packages [120 kB]
Get:9 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main Translation-en [36.6 kB]
Fetched 410 kB in 2s (202 kB/s)
Reading package lists... Done
root@jaimemontoya:/etc/php# ^C
root@jaimemontoya:/etc/php# apt update
Hit:1 http://archive.ubuntu.com/ubuntu jammy InRelease
Hit:2 http://us.archive.ubuntu.com/ubuntu jammy InRelease
Hit:3 http://us.archive.ubuntu.com/ubuntu jammy-updates InRelease
Hit:4 http://dl.google.com/linux/chrome/deb stable InRelease
Hit:5 http://us.archive.ubuntu.com/ubuntu jammy-security InRelease
Hit:6 https://repos.insights.digitalocean.com/apt/do-agent main InRelease
Hit:7 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy InRelease
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
97 packages can be upgraded. Run 'apt list --upgradable' to see them.
root@jaimemontoya:/etc/php# ^C
root@jaimemontoya:/etc/php# apt-get install php8.3 php8.3-cli php8.3-common php8.3-mysql php8.3-soap php8.3-bcmath php8.3-xml php8.3-mbstring php8.3-gd php8.3-curl
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
The following package was automatically installed and is no longer required:
  libwebp6
Use 'apt autoremove' to remove it.
The following additional packages will be installed:
  libaom3 libapache2-mod-php8.3 libavif13 libdav1d5 libde265-0 libgav1-0 libgd3 libheif1 libonig5 libx265-199 libyuv0 php8.3-opcache php8.3-readline
Suggested packages:
  php-pear libgd-tools
The following NEW packages will be installed:
  libaom3 libapache2-mod-php8.3 libavif13 libdav1d5 libde265-0 libgav1-0 libheif1 libonig5 libx265-199 libyuv0 php8.3 php8.3-bcmath php8.3-cli php8.3-common php8.3-curl php8.3-gd php8.3-mbstring php8.3-mysql php8.3-opcache
  php8.3-readline php8.3-soap php8.3-xml
The following packages will be upgraded:
  libgd3
1 upgraded, 22 newly installed, 0 to remove and 96 not upgraded.
Need to get 10.7 MB of archives.
After this operation, 51.8 MB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libaom3 amd64 3.3.0-1 [1,748 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libdav1d5 amd64 0.9.2-1 [463 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libgav1-0 amd64 0.17.0-1build1 [336 kB]
Get:4 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libyuv0 amd64 0.0~git20220104.b91df1a-2 [154 kB]
Get:5 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libavif13 amd64 0.9.3-3 [69.5 kB]
Get:6 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libde265-0 amd64 1.0.8-1 [243 kB]
Get:7 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libx265-199 amd64 3.5-2 [1,170 kB]
Get:8 http://us.archive.ubuntu.com/ubuntu jammy/universe amd64 libheif1 amd64 1.12.0-2build1 [196 kB]
Get:9 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libonig5 amd64 6.9.7.1-2build1 [172 kB]
Get:10 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-common amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [752 kB]
Get:11 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-opcache amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [371 kB]
Get:12 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-readline amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [13.5 kB]
Get:13 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-cli amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [1,923 kB]
Get:14 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libapache2-mod-php8.3 amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [1,860 kB]
Get:15 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libgd3 amd64 2.3.3-9+ubuntu22.04.1+deb.sury.org+1 [147 kB]
Get:16 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3 all 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [26.0 kB]
Get:17 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-bcmath amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [16.8 kB]
Get:18 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-curl amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [40.4 kB]
Get:19 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-gd amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [32.9 kB]
Get:20 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-mbstring amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [539 kB]
Get:21 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-mysql amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [131 kB]
Get:22 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-soap amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [134 kB]
Get:23 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-xml amd64 8.3.1-1+ubuntu22.04.1+deb.sury.org+1 [128 kB]
Fetched 10.7 MB in 2s (4,760 kB/s)
Selecting previously unselected package libaom3:amd64.
(Reading database ... 264659 files and directories currently installed.)
Preparing to unpack .../00-libaom3_3.3.0-1_amd64.deb ...
Unpacking libaom3:amd64 (3.3.0-1) ...
Selecting previously unselected package php8.3-common.
Preparing to unpack .../01-php8.3-common_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-common (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-opcache.
Preparing to unpack .../02-php8.3-opcache_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-opcache (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-readline.
Preparing to unpack .../03-php8.3-readline_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-readline (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-cli.
Preparing to unpack .../04-php8.3-cli_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-cli (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package libapache2-mod-php8.3.
Preparing to unpack .../05-libapache2-mod-php8.3_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libapache2-mod-php8.3 (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package libdav1d5:amd64.
Preparing to unpack .../06-libdav1d5_0.9.2-1_amd64.deb ...
Unpacking libdav1d5:amd64 (0.9.2-1) ...
Selecting previously unselected package libgav1-0:amd64.
Preparing to unpack .../07-libgav1-0_0.17.0-1build1_amd64.deb ...
Unpacking libgav1-0:amd64 (0.17.0-1build1) ...
Selecting previously unselected package libyuv0:amd64.
Preparing to unpack .../08-libyuv0_0.0~git20220104.b91df1a-2_amd64.deb ...
Unpacking libyuv0:amd64 (0.0~git20220104.b91df1a-2) ...
Selecting previously unselected package libavif13:amd64.
Preparing to unpack .../09-libavif13_0.9.3-3_amd64.deb ...
Unpacking libavif13:amd64 (0.9.3-3) ...
Selecting previously unselected package libde265-0:amd64.
Preparing to unpack .../10-libde265-0_1.0.8-1_amd64.deb ...
Unpacking libde265-0:amd64 (1.0.8-1) ...
Selecting previously unselected package libx265-199:amd64.
Preparing to unpack .../11-libx265-199_3.5-2_amd64.deb ...
Unpacking libx265-199:amd64 (3.5-2) ...
Selecting previously unselected package libheif1:amd64.
Preparing to unpack .../12-libheif1_1.12.0-2build1_amd64.deb ...
Unpacking libheif1:amd64 (1.12.0-2build1) ...
Preparing to unpack .../13-libgd3_2.3.3-9+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libgd3:amd64 (2.3.3-9+ubuntu22.04.1+deb.sury.org+1) over (2.3.0-2+ubuntu18.04.1+deb.sury.org+1) ...
Selecting previously unselected package libonig5:amd64.
Preparing to unpack .../14-libonig5_6.9.7.1-2build1_amd64.deb ...
Unpacking libonig5:amd64 (6.9.7.1-2build1) ...
Selecting previously unselected package php8.3.
Preparing to unpack .../15-php8.3_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_all.deb ...
Unpacking php8.3 (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-bcmath.
Preparing to unpack .../16-php8.3-bcmath_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-bcmath (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-curl.
Preparing to unpack .../17-php8.3-curl_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-curl (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-gd.
Preparing to unpack .../18-php8.3-gd_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-gd (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-mbstring.
Preparing to unpack .../19-php8.3-mbstring_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-mbstring (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-mysql.
Preparing to unpack .../20-php8.3-mysql_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-mysql (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-soap.
Preparing to unpack .../21-php8.3-soap_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-soap (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php8.3-xml.
Preparing to unpack .../22-php8.3-xml_8.3.1-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-xml (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libaom3:amd64 (3.3.0-1) ...
Setting up php8.3-common (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/calendar.ini with new version

Creating config file /etc/php/8.3/mods-available/ctype.ini with new version

Creating config file /etc/php/8.3/mods-available/exif.ini with new version

Creating config file /etc/php/8.3/mods-available/fileinfo.ini with new version

Creating config file /etc/php/8.3/mods-available/ffi.ini with new version

Creating config file /etc/php/8.3/mods-available/ftp.ini with new version

Creating config file /etc/php/8.3/mods-available/gettext.ini with new version

Creating config file /etc/php/8.3/mods-available/iconv.ini with new version

Creating config file /etc/php/8.3/mods-available/pdo.ini with new version

Creating config file /etc/php/8.3/mods-available/phar.ini with new version

Creating config file /etc/php/8.3/mods-available/posix.ini with new version

Creating config file /etc/php/8.3/mods-available/shmop.ini with new version

Creating config file /etc/php/8.3/mods-available/sockets.ini with new version

Creating config file /etc/php/8.3/mods-available/sysvmsg.ini with new version

Creating config file /etc/php/8.3/mods-available/sysvsem.ini with new version

Creating config file /etc/php/8.3/mods-available/sysvshm.ini with new version

Creating config file /etc/php/8.3/mods-available/tokenizer.ini with new version
Setting up php8.3-mysql (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/mysqlnd.ini with new version

Creating config file /etc/php/8.3/mods-available/mysqli.ini with new version

Creating config file /etc/php/8.3/mods-available/pdo_mysql.ini with new version
Setting up php8.3-readline (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/readline.ini with new version
Setting up libgav1-0:amd64 (0.17.0-1build1) ...
Setting up php8.3-soap (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/soap.ini with new version
Setting up libx265-199:amd64 (3.5-2) ...
Setting up php8.3-bcmath (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/bcmath.ini with new version
Setting up php8.3-xml (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/dom.ini with new version

Creating config file /etc/php/8.3/mods-available/simplexml.ini with new version

Creating config file /etc/php/8.3/mods-available/xml.ini with new version

Creating config file /etc/php/8.3/mods-available/xmlreader.ini with new version

Creating config file /etc/php/8.3/mods-available/xmlwriter.ini with new version

Creating config file /etc/php/8.3/mods-available/xsl.ini with new version
Setting up php8.3-opcache (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/opcache.ini with new version
Setting up libdav1d5:amd64 (0.9.2-1) ...
Setting up libde265-0:amd64 (1.0.8-1) ...
Setting up libyuv0:amd64 (0.0~git20220104.b91df1a-2) ...
Setting up libonig5:amd64 (6.9.7.1-2build1) ...
Setting up php8.3-curl (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/curl.ini with new version
Setting up libheif1:amd64 (1.12.0-2build1) ...
Setting up php8.3-cli (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
update-alternatives: using /usr/bin/php8.3 to provide /usr/bin/php (php) in auto mode
update-alternatives: using /usr/bin/phar8.3 to provide /usr/bin/phar (phar) in auto mode
update-alternatives: using /usr/bin/phar.phar8.3 to provide /usr/bin/phar.phar (phar.phar) in auto mode

Creating config file /etc/php/8.3/cli/php.ini with new version
Setting up php8.3-mbstring (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/mbstring.ini with new version
Setting up libapache2-mod-php8.3 (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/apache2/php.ini with new version
libapache2-mod-php8.3: php8.1 module already enabled, not enabling PHP 8.3
Setting up libavif13:amd64 (0.9.3-3) ...
Setting up php8.3 (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libgd3:amd64 (2.3.3-9+ubuntu22.04.1+deb.sury.org+1) ...
Setting up php8.3-gd (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...

Creating config file /etc/php/8.3/mods-available/gd.ini with new version
Processing triggers for man-db (2.10.2-1) ...
Processing triggers for libc-bin (2.35-0ubuntu3.6) ...
Processing triggers for php8.3-cli (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Processing triggers for libapache2-mod-php8.3 (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Scanning processes...
Scanning candidates...
Scanning linux images...

Restarting services...
 systemctl restart accounts-daemon.service acpid.service apache2.service atd.service avahi-daemon.service cron.service do-agent.service kerneloops.service multipathd.service packagekit.service polkit.service power-profiles-daemon.service rsyslog.service rtkit-daemon.service serial-getty@ttyS0.service snapd.service ssh.service switcheroo-control.service systemd-journald.service systemd-resolved.service systemd-timesyncd.service systemd-udevd.service udisks2.service upower.service vncserver-virtuald.service xrdp.service xrdp-sesman.service
Service restarts being deferred:
 systemctl restart ModemManager.service
 systemctl restart NetworkManager.service
 /etc/needrestart/restart.d/dbus.service
 systemctl restart gdm.service
 systemctl restart gdm3.service
 systemctl restart lxcfs.service
 systemctl restart networkd-dispatcher.service
 systemctl restart systemd-logind.service
 systemctl restart unattended-upgrades.service
 systemctl restart user@126.service
 systemctl restart wpa_supplicant.service

No containers need to be restarted.

No user sessions are running outdated binaries.

No VM guests are running outdated hypervisor (qemu) binaries on this host.
root@jaimemontoya:/etc/php# php -v
PHP 8.3.1 (cli) (built: Dec 21 2023 20:12:13) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.1, Copyright (c) Zend Technologies
    with Zend OPcache v8.3.1, Copyright (c), by Zend Technologies
</pre>
		   <div>Published: 1:50 AM GMT · Jan 16, 2024</div>\n";
?>
