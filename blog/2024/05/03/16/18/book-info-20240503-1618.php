<?php
  $index->content .= 
           "<p>From my SQL database, I clicked <span class=\"cod\">Set server firewall</span>:</p><div><img src=\"/blog/2024/05/03/16/18/img/setServerFirewall.jpg\" alt=\"Set server firewall\" width=\"846\" height=\"391\"></div><p>I clicked <span class=\"cod\">Add a firewall rule</span>:</p><div><img src=\"/blog/2024/05/03/16/18/img/addAFirewallRule.jpg\" alt=\"Add a firewall rule\" width=\"1604\" height=\"722\"></div><p>I added a firewall rule and clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2024/05/03/16/18/img/addedAFirewallRule.jpg\" alt=\"Added a firewall rule\" width=\"1127\" height=\"889\"></div><p>I clicked <span class=\"cod\">Save</span>:</p><div><img src=\"/blog/2024/05/03/16/18/img/saveFirewallRule.jpg\" alt=\"Save firewall rule\" width=\"1151\" height=\"930\"></div><p>I installed the Microsoft ODBC driver for SQL Server and completed all required configurations:</p>
<pre>
root@jaimemontoya:/var/www/jaimemontoya.com# apt install php-pear
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
The following package was automatically installed and is no longer required:
  libwebp6
Use 'apt autoremove' to remove it.
The following NEW packages will be installed:
  php-pear
0 upgraded, 1 newly installed, 0 to remove and 158 not upgraded.
Need to get 293 kB of archives.
After this operation, 2,131 kB of additional disk space will be used.
Get:1 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 php-pear all 1:1.10.12+submodules+notgz+20210212-1ubuntu3 [293 kB]
Fetched 293 kB in 0s (862 kB/s)
Selecting previously unselected package php-pear.
(Reading database ... 264897 files and directories currently installed.)
Preparing to unpack .../php-pear_1%3a1.10.12+submodules+notgz+20210212-1ubuntu3_all.deb ...
Unpacking php-pear (1:1.10.12+submodules+notgz+20210212-1ubuntu3) ...
Setting up php-pear (1:1.10.12+submodules+notgz+20210212-1ubuntu3) ...
Processing triggers for man-db (2.10.2-1) ...
Scanning processes...                                                                                            
Scanning candidates...                                                                                           
Scanning linux images...                                                                                         

Running kernel seems to be up-to-date.

Restarting services...
 systemctl restart apache2.service packagekit.service
Service restarts being deferred:
 systemctl restart NetworkManager.service
 systemctl restart unattended-upgrades.service
 systemctl restart user@126.service

No containers need to be restarted.

No user sessions are running outdated binaries.

No VM guests are running outdated hypervisor (qemu) binaries on this host.
</pre>
		   <div><img src=\"/blog/2024/05/03/16/18/img/installationsImage1.jpg\" alt=\"Installation - Image 1\" width=\"1034\" height=\"879\"></div>
<pre>
root@jaimemontoya:/var/www/jaimemontoya.com# apt install php-pear
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
The following package was automatically installed and is no longer required:
  libwebp6
Use 'apt autoremove' to remove it.
The following NEW packages will be installed:
  php-pear
0 upgraded, 1 newly installed, 0 to remove and 158 not upgraded.
Need to get 293 kB of archives.
After this operation, 2,131 kB of additional disk space will be used.
Get:1 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 php-pear all 1:1.10.12+submodules+notgz+20210212-1ubuntu3 [293 kB]
Fetched 293 kB in 0s (862 kB/s)
Selecting previously unselected package php-pear.
(Reading database ... 264897 files and directories currently installed.)
Preparing to unpack .../php-pear_1%3a1.10.12+submodules+notgz+20210212-1ubuntu3_all.deb ...
Unpacking php-pear (1:1.10.12+submodules+notgz+20210212-1ubuntu3) ...
Setting up php-pear (1:1.10.12+submodules+notgz+20210212-1ubuntu3) ...
Processing triggers for man-db (2.10.2-1) ...
Scanning processes...                                                                                            
Scanning candidates...                                                                                           
Scanning linux images...                                                                                         

Running kernel seems to be up-to-date.

Restarting services...
 systemctl restart apache2.service packagekit.service
Service restarts being deferred:
 systemctl restart NetworkManager.service
 systemctl restart unattended-upgrades.service
 systemctl restart user@126.service

No containers need to be restarted.

No user sessions are running outdated binaries.

No VM guests are running outdated hypervisor (qemu) binaries on this host.

root@jaimemontoya:/var/www/jaimemontoya.com# apt install php-dev
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
The following package was automatically installed and is no longer required:
  libwebp6
Use 'apt autoremove' to remove it.
The following additional packages will be installed:
  autoconf automake autopoint autotools-dev build-essential debhelper debugedit dh-autoreconf dh-strip-nondeterminism dpkg-dev dwz fakeroot g++ g++-11 gcc gcc-11 gettext intltool-debian libalgorithm-diff-perl
  libalgorithm-diff-xs-perl libalgorithm-merge-perl libapache2-mod-php8.3 libarchive-cpio-perl libarchive-zip-perl libasan6 libc-dev-bin libc-devtools libc6-dev libcc1-0 libcrypt-dev libdebhelper-perl
  libdpkg-perl libfakeroot libfile-fcntllock-perl libfile-stripnondeterminism-perl libgcc-11-dev libitm1 liblsan0 libltdl-dev libmail-sendmail-perl libnsl-dev libpcre2-16-0 libpcre2-32-0 libpcre2-8-0
  libpcre2-dev libpcre2-posix3 libquadmath0 libssl-dev libstdc++-11-dev libsub-override-perl libsys-hostname-long-perl libtirpc-dev libtool libtsan0 libubsan1 linux-libc-dev lto-disabled-list m4 make
  manpages-dev php8.3-bcmath php8.3-cli php8.3-common php8.3-curl php8.3-dev php8.3-gd php8.3-mbstring php8.3-mysql php8.3-opcache php8.3-readline php8.3-soap php8.3-xml pkg-config pkg-php-tools po-debconf
  rpcsvc-proto shtool
Suggested packages:
  autoconf-archive gnu-standards autoconf-doc dh-make debian-keyring g++-multilib g++-11-multilib gcc-11-doc gcc-multilib flex bison gcc-doc gcc-11-multilib gcc-11-locales gettext-doc libasprintf-dev
  libgettextpo-dev glibc-doc bzr libtool-doc libssl-doc libstdc++-11-doc gfortran | fortran95-compiler gcj-jdk m4-doc make-doc dh-php libmail-box-perl
The following NEW packages will be installed:
  autoconf automake autopoint autotools-dev build-essential debhelper debugedit dh-autoreconf dh-strip-nondeterminism dpkg-dev dwz fakeroot g++ g++-11 gcc gcc-11 gettext intltool-debian libalgorithm-diff-perl
  libalgorithm-diff-xs-perl libalgorithm-merge-perl libarchive-cpio-perl libarchive-zip-perl libasan6 libc-dev-bin libc-devtools libc6-dev libcc1-0 libcrypt-dev libdebhelper-perl libdpkg-perl libfakeroot
  libfile-fcntllock-perl libfile-stripnondeterminism-perl libgcc-11-dev libitm1 liblsan0 libltdl-dev libmail-sendmail-perl libnsl-dev libpcre2-16-0 libpcre2-dev libpcre2-posix3 libquadmath0 libssl-dev
  libstdc++-11-dev libsub-override-perl libsys-hostname-long-perl libtirpc-dev libtool libtsan0 libubsan1 linux-libc-dev lto-disabled-list m4 make manpages-dev php-dev php8.3-dev pkg-config pkg-php-tools
  po-debconf rpcsvc-proto shtool
The following packages will be upgraded:
  libapache2-mod-php8.3 libpcre2-32-0 libpcre2-8-0 php8.3-bcmath php8.3-cli php8.3-common php8.3-curl php8.3-gd php8.3-mbstring php8.3-mysql php8.3-opcache php8.3-readline php8.3-soap php8.3-xml
14 upgraded, 64 newly installed, 0 to remove and 144 not upgraded.
Need to get 65.6 MB of archives.
After this operation, 207 MB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 m4 amd64 1.4.18-5ubuntu2 [199 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 autoconf all 2.71-2 [338 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 autotools-dev all 20220109.1 [44.9 kB]
Get:4 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 automake all 1:1.16.5-1.3 [558 kB]
Get:5 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 autopoint all 0.21-4ubuntu4 [422 kB]
Get:6 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libc-dev-bin amd64 2.35-0ubuntu3.7 [20.3 kB]
Get:7 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 linux-libc-dev amd64 5.15.0-105.115 [1,330 kB]
Get:8 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libcrypt-dev amd64 1:4.4.27-1 [112 kB]
Get:9 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 rpcsvc-proto amd64 1.4.2-0ubuntu6 [68.5 kB]
Get:10 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libtirpc-dev amd64 1.3.2-2ubuntu0.1 [192 kB]
Get:11 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libnsl-dev amd64 1.3.0-2build2 [71.3 kB]
Get:12 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libc6-dev amd64 2.35-0ubuntu3.7 [2,100 kB]
Get:13 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libcc1-0 amd64 12.3.0-1ubuntu1~22.04 [48.3 kB]
Get:14 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libitm1 amd64 12.3.0-1ubuntu1~22.04 [30.2 kB]
Get:15 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libpcre2-8-0 amd64 10.42-3+ubuntu22.04.1+deb.sury.org+1 [230 kB]
Get:16 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libasan6 amd64 11.4.0-1ubuntu1~22.04 [2,282 kB]
Get:17 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 liblsan0 amd64 12.3.0-1ubuntu1~22.04 [1,069 kB]
Get:18 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libtsan0 amd64 11.4.0-1ubuntu1~22.04 [2,260 kB]
Get:19 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libubsan1 amd64 12.3.0-1ubuntu1~22.04 [976 kB]
Get:20 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libquadmath0 amd64 12.3.0-1ubuntu1~22.04 [154 kB]
Get:21 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libgcc-11-dev amd64 11.4.0-1ubuntu1~22.04 [2,517 kB]
Get:22 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 gcc-11 amd64 11.4.0-1ubuntu1~22.04 [20.1 MB]
Get:23 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-xml amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [129 kB]
Get:24 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-soap amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [134 kB]
Get:25 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-readline amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [13.5 kB]
Get:26 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-opcache amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [371 kB]
Get:27 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 gcc amd64 4:11.2.0-1ubuntu1 [5,112 B]
Get:28 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libstdc++-11-dev amd64 11.4.0-1ubuntu1~22.04 [2,101 kB]
Get:29 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 g++-11 amd64 11.4.0-1ubuntu1~22.04 [11.4 MB]
Get:30 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-mysql amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [131 kB]
Get:31 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-mbstring amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [538 kB]
Get:32 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-gd amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [32.9 kB]
Get:33 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-curl amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [40.5 kB]
Get:34 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-bcmath amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [16.8 kB]
Get:35 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libapache2-mod-php8.3 amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [1,860 kB]
Get:36 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-cli amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [1,924 kB]
Get:37 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-common amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [757 kB]
Get:38 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libpcre2-16-0 amd64 10.42-3+ubuntu22.04.1+deb.sury.org+1 [213 kB]
Get:39 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libpcre2-32-0 amd64 10.42-3+ubuntu22.04.1+deb.sury.org+1 [202 kB]
Get:40 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libpcre2-posix3 amd64 10.42-3+ubuntu22.04.1+deb.sury.org+1 [9,204 B]
Get:41 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 libpcre2-dev amd64 10.42-3+ubuntu22.04.1+deb.sury.org+1 [746 kB]
Get:42 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php8.3-dev amd64 8.3.6-1+ubuntu22.04.1+deb.sury.org+1 [528 kB]
Get:43 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy/main amd64 php-dev all 2:8.3+94+ubuntu22.04.1+deb.sury.org+2 [7,622 B]
Get:44 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 g++ amd64 4:11.2.0-1ubuntu1 [1,412 B]
Get:45 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 make amd64 4.3-4.1build1 [180 kB]
Get:46 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libdpkg-perl all 1.21.1ubuntu2.3 [237 kB]
Get:47 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 lto-disabled-list all 24 [12.5 kB]
Get:48 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 dpkg-dev all 1.21.1ubuntu2.3 [922 kB]
Get:49 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 build-essential amd64 12.9ubuntu3 [4,744 B]
Get:50 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libdebhelper-perl all 13.6ubuntu1 [67.2 kB]
Get:51 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libtool all 2.4.6-15build2 [164 kB]
Get:52 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 dh-autoreconf all 20 [16.1 kB]
Get:53 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libarchive-zip-perl all 1.68-1 [90.2 kB]
Get:54 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libsub-override-perl all 0.09-2 [9,532 B]
Get:55 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libfile-stripnondeterminism-perl all 1.13.0-1 [18.1 kB]
Get:56 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 dh-strip-nondeterminism all 1.13.0-1 [5,344 B]
Get:57 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 debugedit amd64 1:5.0-4build1 [47.2 kB]
Get:58 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 dwz amd64 0.14-1build2 [105 kB]
Get:59 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 gettext amd64 0.21-4ubuntu4 [868 kB]
Get:60 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 intltool-debian all 0.35.0+20060710.5 [24.9 kB]
Get:61 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 po-debconf all 1.0.21+nmu1 [233 kB]
Get:62 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 debhelper all 13.6ubuntu1 [923 kB]
Get:63 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libfakeroot amd64 1.28-1ubuntu1 [31.5 kB]
Get:64 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 fakeroot amd64 1.28-1ubuntu1 [60.4 kB]
Get:65 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libalgorithm-diff-perl all 1.201-1 [41.8 kB]
Get:66 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libalgorithm-diff-xs-perl amd64 0.04-6build3 [11.9 kB]
Get:67 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libalgorithm-merge-perl all 0.08-3 [12.0 kB]
Get:68 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libarchive-cpio-perl all 0.10-1.1 [9,928 B]
Get:69 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libc-devtools amd64 2.35-0ubuntu3.7 [29.0 kB]
Get:70 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libfile-fcntllock-perl amd64 0.22-3build7 [33.9 kB]
Get:71 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libltdl-dev amd64 2.4.6-15build2 [169 kB]
Get:72 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libsys-hostname-long-perl all 1.5-2 [11.5 kB]
Get:73 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 libmail-sendmail-perl all 0.80-1.1 [22.7 kB]
Get:74 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libssl-dev amd64 3.0.2-0ubuntu1.15 [2,376 kB]
Get:75 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 manpages-dev all 5.10-1ubuntu1 [2,309 kB]
Get:76 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 pkg-config amd64 0.29.2-1ubuntu3 [48.2 kB]
Get:77 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 shtool all 2.0.8-10 [122 kB]
Get:78 http://us.archive.ubuntu.com/ubuntu jammy/main amd64 pkg-php-tools all 1.42build1 [33.5 kB]
Fetched 65.6 MB in 4s (16.1 MB/s)     
Extracting templates from packages: 100%
(Reading database ... 265075 files and directories currently installed.)
Preparing to unpack .../libpcre2-8-0_10.42-3+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libpcre2-8-0:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) over (10.39-3ubuntu0.1) ...
Setting up libpcre2-8-0:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package m4.
(Reading database ... 265075 files and directories currently installed.)
Preparing to unpack .../00-m4_1.4.18-5ubuntu2_amd64.deb ...
Unpacking m4 (1.4.18-5ubuntu2) ...
Selecting previously unselected package autoconf.
Preparing to unpack .../01-autoconf_2.71-2_all.deb ...
Unpacking autoconf (2.71-2) ...
Selecting previously unselected package autotools-dev.
Preparing to unpack .../02-autotools-dev_20220109.1_all.deb ...
Unpacking autotools-dev (20220109.1) ...
Selecting previously unselected package automake.
Preparing to unpack .../03-automake_1%3a1.16.5-1.3_all.deb ...
Unpacking automake (1:1.16.5-1.3) ...
Selecting previously unselected package autopoint.
Preparing to unpack .../04-autopoint_0.21-4ubuntu4_all.deb ...
Unpacking autopoint (0.21-4ubuntu4) ...
Selecting previously unselected package libc-dev-bin.
Preparing to unpack .../05-libc-dev-bin_2.35-0ubuntu3.7_amd64.deb ...
Unpacking libc-dev-bin (2.35-0ubuntu3.7) ...
Selecting previously unselected package linux-libc-dev:amd64.
Preparing to unpack .../06-linux-libc-dev_5.15.0-105.115_amd64.deb ...
Unpacking linux-libc-dev:amd64 (5.15.0-105.115) ...
Selecting previously unselected package libcrypt-dev:amd64.
Preparing to unpack .../07-libcrypt-dev_1%3a4.4.27-1_amd64.deb ...
Unpacking libcrypt-dev:amd64 (1:4.4.27-1) ...
Selecting previously unselected package rpcsvc-proto.
Preparing to unpack .../08-rpcsvc-proto_1.4.2-0ubuntu6_amd64.deb ...
Unpacking rpcsvc-proto (1.4.2-0ubuntu6) ...
Selecting previously unselected package libtirpc-dev:amd64.
Preparing to unpack .../09-libtirpc-dev_1.3.2-2ubuntu0.1_amd64.deb ...
Unpacking libtirpc-dev:amd64 (1.3.2-2ubuntu0.1) ...
Selecting previously unselected package libnsl-dev:amd64.
Preparing to unpack .../10-libnsl-dev_1.3.0-2build2_amd64.deb ...
Unpacking libnsl-dev:amd64 (1.3.0-2build2) ...
Selecting previously unselected package libc6-dev:amd64.
Preparing to unpack .../11-libc6-dev_2.35-0ubuntu3.7_amd64.deb ...
Unpacking libc6-dev:amd64 (2.35-0ubuntu3.7) ...
Selecting previously unselected package libcc1-0:amd64.
Preparing to unpack .../12-libcc1-0_12.3.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libcc1-0:amd64 (12.3.0-1ubuntu1~22.04) ...
Selecting previously unselected package libitm1:amd64.
Preparing to unpack .../13-libitm1_12.3.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libitm1:amd64 (12.3.0-1ubuntu1~22.04) ...
Selecting previously unselected package libasan6:amd64.
Preparing to unpack .../14-libasan6_11.4.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libasan6:amd64 (11.4.0-1ubuntu1~22.04) ...
Selecting previously unselected package liblsan0:amd64.
Preparing to unpack .../15-liblsan0_12.3.0-1ubuntu1~22.04_amd64.deb ...
Unpacking liblsan0:amd64 (12.3.0-1ubuntu1~22.04) ...
Selecting previously unselected package libtsan0:amd64.
Preparing to unpack .../16-libtsan0_11.4.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libtsan0:amd64 (11.4.0-1ubuntu1~22.04) ...
Selecting previously unselected package libubsan1:amd64.
Preparing to unpack .../17-libubsan1_12.3.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libubsan1:amd64 (12.3.0-1ubuntu1~22.04) ...
Selecting previously unselected package libquadmath0:amd64.
Preparing to unpack .../18-libquadmath0_12.3.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libquadmath0:amd64 (12.3.0-1ubuntu1~22.04) ...
Selecting previously unselected package libgcc-11-dev:amd64.
Preparing to unpack .../19-libgcc-11-dev_11.4.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libgcc-11-dev:amd64 (11.4.0-1ubuntu1~22.04) ...
Selecting previously unselected package gcc-11.
Preparing to unpack .../20-gcc-11_11.4.0-1ubuntu1~22.04_amd64.deb ...
Unpacking gcc-11 (11.4.0-1ubuntu1~22.04) ...
Selecting previously unselected package gcc.
Preparing to unpack .../21-gcc_4%3a11.2.0-1ubuntu1_amd64.deb ...
Unpacking gcc (4:11.2.0-1ubuntu1) ...
Selecting previously unselected package libstdc++-11-dev:amd64.
Preparing to unpack .../22-libstdc++-11-dev_11.4.0-1ubuntu1~22.04_amd64.deb ...
Unpacking libstdc++-11-dev:amd64 (11.4.0-1ubuntu1~22.04) ...
Selecting previously unselected package g++-11.
Preparing to unpack .../23-g++-11_11.4.0-1ubuntu1~22.04_amd64.deb ...
Unpacking g++-11 (11.4.0-1ubuntu1~22.04) ...
Selecting previously unselected package g++.
Preparing to unpack .../24-g++_4%3a11.2.0-1ubuntu1_amd64.deb ...
Unpacking g++ (4:11.2.0-1ubuntu1) ...
Selecting previously unselected package make.
Preparing to unpack .../25-make_4.3-4.1build1_amd64.deb ...
Unpacking make (4.3-4.1build1) ...
Selecting previously unselected package libdpkg-perl.
Preparing to unpack .../26-libdpkg-perl_1.21.1ubuntu2.3_all.deb ...
Unpacking libdpkg-perl (1.21.1ubuntu2.3) ...
Selecting previously unselected package lto-disabled-list.
Preparing to unpack .../27-lto-disabled-list_24_all.deb ...
Unpacking lto-disabled-list (24) ...
Selecting previously unselected package dpkg-dev.
Preparing to unpack .../28-dpkg-dev_1.21.1ubuntu2.3_all.deb ...
Unpacking dpkg-dev (1.21.1ubuntu2.3) ...
Selecting previously unselected package build-essential.
Preparing to unpack .../29-build-essential_12.9ubuntu3_amd64.deb ...
Unpacking build-essential (12.9ubuntu3) ...
Selecting previously unselected package libdebhelper-perl.
Preparing to unpack .../30-libdebhelper-perl_13.6ubuntu1_all.deb ...
Unpacking libdebhelper-perl (13.6ubuntu1) ...
Selecting previously unselected package libtool.
Preparing to unpack .../31-libtool_2.4.6-15build2_all.deb ...
Unpacking libtool (2.4.6-15build2) ...
Selecting previously unselected package dh-autoreconf.
Preparing to unpack .../32-dh-autoreconf_20_all.deb ...
Unpacking dh-autoreconf (20) ...
Selecting previously unselected package libarchive-zip-perl.
Preparing to unpack .../33-libarchive-zip-perl_1.68-1_all.deb ...
Unpacking libarchive-zip-perl (1.68-1) ...
Selecting previously unselected package libsub-override-perl.
Preparing to unpack .../34-libsub-override-perl_0.09-2_all.deb ...
Unpacking libsub-override-perl (0.09-2) ...
Selecting previously unselected package libfile-stripnondeterminism-perl.
Preparing to unpack .../35-libfile-stripnondeterminism-perl_1.13.0-1_all.deb ...
Unpacking libfile-stripnondeterminism-perl (1.13.0-1) ...
Selecting previously unselected package dh-strip-nondeterminism.
Preparing to unpack .../36-dh-strip-nondeterminism_1.13.0-1_all.deb ...
Unpacking dh-strip-nondeterminism (1.13.0-1) ...
Selecting previously unselected package debugedit.
Preparing to unpack .../37-debugedit_1%3a5.0-4build1_amd64.deb ...
Unpacking debugedit (1:5.0-4build1) ...
Selecting previously unselected package dwz.
Preparing to unpack .../38-dwz_0.14-1build2_amd64.deb ...
Unpacking dwz (0.14-1build2) ...
Selecting previously unselected package gettext.
Preparing to unpack .../39-gettext_0.21-4ubuntu4_amd64.deb ...
Unpacking gettext (0.21-4ubuntu4) ...
Selecting previously unselected package intltool-debian.
Preparing to unpack .../40-intltool-debian_0.35.0+20060710.5_all.deb ...
Unpacking intltool-debian (0.35.0+20060710.5) ...
Selecting previously unselected package po-debconf.
Preparing to unpack .../41-po-debconf_1.0.21+nmu1_all.deb ...
Unpacking po-debconf (1.0.21+nmu1) ...
Selecting previously unselected package debhelper.
Preparing to unpack .../42-debhelper_13.6ubuntu1_all.deb ...
Unpacking debhelper (13.6ubuntu1) ...
Selecting previously unselected package libfakeroot:amd64.
Preparing to unpack .../43-libfakeroot_1.28-1ubuntu1_amd64.deb ...
Unpacking libfakeroot:amd64 (1.28-1ubuntu1) ...
Selecting previously unselected package fakeroot.
Preparing to unpack .../44-fakeroot_1.28-1ubuntu1_amd64.deb ...
Unpacking fakeroot (1.28-1ubuntu1) ...
Selecting previously unselected package libalgorithm-diff-perl.
Preparing to unpack .../45-libalgorithm-diff-perl_1.201-1_all.deb ...
Unpacking libalgorithm-diff-perl (1.201-1) ...
Selecting previously unselected package libalgorithm-diff-xs-perl.
Preparing to unpack .../46-libalgorithm-diff-xs-perl_0.04-6build3_amd64.deb ...
Unpacking libalgorithm-diff-xs-perl (0.04-6build3) ...
Selecting previously unselected package libalgorithm-merge-perl.
Preparing to unpack .../47-libalgorithm-merge-perl_0.08-3_all.deb ...
Unpacking libalgorithm-merge-perl (0.08-3) ...
Preparing to unpack .../48-php8.3-xml_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-xml (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../49-php8.3-soap_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-soap (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../50-php8.3-readline_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-readline (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../51-php8.3-opcache_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-opcache (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../52-php8.3-mysql_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-mysql (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../53-php8.3-mbstring_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-mbstring (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../54-php8.3-gd_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-gd (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../55-php8.3-curl_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-curl (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../56-php8.3-bcmath_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-bcmath (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../57-libapache2-mod-php8.3_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libapache2-mod-php8.3 (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../58-php8.3-cli_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-cli (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../59-php8.3-common_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-common (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) over (8.3.1-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package libarchive-cpio-perl.
Preparing to unpack .../60-libarchive-cpio-perl_0.10-1.1_all.deb ...
Unpacking libarchive-cpio-perl (0.10-1.1) ...
Selecting previously unselected package libc-devtools.
Preparing to unpack .../61-libc-devtools_2.35-0ubuntu3.7_amd64.deb ...
Unpacking libc-devtools (2.35-0ubuntu3.7) ...
Selecting previously unselected package libfile-fcntllock-perl.
Preparing to unpack .../62-libfile-fcntllock-perl_0.22-3build7_amd64.deb ...
Unpacking libfile-fcntllock-perl (0.22-3build7) ...
Selecting previously unselected package libltdl-dev:amd64.
Preparing to unpack .../63-libltdl-dev_2.4.6-15build2_amd64.deb ...
Unpacking libltdl-dev:amd64 (2.4.6-15build2) ...
Selecting previously unselected package libsys-hostname-long-perl.
Preparing to unpack .../64-libsys-hostname-long-perl_1.5-2_all.deb ...
Unpacking libsys-hostname-long-perl (1.5-2) ...
Selecting previously unselected package libmail-sendmail-perl.
Preparing to unpack .../65-libmail-sendmail-perl_0.80-1.1_all.deb ...
Unpacking libmail-sendmail-perl (0.80-1.1) ...
Selecting previously unselected package libpcre2-16-0:amd64.
Preparing to unpack .../66-libpcre2-16-0_10.42-3+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libpcre2-16-0:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Preparing to unpack .../67-libpcre2-32-0_10.42-3+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libpcre2-32-0:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) over (10.39-3ubuntu0.1) ...
Selecting previously unselected package libpcre2-posix3:amd64.
Preparing to unpack .../68-libpcre2-posix3_10.42-3+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libpcre2-posix3:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package libpcre2-dev:amd64.
Preparing to unpack .../69-libpcre2-dev_10.42-3+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking libpcre2-dev:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package libssl-dev:amd64.
Preparing to unpack .../70-libssl-dev_3.0.2-0ubuntu1.15_amd64.deb ...
Unpacking libssl-dev:amd64 (3.0.2-0ubuntu1.15) ...
Selecting previously unselected package manpages-dev.
Preparing to unpack .../71-manpages-dev_5.10-1ubuntu1_all.deb ...
Unpacking manpages-dev (5.10-1ubuntu1) ...
Selecting previously unselected package pkg-config.
Preparing to unpack .../72-pkg-config_0.29.2-1ubuntu3_amd64.deb ...
Unpacking pkg-config (0.29.2-1ubuntu3) ...
Selecting previously unselected package shtool.
Preparing to unpack .../73-shtool_2.0.8-10_all.deb ...
Unpacking shtool (2.0.8-10) ...
Selecting previously unselected package php8.3-dev.
Preparing to unpack .../74-php8.3-dev_8.3.6-1+ubuntu22.04.1+deb.sury.org+1_amd64.deb ...
Unpacking php8.3-dev (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Selecting previously unselected package php-dev.
Preparing to unpack .../75-php-dev_2%3a8.3+94+ubuntu22.04.1+deb.sury.org+2_all.deb ...
Unpacking php-dev (2:8.3+94+ubuntu22.04.1+deb.sury.org+2) ...
Selecting previously unselected package pkg-php-tools.
Preparing to unpack .../76-pkg-php-tools_1.42build1_all.deb ...
Unpacking pkg-php-tools (1.42build1) ...
Setting up shtool (2.0.8-10) ...
Setting up manpages-dev (5.10-1ubuntu1) ...
Setting up lto-disabled-list (24) ...
Setting up gettext (0.21-4ubuntu4) ...
Setting up libfile-fcntllock-perl (0.22-3build7) ...
Setting up libalgorithm-diff-perl (1.201-1) ...
Setting up libarchive-zip-perl (1.68-1) ...
Setting up libdebhelper-perl (13.6ubuntu1) ...
Setting up linux-libc-dev:amd64 (5.15.0-105.115) ...
Setting up m4 (1.4.18-5ubuntu2) ...
Setting up php8.3-common (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libpcre2-16-0:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libfakeroot:amd64 (1.28-1ubuntu1) ...
Setting up libasan6:amd64 (11.4.0-1ubuntu1~22.04) ...
Setting up intltool-debian (0.35.0+20060710.5) ...
Setting up php8.3-mysql (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up fakeroot (1.28-1ubuntu1) ...
update-alternatives: using /usr/bin/fakeroot-sysv to provide /usr/bin/fakeroot (fakeroot) in auto mode
Setting up php8.3-mbstring (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up autotools-dev (20220109.1) ...
Setting up libpcre2-32-0:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libtirpc-dev:amd64 (1.3.2-2ubuntu0.1) ...
Setting up rpcsvc-proto (1.4.2-0ubuntu6) ...
Setting up php8.3-readline (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up make (4.3-4.1build1) ...
Setting up libquadmath0:amd64 (12.3.0-1ubuntu1~22.04) ...
Setting up libssl-dev:amd64 (3.0.2-0ubuntu1.15) ...
Setting up autopoint (0.21-4ubuntu4) ...
Setting up php8.3-soap (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libdpkg-perl (1.21.1ubuntu2.3) ...
Setting up autoconf (2.71-2) ...
Setting up libubsan1:amd64 (12.3.0-1ubuntu1~22.04) ...
Setting up libpcre2-posix3:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Setting up dwz (0.14-1build2) ...
Setting up libnsl-dev:amd64 (1.3.0-2build2) ...
Setting up php8.3-bcmath (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libcrypt-dev:amd64 (1:4.4.27-1) ...
Setting up libarchive-cpio-perl (0.10-1.1) ...
Setting up debugedit (1:5.0-4build1) ...
Setting up libsub-override-perl (0.09-2) ...
Setting up php8.3-xml (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up php8.3-opcache (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libc-dev-bin (2.35-0ubuntu3.7) ...
Setting up libsys-hostname-long-perl (1.5-2) ...
Setting up libalgorithm-diff-xs-perl (0.04-6build3) ...
Setting up libcc1-0:amd64 (12.3.0-1ubuntu1~22.04) ...
Setting up liblsan0:amd64 (12.3.0-1ubuntu1~22.04) ...
Setting up libitm1:amd64 (12.3.0-1ubuntu1~22.04) ...
Setting up libc-devtools (2.35-0ubuntu3.7) ...
Setting up php8.3-gd (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libalgorithm-merge-perl (0.08-3) ...
Setting up libtsan0:amd64 (11.4.0-1ubuntu1~22.04) ...
Setting up automake (1:1.16.5-1.3) ...
update-alternatives: using /usr/bin/automake-1.16 to provide /usr/bin/automake (automake) in auto mode
Setting up libfile-stripnondeterminism-perl (1.13.0-1) ...
Setting up php8.3-curl (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Setting up po-debconf (1.0.21+nmu1) ...
Setting up php8.3-cli (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Replacing config file /etc/php/8.3/cli/php.ini with new version
Setting up dpkg-dev (1.21.1ubuntu2.3) ...
Setting up libmail-sendmail-perl (0.80-1.1) ...
Setting up libltdl-dev:amd64 (2.4.6-15build2) ...
Setting up pkg-config (0.29.2-1ubuntu3) ...
Setting up libapache2-mod-php8.3 (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Replacing config file /etc/php/8.3/apache2/php.ini with new version
libapache2-mod-php8.3: php8.1 module already enabled, not enabling PHP 8.3
Setting up dh-strip-nondeterminism (1.13.0-1) ...
Setting up libgcc-11-dev:amd64 (11.4.0-1ubuntu1~22.04) ...
Setting up gcc-11 (11.4.0-1ubuntu1~22.04) ...
Setting up libc6-dev:amd64 (2.35-0ubuntu3.7) ...
Setting up libpcre2-dev:amd64 (10.42-3+ubuntu22.04.1+deb.sury.org+1) ...
Setting up libtool (2.4.6-15build2) ...
Setting up gcc (4:11.2.0-1ubuntu1) ...
Setting up dh-autoreconf (20) ...
Setting up php8.3-dev (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
update-alternatives: using /usr/bin/php-config8.3 to provide /usr/bin/php-config (php-config) in auto mode
update-alternatives: using /usr/bin/phpize8.3 to provide /usr/bin/phpize (phpize) in auto mode
Setting up libstdc++-11-dev:amd64 (11.4.0-1ubuntu1~22.04) ...
Setting up g++-11 (11.4.0-1ubuntu1~22.04) ...
Setting up php-dev (2:8.3+94+ubuntu22.04.1+deb.sury.org+2) ...
update-alternatives: using /usr/bin/php-config.default to provide /usr/bin/php-config (php-config) in auto mode
update-alternatives: using /usr/bin/phpize.default to provide /usr/bin/phpize (phpize) in auto mode
Setting up debhelper (13.6ubuntu1) ...
Setting up g++ (4:11.2.0-1ubuntu1) ...
update-alternatives: using /usr/bin/g++ to provide /usr/bin/c++ (c++) in auto mode
Setting up build-essential (12.9ubuntu3) ...
Setting up pkg-php-tools (1.42build1) ...
Processing triggers for man-db (2.10.2-1) ...
Processing triggers for install-info (6.8-4build1) ...
Processing triggers for libc-bin (2.35-0ubuntu3.7) ...
Processing triggers for php8.3-cli (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Processing triggers for libapache2-mod-php8.3 (8.3.6-1+ubuntu22.04.1+deb.sury.org+1) ...
Scanning processes...                                                                                                                                                                                              
Scanning candidates...                                                                                                                                                                                             
Scanning linux images...                                                                                                                                                                                           

Running kernel seems to be up-to-date.

Restarting services...
 /etc/needrestart/restart.d/systemd-manager
 systemctl restart accounts-daemon.service apache2.service atd.service cron.service cups-browsed.service cups.service kerneloops.service multipathd.service packagekit.service polkit.service power-profiles-daemon.service ssh.service switcheroo-control.service systemd-journald.service systemd-resolved.service systemd-timesyncd.service systemd-udevd.service udisks2.service upower.service
Service restarts being deferred:
 systemctl restart ModemManager.service
 systemctl restart NetworkManager.service
 /etc/needrestart/restart.d/dbus.service
 systemctl restart gdm.service
 systemctl restart gdm3.service
 systemctl restart networkd-dispatcher.service
 systemctl restart systemd-logind.service
 systemctl restart unattended-upgrades.service
 systemctl restart user@0.service
 systemctl restart user@126.service

No containers need to be restarted.

No user sessions are running outdated binaries.

No VM guests are running outdated hypervisor (qemu) binaries on this host.
root@jaimemontoya:/var/www/jaimemontoya.com# 
</pre>
           <div><img src=\"/blog/2024/05/03/16/18/img/installationsImage2.jpg\" alt=\"Installation - Image 2\" width=\"1909\" height=\"1077\"></div>
<pre>
root@jaimemontoya:/var/www/jaimemontoya.com# pecl install sqlsrv pdo_sqlsrv
WARNING: channel \"pecl.php.net\" has updated its protocols, use \"pecl channel-update pecl.php.net\" to update
downloading sqlsrv-5.12.0.tgz ...
Starting to download sqlsrv-5.12.0.tgz (193,767 bytes)
.........................................done: 193,767 bytes
downloading pdo_sqlsrv-5.12.0.tgz ...
Starting to download pdo_sqlsrv-5.12.0.tgz (188,170 bytes)
...done: 188,170 bytes
34 source files, building
running: phpize
Configuring for:
PHP Api Version:         20230831
Zend Module Api No:      20230831
Zend Extension Api No:   420230831
configure.ac:165: warning: The macro `AC_PROG_LIBTOOL' is obsolete.
configure.ac:165: You should run autoupdate.
build/libtool.m4:99: AC_PROG_LIBTOOL is expanded from...
configure.ac:165: the top level
building in /tmp/pear/temp/pear-build-rootMWFrfR/sqlsrv-5.12.0
running: /tmp/pear/temp/sqlsrv/configure --with-php-config=/usr/bin/php-config
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
checking for a sed that does not truncate output... /usr/bin/sed
checking for pkg-config... /usr/bin/pkg-config
checking pkg-config is at least version 0.9.0... yes
checking for cc... cc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables...
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether the compiler supports GNU C... yes
checking whether cc accepts -g... yes
checking for cc option to enable C11 features... none needed
checking how to run the C preprocessor... cc -E
checking for icc... no
checking for suncc... no
checking for system library directory... lib
checking if compiler supports -Wl,-rpath,... yes
checking build system type... x86_64-pc-linux-gnu
checking host system type... x86_64-pc-linux-gnu
checking target system type... x86_64-pc-linux-gnu
checking for PHP prefix... /usr
checking for PHP includes... -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib
checking for PHP extension directory... /usr/lib/php/20230831
checking for PHP installed headers prefix... /usr/include/php/20230831
checking if debug is enabled... no
checking if zts is enabled... no
checking for gawk... gawk
checking whether to enable sqlsrv functions... yes, shared
checking for SQLSRV headers... /tmp/pear/temp/sqlsrv/shared/
checking for g++... g++
checking whether the compiler supports GNU C++... yes
checking whether g++ accepts -g... yes
checking for g++ option to enable C++11 features... none needed
checking how to run the C++ preprocessor... g++ -E
checking how to print strings... printf
checking for a sed that does not truncate output... (cached) /usr/bin/sed
checking for fgrep... /usr/bin/grep -F
checking for ld used by cc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 1572864
checking how to convert x86_64-pc-linux-gnu file names to x86_64-pc-linux-gnu format... func_convert_file_noop
checking how to convert x86_64-pc-linux-gnu file names to toolchain format... func_convert_file_noop
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for dlltool... no
checking how to associate runtime and link libraries... printf %s\n
checking for ar... ar
checking for archiver @FILE support... @
checking for strip... strip
checking for ranlib... ranlib
checking for gawk... (cached) gawk
checking command to parse /usr/bin/nm -B output from cc object... ok
checking for sysroot... no
checking for a working dd... /usr/bin/dd
checking how to truncate binary pipes... /usr/bin/dd bs=4096 count=1
checking for mt... mt
checking if mt is a manifest tool... no
checking for stdio.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for strings.h... yes
checking for sys/stat.h... yes
checking for sys/types.h... yes
checking for unistd.h... yes
checking for dlfcn.h... yes
checking for objdir... .libs
checking if cc supports -fno-rtti -fno-exceptions... no
checking for cc option to produce PIC... -fPIC -DPICf
checking if cc PIC flag -fPIC -DPIC works... yes
checking if cc static flag -static works... yes
checking if cc supports -c -o file.o... yes
checking if cc supports -c -o file.o... (cached) yes
checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking whether -lc should be explicitly linked in... no
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... yes
checking whether to build static libraries... no
checking how to run the C++ preprocessor... g++ -E
checking for ld used by g++... /usr/bin/ld -m elf_x86_64
checking if the linker (/usr/bin/ld -m elf_x86_64) is GNU ld... yes
checking whether the g++ linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking for g++ option to produce PIC... -fPIC -DPIC
checking if g++ PIC flag -fPIC -DPIC works... yes
checking if g++ static flag -static works... yes
checking if g++ supports -c -o file.o... yes
checking if g++ supports -c -o file.o... (cached) yes
checking whether the g++ linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... (cached) GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
configure: patching config.h.in
configure: creating ./config.status
config.status: creating config.h
config.status: executing libtool commands
running: make
/bin/bash /tmp/pear/temp/pear-build-rootMWFrfR/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootMWFrfR/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootMWFrfR/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/conn.cpp -o conn.lo  -MMD -MF conn.dep -MT conn.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootMWFrfR/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootMWFrfR/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/conn.cpp -MMD -MF conn.dep -MT conn.lo  -fPIC -DPIC -o .libs/conn.o
In file included from /tmp/pear/temp/sqlsrv/shared/typedefs_for_linux.h:23,
                 from /tmp/pear/temp/sqlsrv/shared/xplat_winnls.h:24,
                 from /tmp/pear/temp/sqlsrv/shared/FormattedPrint.h:24,
                 from /tmp/pear/temp/sqlsrv/shared/core_sqlsrv.h:41,
                 from /tmp/pear/temp/sqlsrv/php_sqlsrv_int.h:25,
                 from /tmp/pear/temp/sqlsrv/conn.cpp:24:
/tmp/pear/temp/sqlsrv/shared/xplat.h:30:10: fatal error: sql.h: No such file or directory
   30 | #include <sql.h>
      |          ^~~~~~~
compilation terminated.
make: *** [Makefile:210: conn.lo] Error 1
ERROR: `make' failed
root@jaimemontoya:/var/www/jaimemontoya.com# apt-get install unixodbc-dev
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
The following package was automatically installed and is no longer required:
  libwebp6
Use 'apt autoremove' to remove it.
The following additional packages will be installed:
  libodbc2 libodbccr2 libodbcinst2 unixodbc-common
Suggested packages:
  odbc-postgresql tdsodbc
The following NEW packages will be installed:
  libodbc2 libodbccr2 libodbcinst2 unixodbc-common unixodbc-dev
0 upgraded, 5 newly installed, 0 to remove and 144 not upgraded.
Need to get 464 kB of archives.
After this operation, 2,504 kB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libodbc2 amd64 2.3.9-5ubuntu0.1 [159 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libodbccr2 amd64 2.3.9-5ubuntu0.1 [16.7 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 unixodbc-common all 2.3.9-5ubuntu0.1 [9,256 B]
Get:4 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 libodbcinst2 amd64 2.3.9-5ubuntu0.1 [31.9 kB]
Get:5 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 unixodbc-dev amd64 2.3.9-5ubuntu0.1 [248 kB]
Fetched 464 kB in 0s (1,563 kB/s) 
Selecting previously unselected package libodbc2:amd64.
(Reading database ... 272489 files and directories currently installed.)
Preparing to unpack .../libodbc2_2.3.9-5ubuntu0.1_amd64.deb ...
Unpacking libodbc2:amd64 (2.3.9-5ubuntu0.1) ...
Selecting previously unselected package libodbccr2:amd64.
Preparing to unpack .../libodbccr2_2.3.9-5ubuntu0.1_amd64.deb ...
Unpacking libodbccr2:amd64 (2.3.9-5ubuntu0.1) ...
Selecting previously unselected package unixodbc-common.
Preparing to unpack .../unixodbc-common_2.3.9-5ubuntu0.1_all.deb ...
Unpacking unixodbc-common (2.3.9-5ubuntu0.1) ...
Selecting previously unselected package libodbcinst2:amd64.
Preparing to unpack .../libodbcinst2_2.3.9-5ubuntu0.1_amd64.deb ...
Unpacking libodbcinst2:amd64 (2.3.9-5ubuntu0.1) ...
Selecting previously unselected package unixodbc-dev:amd64.
Preparing to unpack .../unixodbc-dev_2.3.9-5ubuntu0.1_amd64.deb ...
Unpacking unixodbc-dev:amd64 (2.3.9-5ubuntu0.1) ...
Setting up unixodbc-common (2.3.9-5ubuntu0.1) ...
Setting up libodbc2:amd64 (2.3.9-5ubuntu0.1) ...
Setting up libodbccr2:amd64 (2.3.9-5ubuntu0.1) ...
Setting up libodbcinst2:amd64 (2.3.9-5ubuntu0.1) ...
Setting up unixodbc-dev:amd64 (2.3.9-5ubuntu0.1) ...
Processing triggers for man-db (2.10.2-1) ...
Processing triggers for libc-bin (2.35-0ubuntu3.7) ...
Scanning processes...                                                                                                                                                                                              
Scanning candidates...                                                                                                                                                                                             
Scanning linux images...                                                                                                                                                                                           

Running kernel seems to be up-to-date.

Restarting services...
Service restarts being deferred:
 systemctl restart NetworkManager.service
 /etc/needrestart/restart.d/dbus.service
 systemctl restart gdm.service
 systemctl restart gdm3.service
 systemctl restart networkd-dispatcher.service
 systemctl restart systemd-logind.service
 systemctl restart unattended-upgrades.service
 systemctl restart user@0.service
 systemctl restart user@126.service

No containers need to be restarted.

No user sessions are running outdated binaries.

No VM guests are running outdated hypervisor (qemu) binaries on this host.
root@jaimemontoya:/var/www/jaimemontoya.com#
</pre>
		   <div><img src=\"/blog/2024/05/03/16/18/img/installationsImage3.jpg\" alt=\"Installation - Image 3\" width=\"1171\" height=\"724\"></div>
<pre>
root@jaimemontoya:/var/www/jaimemontoya.com# pecl install sqlsrv pdo_sqlsrv
WARNING: channel \"pecl.php.net\" has updated its protocols, use \"pecl channel-update pecl.php.net\" to update
downloading sqlsrv-5.12.0.tgz ...
Starting to download sqlsrv-5.12.0.tgz (193,767 bytes)
.........................................done: 193,767 bytes
downloading pdo_sqlsrv-5.12.0.tgz ...
Starting to download pdo_sqlsrv-5.12.0.tgz (188,170 bytes)
...done: 188,170 bytes
34 source files, building
running: phpize
Configuring for:
PHP Api Version:         20230831
Zend Module Api No:      20230831
Zend Extension Api No:   420230831
configure.ac:165: warning: The macro `AC_PROG_LIBTOOL' is obsolete.
configure.ac:165: You should run autoupdate.
build/libtool.m4:99: AC_PROG_LIBTOOL is expanded from...
configure.ac:165: the top level
building in /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0
running: /tmp/pear/temp/sqlsrv/configure --with-php-config=/usr/bin/php-config
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
checking for a sed that does not truncate output... /usr/bin/sed
checking for pkg-config... /usr/bin/pkg-config
checking pkg-config is at least version 0.9.0... yes
checking for cc... cc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables...
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether the compiler supports GNU C... yes
checking whether cc accepts -g... yes
checking for cc option to enable C11 features... none needed
checking how to run the C preprocessor... cc -E
checking for icc... no
checking for suncc... no
checking for system library directory... lib
checking if compiler supports -Wl,-rpath,... yes
checking build system type... x86_64-pc-linux-gnu
checking host system type... x86_64-pc-linux-gnu
checking target system type... x86_64-pc-linux-gnu
checking for PHP prefix... /usr
checking for PHP includes... -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib
checking for PHP extension directory... /usr/lib/php/20230831
checking for PHP installed headers prefix... /usr/include/php/20230831
checking if debug is enabled... no
checking if zts is enabled... no
checking for gawk... gawk
checking whether to enable sqlsrv functions... yes, shared
checking for SQLSRV headers... /tmp/pear/temp/sqlsrv/shared/
checking for g++... g++
checking whether the compiler supports GNU C++... yes
checking whether g++ accepts -g... yes
checking for g++ option to enable C++11 features... none needed
checking how to run the C++ preprocessor... g++ -E
checking how to print strings... printf
checking for a sed that does not truncate output... (cached) /usr/bin/sed
checking for fgrep... /usr/bin/grep -F
checking for ld used by cc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 1572864
checking how to convert x86_64-pc-linux-gnu file names to x86_64-pc-linux-gnu format... func_convert_file_noop
checking how to convert x86_64-pc-linux-gnu file names to toolchain format... func_convert_file_noop
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for dlltool... no
checking how to associate runtime and link libraries... printf %s\n
checking for ar... ar
checking for archiver @FILE support... @
checking for strip... strip
checking for ranlib... ranlib
checking for gawk... (cached) gawk
checking command to parse /usr/bin/nm -B output from cc object... ok
checking for sysroot... no
checking for a working dd... /usr/bin/dd
checking how to truncate binary pipes... /usr/bin/dd bs=4096 count=1
checking for mt... mt
checking if mt is a manifest tool... no
checking for stdio.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for strings.h... yes
checking for sys/stat.h... yes
checking for sys/types.h... yes
checking for unistd.h... yes
checking for dlfcn.h... yes
checking for objdir... .libs
checking if cc supports -fno-rtti -fno-exceptions... no
checking for cc option to produce PIC... -fPIC -DPIC
checking if cc PIC flag -fPIC -DPIC works... yes
checking if cc static flag -static works... yes
checking if cc supports -c -o file.o... yes
checking if cc supports -c -o file.o... (cached) yes
checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking whether -lc should be explicitly linked in... no
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... yes
checking whether to build static libraries... no
checking how to run the C++ preprocessor... g++ -E
checking for ld used by g++... /usr/bin/ld -m elf_x86_64
checking if the linker (/usr/bin/ld -m elf_x86_64) is GNU ld... yes
checking whether the g++ linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking for g++ option to produce PIC... -fPIC -DPIC
checking if g++ PIC flag -fPIC -DPIC works... yes
checking if g++ static flag -static works... yes
checking if g++ supports -c -o file.o... yes
checking if g++ supports -c -o file.o... (cached) yes
checking whether the g++ linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... (cached) GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
configure: patching config.h.in
configure: creating ./config.status
config.status: creating config.h
config.status: executing libtool commands
running: make
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/conn.cpp -o conn.lo  -MMD -MF conn.dep -MT conn.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/conn.cpp -MMD -MF conn.dep -MT conn.lo  -fPIC -DPIC -o .libs/conn.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/util.cpp -o util.lo  -MMD -MF util.dep -MT util.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/util.cpp -MMD -MF util.dep -MT util.lo  -fPIC -DPIC -o .libs/util.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/init.cpp -o init.lo  -MMD -MF init.dep -MT init.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/init.cpp -MMD -MF init.dep -MT init.lo  -fPIC -DPIC -o .libs/init.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/stmt.cpp -o stmt.lo  -MMD -MF stmt.dep -MT stmt.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/stmt.cpp -MMD -MF stmt.dep -MT stmt.lo  -fPIC -DPIC -o .libs/stmt.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_conn.cpp -o shared/core_conn.lo  -MMD -MF shared/core_conn.dep -MT shared/core_conn.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_conn.cpp -MMD -MF shared/core_conn.dep -MT shared/core_conn.lo  -fPIC -DPIC -o shared/.libs/core_conn.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_results.cpp -o shared/core_results.lo  -MMD -MF shared/core_results.dep -MT shared/core_results.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_results.cpp -MMD -MF shared/core_results.dep -MT shared/core_results.lo  -fPIC -DPIC -o shared/.libs/core_results.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_stream.cpp -o shared/core_stream.lo  -MMD -MF shared/core_stream.dep -MT shared/core_stream.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_stream.cpp -MMD -MF shared/core_stream.dep -MT shared/core_stream.lo  -fPIC -DPIC -o shared/.libs/core_stream.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_init.cpp -o shared/core_init.lo  -MMD -MF shared/core_init.dep -MT shared/core_init.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_init.cpp -MMD -MF shared/core_init.dep -MT shared/core_init.lo  -fPIC -DPIC -o shared/.libs/core_init.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_stmt.cpp -o shared/core_stmt.lo  -MMD -MF shared/core_stmt.dep -MT shared/core_stmt.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_stmt.cpp -MMD -MF shared/core_stmt.dep -MT shared/core_stmt.lo  -fPIC -DPIC -o shared/.libs/core_stmt.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_util.cpp -o shared/core_util.lo  -MMD -MF shared/core_util.dep -MT shared/core_util.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/core_util.cpp -MMD -MF shared/core_util.dep -MT shared/core_util.lo  -fPIC -DPIC -o shared/.libs/core_util.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/FormattedPrint.cpp -o shared/FormattedPrint.lo  -MMD -MF shared/FormattedPrint.dep -MT shared/FormattedPrint.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/FormattedPrint.cpp -MMD -MF shared/FormattedPrint.dep -MT shared/FormattedPrint.lo  -fPIC -DPIC -o shared/.libs/FormattedPrint.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/localizationimpl.cpp -o shared/localizationimpl.lo  -MMD -MF shared/localizationimpl.dep -MT shared/localizationimpl.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/localizationimpl.cpp -MMD -MF shared/localizationimpl.dep -MT shared/localizationimpl.lo  -fPIC -DPIC -o shared/.libs/localizationimpl.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/StringFunctions.cpp -o shared/StringFunctions.lo  -MMD -MF shared/StringFunctions.dep -MT shared/StringFunctions.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/sqlsrv -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/sqlsrv/shared/StringFunctions.cpp -MMD -MF shared/StringFunctions.dep -MT shared/StringFunctions.lo  -fPIC -DPIC -o shared/.libs/StringFunctions.o
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CC --mode=link cc -shared -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/main -I/tmp/pear/temp/sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/sqlsrv/shared/  -DHAVE_CONFIG_H  -g -O2 -D_GNU_SOURCE    -o sqlsrv.la -export-dynamic -avoid-version -prefer-pic -module -rpath /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/modules  conn.lo util.lo init.lo stmt.lo shared/core_conn.lo shared/core_results.lo shared/core_stream.lo shared/core_init.lo shared/core_stmt.lo shared/core_util.lo shared/FormattedPrint.lo shared/localizationimpl.lo shared/StringFunctions.lo -Wl,-z,now -lstdc++ -lodbc -lodbcinst
libtool: link: cc -shared  -fPIC -DPIC  .libs/conn.o .libs/util.o .libs/init.o .libs/stmt.o shared/.libs/core_conn.o shared/.libs/core_results.o shared/.libs/core_stream.o shared/.libs/core_init.o shared/.libs/core_stmt.o shared/.libs/core_util.o shared/.libs/FormattedPrint.o shared/.libs/localizationimpl.o shared/.libs/StringFunctions.o   -lstdc++ -lodbc -lodbcinst  -g -O2 -Wl,-z -Wl,now   -Wl,-soname -Wl,sqlsrv.so -o .libs/sqlsrv.so
libtool: link: ( cd \".libs\" && rm -f \"sqlsrv.la\" && ln -s \"../sqlsrv.la\" \"sqlsrv.la\" )
/bin/bash /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/libtool --tag=CC --mode=install cp ./sqlsrv.la /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/modules
libtool: install: cp ./.libs/sqlsrv.so /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/modules/sqlsrv.so
libtool: install: cp ./.libs/sqlsrv.lai /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/modules/sqlsrv.la
libtool: finish: PATH=\"/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin:/sbin\" ldconfig -n /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/modules
----------------------------------------------------------------------
Libraries have been installed in:
   /tmp/pear/temp/pear-build-rootcfvZ36/sqlsrv-5.12.0/modules

If you ever happen to want to link against installed libraries
in a given directory, LIBDIR, you must either use libtool, and
specify the full pathname of the library, or use the '-LLIBDIR'
flag during linking and do at least one of the following:
   - add LIBDIR to the 'LD_LIBRARY_PATH' environment variable
     during execution
   - add LIBDIR to the 'LD_RUN_PATH' environment variable
     during linking
   - use the '-Wl,-rpath -Wl,LIBDIR' linker flag
   - have your system administrator add LIBDIR to '/etc/ld.so.conf'

See any operating system documentation about shared libraries for
more information, such as the ld(1) and ld.so(8) manual pages.
----------------------------------------------------------------------

Build complete.
Don't forget to run 'make test'.

running: make INSTALL_ROOT=\"/tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0\" install
Installing shared extensions:     /tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0/usr/lib/php/20230831/
running: find \"/tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0\" | xargs ls -dils
193922   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0
193928   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0/usr
193929   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0/usr/lib
193930   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0/usr/lib/php
193931   4 drwxr-xr-x 2 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0/usr/lib/php/20230831
 90326 416 -rwxr-xr-x 1 root root 422912 May  7 00:07 /tmp/pear/temp/pear-build-rootcfvZ36/install-sqlsrv-5.12.0/usr/lib/php/20230831/sqlsrv.so

Build process completed successfully
Installing '/usr/lib/php/20230831/sqlsrv.so'
install ok: channel://pecl.php.net/sqlsrv-5.12.0
35 source files, building
running: phpize
Configuring for:
PHP Api Version:         20230831
Zend Module Api No:      20230831
Zend Extension Api No:   420230831
configure.ac:165: warning: The macro `AC_PROG_LIBTOOL' is obsolete.
configure.ac:165: You should run autoupdate.
build/libtool.m4:99: AC_PROG_LIBTOOL is expanded from...
configure.ac:165: the top level
building in /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0
running: /tmp/pear/temp/pdo_sqlsrv/configure --with-php-config=/usr/bin/php-config
checking for grep that handles long lines and -e... /usr/bin/grep
checking for egrep... /usr/bin/grep -E
checking for a sed that does not truncate output... /usr/bin/sed
checking for pkg-config... /usr/bin/pkg-config
checking pkg-config is at least version 0.9.0... yes
checking for cc... cc
checking whether the C compiler works... yes
checking for C compiler default output file name... a.out
checking for suffix of executables...
checking whether we are cross compiling... no
checking for suffix of object files... o
checking whether the compiler supports GNU C... yes
checking whether cc accepts -g... yes
checking for cc option to enable C11 features... none needed
checking how to run the C preprocessor... cc -E
checking for icc... no
checking for suncc... no
checking for system library directory... lib
checking if compiler supports -Wl,-rpath,... yes
checking build system type... x86_64-pc-linux-gnu
checking host system type... x86_64-pc-linux-gnu
checking target system type... x86_64-pc-linux-gnu
checking for PHP prefix... /usr
checking for PHP includes... -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib
checking for PHP extension directory... /usr/lib/php/20230831
checking for PHP installed headers prefix... /usr/include/php/20230831
checking if debug is enabled... no
checking if zts is enabled... no
checking for gawk... gawk
checking for pdo_sqlsrv support... yes, shared
checking for PDO includes... /usr/include/php/20230831/ext
checking for PDO_SQLSRV headers... /tmp/pear/temp/pdo_sqlsrv/shared/
checking for g++... g++
checking whether the compiler supports GNU C++... yes
checking whether g++ accepts -g... yes
checking for g++ option to enable C++11 features... none needed
checking how to run the C++ preprocessor... g++ -E
checking how to print strings... printf
checking for a sed that does not truncate output... (cached) /usr/bin/sed
checking for fgrep... /usr/bin/grep -F
checking for ld used by cc... /usr/bin/ld
checking if the linker (/usr/bin/ld) is GNU ld... yes
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
checking the name lister (/usr/bin/nm -B) interface... BSD nm
checking whether ln -s works... yes
checking the maximum length of command line arguments... 1572864
checking how to convert x86_64-pc-linux-gnu file names to x86_64-pc-linux-gnu format... func_convert_file_noop
checking how to convert x86_64-pc-linux-gnu file names to toolchain format... func_convert_file_noop
checking for /usr/bin/ld option to reload object files... -r
checking for objdump... objdump
checking how to recognize dependent libraries... pass_all
checking for dlltool... no
checking how to associate runtime and link libraries... printf %s\n
checking for ar... ar
checking for archiver @FILE support... @
checking for strip... strip
checking for ranlib... ranlib
checking for gawk... (cached) gawk
checking command to parse /usr/bin/nm -B output from cc object... ok
checking for sysroot... no
checking for a working dd... /usr/bin/dd
checking how to truncate binary pipes... /usr/bin/dd bs=4096 count=1
checking for mt... mt
checking if mt is a manifest tool... no
checking for stdio.h... yes
checking for stdlib.h... yes
checking for string.h... yes
checking for inttypes.h... yes
checking for stdint.h... yes
checking for strings.h... yes
checking for sys/stat.h... yes
checking for sys/types.h... yes
checking for unistd.h... yes
checking for dlfcn.h... yes
checking for objdir... .libs
checking if cc supports -fno-rtti -fno-exceptions... no
checking for cc option to produce PIC... -fPIC -DPIC
checking if cc PIC flag -fPIC -DPIC works... yes
checking if cc static flag -static works... yes
checking if cc supports -c -o file.o... yes
checking if cc supports -c -o file.o... (cached) yes
checking whether the cc linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking whether -lc should be explicitly linked in... no
checking dynamic linker characteristics... GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
checking whether stripping libraries is possible... yes
checking if libtool supports shared libraries... yes
checking whether to build shared libraries... yes
checking whether to build static libraries... no
checking how to run the C++ preprocessor... g++ -E
checking for ld used by g++... /usr/bin/ld -m elf_x86_64
checking if the linker (/usr/bin/ld -m elf_x86_64) is GNU ld... yes
checking whether the g++ linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking for g++ option to produce PIC... -fPIC -DPIC
checking if g++ PIC flag -fPIC -DPIC works... yes
checking if g++ static flag -static works... yes
checking if g++ supports -c -o file.o... yes
checking if g++ supports -c -o file.o... (cached) yes
checking whether the g++ linker (/usr/bin/ld -m elf_x86_64) supports shared libraries... yes
checking dynamic linker characteristics... (cached) GNU/Linux ld.so
checking how to hardcode library paths into programs... immediate
configure: patching config.h.in
configure: creating ./config.status
config.status: creating config.h
config.status: executing libtool commands
running: make
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_dbh.cpp -o pdo_dbh.lo  -MMD -MF pdo_dbh.dep -MT pdo_dbh.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_dbh.cpp -MMD -MF pdo_dbh.dep -MT pdo_dbh.lo  -fPIC -DPIC -o .libs/pdo_dbh.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_parser.cpp -o pdo_parser.lo  -MMD -MF pdo_parser.dep -MT pdo_parser.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_parser.cpp -MMD -MF pdo_parser.dep -MT pdo_parser.lo  -fPIC -DPIC -o .libs/pdo_parser.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_util.cpp -o pdo_util.lo  -MMD -MF pdo_util.dep -MT pdo_util.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_util.cpp -MMD -MF pdo_util.dep -MT pdo_util.lo  -fPIC -DPIC -o .libs/pdo_util.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_init.cpp -o pdo_init.lo  -MMD -MF pdo_init.dep -MT pdo_init.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_init.cpp -MMD -MF pdo_init.dep -MT pdo_init.lo  -fPIC -DPIC -o .libs/pdo_init.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_stmt.cpp -o pdo_stmt.lo  -MMD -MF pdo_stmt.dep -MT pdo_stmt.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/pdo_stmt.cpp -MMD -MF pdo_stmt.dep -MT pdo_stmt.lo  -fPIC -DPIC -o .libs/pdo_stmt.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_conn.cpp -o shared/core_conn.lo  -MMD -MF shared/core_conn.dep -MT shared/core_conn.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_conn.cpp -MMD -MF shared/core_conn.dep -MT shared/core_conn.lo  -fPIC -DPIC -o shared/.libs/core_conn.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_results.cpp -o shared/core_results.lo  -MMD -MF shared/core_results.dep -MT shared/core_results.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_results.cpp -MMD -MF shared/core_results.dep -MT shared/core_results.lo  -fPIC -DPIC -o shared/.libs/core_results.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_stream.cpp -o shared/core_stream.lo  -MMD -MF shared/core_stream.dep -MT shared/core_stream.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_stream.cpp -MMD -MF shared/core_stream.dep -MT shared/core_stream.lo  -fPIC -DPIC -o shared/.libs/core_stream.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_init.cpp -o shared/core_init.lo  -MMD -MF shared/core_init.dep -MT shared/core_init.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_init.cpp -MMD -MF shared/core_init.dep -MT shared/core_init.lo  -fPIC -DPIC -o shared/.libs/core_init.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_stmt.cpp -o shared/core_stmt.lo  -MMD -MF shared/core_stmt.dep -MT shared/core_stmt.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_stmt.cpp -MMD -MF shared/core_stmt.dep -MT shared/core_stmt.lo  -fPIC -DPIC -o shared/.libs/core_stmt.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_util.cpp -o shared/core_util.lo  -MMD -MF shared/core_util.dep -MT shared/core_util.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/core_util.cpp -MMD -MF shared/core_util.dep -MT shared/core_util.lo  -fPIC -DPIC -o shared/.libs/core_util.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/FormattedPrint.cpp -o shared/FormattedPrint.lo  -MMD -MF shared/FormattedPrint.dep -MT shared/FormattedPrint.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/FormattedPrint.cpp -MMD -MF shared/FormattedPrint.dep -MT shared/FormattedPrint.lo  -fPIC -DPIC -o shared/.libs/FormattedPrint.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/localizationimpl.cpp -o shared/localizationimpl.lo  -MMD -MF shared/localizationimpl.dep -MT shared/localizationimpl.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/localizationimpl.cpp -MMD -MF shared/localizationimpl.dep -MT shared/localizationimpl.lo  -fPIC -DPIC -o shared/.libs/localizationimpl.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CXX --mode=compile g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector   -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/StringFunctions.cpp -o shared/StringFunctions.lo  -MMD -MF shared/StringFunctions.dep -MT shared/StringFunctions.lo
libtool: compile:  g++ -I. -I/tmp/pear/temp/pdo_sqlsrv -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/ -DHAVE_CONFIG_H -std=c++11 -D_FORTIFY_SOURCE=2 -O2 -fstack-protector -I/usr/include/php/20230831/ext -std=c++11 -DZEND_COMPILE_DL_EXT=1 -c /tmp/pear/temp/pdo_sqlsrv/shared/StringFunctions.cpp -MMD -MF shared/StringFunctions.dep -MT shared/StringFunctions.lo  -fPIC -DPIC -o shared/.libs/StringFunctions.o
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CC --mode=link cc -shared -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/include -I/tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/main -I/tmp/pear/temp/pdo_sqlsrv -I/usr/include/php/20230831 -I/usr/include/php/20230831/main -I/usr/include/php/20230831/TSRM -I/usr/include/php/20230831/Zend -I/usr/include/php/20230831/ext -I/usr/include/php/20230831/ext/date/lib -I/tmp/pear/temp/pdo_sqlsrv/shared/  -DHAVE_CONFIG_H  -g -O2 -D_GNU_SOURCE    -o pdo_sqlsrv.la -export-dynamic -avoid-version -prefer-pic -module -rpath /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/modules  pdo_dbh.lo pdo_parser.lo pdo_util.lo pdo_init.lo pdo_stmt.lo shared/core_conn.lo shared/core_results.lo shared/core_stream.lo shared/core_init.lo shared/core_stmt.lo shared/core_util.lo shared/FormattedPrint.lo shared/localizationimpl.lo shared/StringFunctions.lo -Wl,-z,now -lstdc++ -lodbc -lodbcinst
libtool: link: cc -shared  -fPIC -DPIC  .libs/pdo_dbh.o .libs/pdo_parser.o .libs/pdo_util.o .libs/pdo_init.o .libs/pdo_stmt.o shared/.libs/core_conn.o shared/.libs/core_results.o shared/.libs/core_stream.o shared/.libs/core_init.o shared/.libs/core_stmt.o shared/.libs/core_util.o shared/.libs/FormattedPrint.o shared/.libs/localizationimpl.o shared/.libs/StringFunctions.o   -lstdc++ -lodbc -lodbcinst  -g -O2 -Wl,-z -Wl,now   -Wl,-soname -Wl,pdo_sqlsrv.so -o .libs/pdo_sqlsrv.so
libtool: link: ( cd \".libs\" && rm -f \"pdo_sqlsrv.la\" && ln -s \"../pdo_sqlsrv.la\" \"pdo_sqlsrv.la\" )
/bin/bash /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/libtool --tag=CC --mode=install cp ./pdo_sqlsrv.la /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/modules
libtool: install: cp ./.libs/pdo_sqlsrv.so /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/modules/pdo_sqlsrv.so
libtool: install: cp ./.libs/pdo_sqlsrv.lai /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/modules/pdo_sqlsrv.la
libtool: finish: PATH=\"/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin:/sbin\" ldconfig -n /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/modules
----------------------------------------------------------------------
Libraries have been installed in:
   /tmp/pear/temp/pear-build-rootgDGs20/pdo_sqlsrv-5.12.0/modules

If you ever happen to want to link against installed libraries
in a given directory, LIBDIR, you must either use libtool, and
specify the full pathname of the library, or use the '-LLIBDIR'
flag during linking and do at least one of the following:
   - add LIBDIR to the 'LD_LIBRARY_PATH' environment variable
     during execution
   - add LIBDIR to the 'LD_RUN_PATH' environment variable
     during linking
   - use the '-Wl,-rpath -Wl,LIBDIR' linker flag
   - have your system administrator add LIBDIR to '/etc/ld.so.conf'

See any operating system documentation about shared libraries for
more information, such as the ld(1) and ld.so(8) manual pages.
----------------------------------------------------------------------

Build complete.
Don't forget to run 'make test'.

running: make INSTALL_ROOT=\"/tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0\" install
Installing shared extensions:     /tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0/usr/lib/php/20230831/
running: find \"/tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0\" | xargs ls -dils
193942   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0
193948   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0/usr
193949   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0/usr/lib
193950   4 drwxr-xr-x 3 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0/usr/lib/php
193951   4 drwxr-xr-x 2 root root   4096 May  7 00:07 /tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0/usr/lib/php/20230831
 90571 416 -rwxr-xr-x 1 root root 423760 May  7 00:07 /tmp/pear/temp/pear-build-rootgDGs20/install-pdo_sqlsrv-5.12.0/usr/lib/php/20230831/pdo_sqlsrv.so

Build process completed successfully
Installing '/usr/lib/php/20230831/pdo_sqlsrv.so'
install ok: channel://pecl.php.net/pdo_sqlsrv-5.12.0
configuration option \"php_ini\" is not set to php.ini location
You should add \"extension=sqlsrv.so\" to php.ini
configuration option \"php_ini\" is not set to php.ini location
You should add \"extension=sqlsrv.so\" to php.ini
configuration option \"php_ini\" is not set to php.ini location
You should add \"extension=pdo_sqlsrv.so\" to php.ini
root@jaimemontoya:/var/www/jaimemontoya.com# cd /etc/php
root@jaimemontoya:/etc/php# ls -al
total 36
drwxr-xr-x   7 root root  4096 Jan 16 03:02 .
drwxr-xr-x 161 root root 12288 May  7 00:03 ..
drwxr-xr-x   6 root root  4096 Aug  7  2019 7.0
drwxr-xr-x   5 root root  4096 Aug  7  2019 7.3
drwxr-xr-x   5 root root  4096 Nov  6  2021 8.0
drwxr-xr-x   5 root root  4096 Aug 17  2023 8.1
drwxr-xr-x   5 root root  4096 Jan 16 03:02 8.3
root@jaimemontoya:/etc/php# php -v
PHP 8.3.6 (cli) (built: Apr 11 2024 20:23:38) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.6, Copyright (c) Zend Technologies
    with Zend OPcache v8.3.6, Copyright (c), by Zend Technologies
root@jaimemontoya:/etc/php# printf \"; priority=20\nextension=sqlsrv.so\n\" > /etc/php/8.3/mods-available/sqlsrv.ini
root@jaimemontoya:/etc/php# printf \"; priority=30\nextension=pdo_sqlsrv.so\n\" > /etc/php/8.3/mods-available/pdo_sqlsrv.ini
root@jaimemontoya:/etc/php# phpenmod -v 8.3 sqlsrv pdo_sqlsrv
root@jaimemontoya:/etc/php# systemctl restart apache2
root@jaimemontoya:/var/www/jaimemontoya.com# php -i | grep sqlsrv
/etc/php/8.3/cli/conf.d/20-sqlsrv.ini,
/etc/php/8.3/cli/conf.d/30-pdo_sqlsrv.ini
Registered PHP Streams => https, ftps, compress.zlib, php, file, glob, data, http, ftp, phar, sqlsrv
PDO drivers => mysql, sqlsrv
pdo_sqlsrv
pdo_sqlsrv support => enabled
pdo_sqlsrv.client_buffer_max_kb_size => 10240 => 10240
pdo_sqlsrv.log_severity => 0 => 0
pdo_sqlsrv.report_additional_errors => 1 => 1
pdo_sqlsrv.set_locale_info => 2 => 2
sqlsrv
sqlsrv support => enabled
sqlsrv.ClientBufferMaxKBSize => 10240 => 10240
sqlsrv.LogSeverity => 0 => 0
sqlsrv.LogSubsystems => 0 => 0
sqlsrv.SetLocaleInfo => 2 => 2
sqlsrv.WarningsReturnAsErrors => On => On
root@jaimemontoya:/var/www/jaimemontoya.com# php -v
PHP 8.3.6 (cli) (built: Apr 11 2024 20:23:38) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.6, Copyright (c) Zend Technologies
    with Zend OPcache v8.3.6, Copyright (c), by Zend Technologies
root@jaimemontoya:/var/www/jaimemontoya.com# a2dismod php8.1
Module php8.1 disabled.
To activate the new configuration, you need to run:
  systemctl restart apache2
root@jaimemontoya:/var/www/jaimemontoya.com# a2enmod php8.3
Considering dependency mpm_prefork for php8.3:
Considering conflict mpm_event for mpm_prefork:
Considering conflict mpm_worker for mpm_prefork:
Module mpm_prefork already enabled
Considering conflict php5 for php8.3:
Enabling module php8.3.
To activate the new configuration, you need to run:
  systemctl restart apache2
root@jaimemontoya:/var/www/jaimemontoya.com# systemctl restart apache2
root@jaimemontoya:/var/www/jaimemontoya.com# php -v
PHP 8.3.6 (cli) (built: Apr 11 2024 20:23:38) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.3.6, Copyright (c) Zend Technologies
    with Zend OPcache v8.3.6, Copyright (c), by Zend Technologies
root@jaimemontoya:/var/www/jaimemontoya.com# apt-get install libapache2-mod-php8.3 apache2                                                                                                                                                   Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
apache2 is already the newest version (2.4.52-1ubuntu4.9).
libapache2-mod-php8.3 is already the newest version (8.3.6-1+ubuntu22.04.1+deb.sury.org+1).
libapache2-mod-php8.3 set to manually installed.
The following package was automatically installed and is no longer required:
  libwebp6
Use 'apt autoremove' to remove it.
0 upgraded, 0 newly installed, 0 to remove and 144 not upgraded.
root@jaimemontoya:/var/www/jaimemontoya.com# a2dismod mpm_event
Module mpm_event already disabled
root@jaimemontoya:/var/www/jaimemontoya.com# a2enmod mpm_prefork
Considering conflict mpm_event for mpm_prefork:
Considering conflict mpm_worker for mpm_prefork:
Module mpm_prefork already enabled
root@jaimemontoya:/var/www/jaimemontoya.com# a2enmod php8.3
Considering dependency mpm_prefork for php8.3:
Considering conflict mpm_event for mpm_prefork:
Considering conflict mpm_worker for mpm_prefork:
Module mpm_prefork already enabled
Considering conflict php5 for php8.3:
Module php8.3 already enabled
root@jaimemontoya:/var/www/jaimemontoya.com# service apache2 restart
root@jaimemontoya:/var/www/jaimemontoya.com# curl https://packages.microsoft.com/keys/microsoft.asc | sudo tee /etc/apt/trusted.gpg.d/microsoft.asc
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed
100   983  100   983    0     0   7012      0 --:--:-- --:--:-- --:--:--  7021
-----BEGIN PGP PUBLIC KEY BLOCK-----
Version: GnuPG v1.4.7 (GNU/Linux)

mQENBFYxWIwBCADAKoZhZlJxGNGWzqV+1OG1xiQeoowKhssGAKvd+buXCGISZJwT
LXZqIcIiLP7pqdcZWtE9bSc7yBY2MalDp9Liu0KekywQ6VVX1T72NPf5Ev6x6DLV
7aVWsCzUAF+eb7DC9fPuFLEdxmOEYoPjzrQ7cCnSV4JQxAqhU4T6OjbvRazGl3ag
OeizPXmRljMtUUttHQZnRhtlzkmwIrUivbfFPD+fEoHJ1+uIdfOzZX8/oKHKLe2j
H632kvsNzJFlROVvGLYAk2WRcLu+RjjggixhwiB+Mu/A8Tf4V6b+YppS44q8EvVr
M+QvY7LNSOffSO6Slsy9oisGTdfE39nC7pVRABEBAAG0N01pY3Jvc29mdCAoUmVs
ZWFzZSBzaWduaW5nKSA8Z3Bnc2VjdXJpdHlAbWljcm9zb2Z0LmNvbT6JATUEEwEC
AB8FAlYxWIwCGwMGCwkIBwMCBBUCCAMDFgIBAh4BAheAAAoJEOs+lK2+EinPGpsH
/32vKy29Hg51H9dfFJMx0/a/F+5vKeCeVqimvyTM04C+XENNuSbYZ3eRPHGHFLqe
MNGxsfb7C7ZxEeW7J/vSzRgHxm7ZvESisUYRFq2sgkJ+HFERNrqfci45bdhmrUsy
7SWw9ybxdFOkuQoyKD3tBmiGfONQMlBaOMWdAsic965rvJsd5zYaZZFI1UwTkFXV
KJt3bp3Ngn1vEYXwijGTa+FXz6GLHueJwF0I7ug34DgUkAFvAs8Hacr2DRYxL5RJ
XdNgj4Jd2/g6T9InmWT0hASljur+dJnzNiNCkbn9KbX7J/qK1IbR8y560yRmFsU+
NdCFTW7wY0Fb1fWJ+/KTsC4=
=J6gs
-----END PGP PUBLIC KEY BLOCK-----
root@jaimemontoya:/var/www/jaimemontoya.com# curl https://packages.microsoft.com/config/ubuntu/$(lsb_release -rs)/prod.list | sudo tee /etc/apt/sources.list.d/mssql-release.list
  % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                 Dload  Upload   Total   Spent    Left  Speed
100    88  100    88    0     0    852      0 --:--:-- --:--:-- --:--:--   854
root@jaimemontoya:/var/www/jaimemontoya.com# apt-get update
Hit:1 http://us.archive.ubuntu.com/ubuntu jammy InRelease
Get:2 http://us.archive.ubuntu.com/ubuntu jammy-updates InRelease [119 kB]
Get:3 http://us.archive.ubuntu.com/ubuntu jammy-security InRelease [110 kB]
Hit:4 http://archive.ubuntu.com/ubuntu jammy InRelease
Hit:5 http://dl.google.com/linux/chrome/deb stable InRelease
Hit:6 https://repos.insights.digitalocean.com/apt/do-agent main InRelease
Hit:7 https://repos-droplet.digitalocean.com/apt/droplet-agent main InRelease
Get:8 https://packages.microsoft.com/ubuntu/22.04/prod jammy InRelease [3,632 B]
Hit:9 https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy InRelease
Get:10 http://us.archive.ubuntu.com/ubuntu jammy-updates/main amd64 Packages [1,617 kB]
Get:11 http://us.archive.ubuntu.com/ubuntu jammy-updates/main Translation-en [305 kB]
Get:12 http://us.archive.ubuntu.com/ubuntu jammy-updates/restricted amd64 Packages [1,836 kB]
Get:13 http://us.archive.ubuntu.com/ubuntu jammy-updates/restricted Translation-en [312 kB]
Get:14 http://us.archive.ubuntu.com/ubuntu jammy-security/main amd64 Packages [1,395 kB]
Get:15 http://us.archive.ubuntu.com/ubuntu jammy-security/main Translation-en [244 kB]
Get:16 http://us.archive.ubuntu.com/ubuntu jammy-security/restricted Translation-en [300 kB]
Get:17 http://us.archive.ubuntu.com/ubuntu jammy-security/universe amd64 Packages [849 kB]
Get:18 http://us.archive.ubuntu.com/ubuntu jammy-security/universe Translation-en [163 kB]
Get:19 https://packages.microsoft.com/ubuntu/22.04/prod jammy/main amd64 Packages [144 kB]
Get:20 https://packages.microsoft.com/ubuntu/22.04/prod jammy/main arm64 Packages [36.7 kB]
Get:21 https://packages.microsoft.com/ubuntu/22.04/prod jammy/main all Packages [1,035 B]
Get:22 https://packages.microsoft.com/ubuntu/22.04/prod jammy/main armhf Packages [12.9 kB]
Fetched 7,449 kB in 4s (1,876 kB/s)
Reading package lists... Done
</pre>
		   <div><img src=\"/blog/2024/05/03/16/18/img/installationsImage4.jpg\" alt=\"Installation - Image 4\" width=\"1148\" height=\"683\"></div>
<pre>
root@jaimemontoya:/var/www/jaimemontoya.com# ACCEPT_EULA=Y apt-get install -y msodbcsql18
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
The following package was automatically installed and is no longer required:
  libwebp6
Use 'apt autoremove' to remove it.
The following additional packages will be installed:
  odbcinst unixodbc
The following NEW packages will be installed:
  msodbcsql18 odbcinst unixodbc
0 upgraded, 3 newly installed, 0 to remove and 144 not upgraded.
Need to get 792 kB of archives.
After this operation, 164 kB of additional disk space will be used.
Get:1 https://packages.microsoft.com/ubuntu/22.04/prod jammy/main amd64 msodbcsql18 amd64 18.3.3.1-1 [755 kB]
Get:2 http://us.archive.ubuntu.com/ubuntu jammy-updates/universe amd64 odbcinst amd64 2.3.9-5ubuntu0.1 [9,930 B]
Get:3 http://us.archive.ubuntu.com/ubuntu jammy-updates/universe amd64 unixodbc amd64 2.3.9-5ubuntu0.1 [26.7 kB]
Fetched 792 kB in 0s (4,301 kB/s)
Preconfiguring packages ...
Selecting previously unselected package odbcinst.
(Reading database ... 272532 files and directories currently installed.)
Preparing to unpack .../odbcinst_2.3.9-5ubuntu0.1_amd64.deb ...
Unpacking odbcinst (2.3.9-5ubuntu0.1) ...
Selecting previously unselected package unixodbc.
Preparing to unpack .../unixodbc_2.3.9-5ubuntu0.1_amd64.deb ...
Unpacking unixodbc (2.3.9-5ubuntu0.1) ...
Selecting previously unselected package msodbcsql18.
Preparing to unpack .../msodbcsql18_18.3.3.1-1_amd64.deb ...
Unpacking msodbcsql18 (18.3.3.1-1) ...
Setting up odbcinst (2.3.9-5ubuntu0.1) ...
Setting up unixodbc (2.3.9-5ubuntu0.1) ...
Setting up msodbcsql18 (18.3.3.1-1) ...
odbcinst: Driver installed. Usage count increased to 1.
    Target directory is /etc
Processing triggers for man-db (2.10.2-1) ...
Scanning processes...
Scanning candidates...
Scanning linux images...

Running kernel seems to be up-to-date.

Restarting services...
Service restarts being deferred:
 systemctl restart NetworkManager.service
 /etc/needrestart/restart.d/dbus.service
 systemctl restart gdm.service
 systemctl restart gdm3.service
 systemctl restart networkd-dispatcher.service
 systemctl restart systemd-logind.service
 systemctl restart unattended-upgrades.service
 systemctl restart user@126.service

No containers need to be restarted.

No user sessions are running outdated binaries.

No VM guests are running outdated hypervisor (qemu) binaries on this host.
root@jaimemontoya:/var/www/jaimemontoya.com# service apache2 restart
</pre>
		   <p>I created the file <span class=\"cod\">sqltest.php</span> in the root directory of my website, containing the following code:</p>
<pre>
<&quest;php
	phpinfo();
&quest;>
</pre>
           <p>My server was running PHP Version 8.3.6:</p><div><img src=\"/blog/2024/05/03/16/18/img/showPHPVersion.jpg\" alt=\"Show PHP version\" width=\"1267\" height=\"980\"></div><p>This was the configuration before the installation:</p><div><img src=\"/blog/2024/05/03/16/18/img/configurationBeforeInstallation.jpg\" alt=\"Configuration before installation\" width=\"1270\" height=\"976\"></div><p>This was the configuration after the installation:</p><div><img src=\"/blog/2024/05/03/16/18/img/configurationAfterInstallation.jpg\" alt=\"Configuration after installation\" width=\"1299\" height=\"974\"></div><p>I changed the content of the file <span class=\"cod\">sqltest.php</span> in the root directory of my website, containing the code to query my Azure SQL Database:</p>
<pre>
<&quest;php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$serverName = \"jaimemontoya.database.windows.net\"; // update me
	$connectionOptions = array(
        \"Database\" => \"Finances\", // update me
        \"Uid\" => \"fakeuservalue\", // update me
        \"PWD\" => \"MyPassword!9\" // update me
    );
	//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= \"SELECT DayID FROM DimDay ORDER BY DayID DESC\";
	var_dump($conn);
	if( $conn ) {
		echo \"Connection established.&lt;br /&gt;\";
	}else{
		echo \"Connection could not be established.&lt;br /&gt;\";
		die( print_r( sqlsrv_errors(), true));
	}
    $getResults= sqlsrv_query($conn, $tsql);
	echo (\"Reading data from table:\" . \"&lt;br /&gt;\");
&quest;>
</pre>
		   <p>The connection was successful, retrieving data from a table in the database:</p><div><img src=\"/blog/2024/05/03/16/18/img/resultsRetrievedFromDatabase.jpg\" alt=\"Results retrieved from database\" width=\"461\" height=\"987\"></div><div>Published: 4:18 PM GMT · May 3, 2024</div>\n";
?>
