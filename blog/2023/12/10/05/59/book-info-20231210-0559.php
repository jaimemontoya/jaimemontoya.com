<?php
  $index->content .= 
           "<p>The website unionchurchss.org was hosted on InMotion Hosting. According to <a href=\"https://whois.domaintools.com/unionchurchss.org\">https://whois.domaintools.com/unionchurchss.org</a>, there were \"344 other sites hosted on this server\":</p><div><img src=\"/blog/2023/12/10/05/59/img/inMotionHostingSharedServer.jpg\" alt=\"InMotion Hosting shared server\" width=\"504\" height=\"886\"></div><p>My first step was to use FTP to download WordPress source code and content files hosted on the InMotion Hosting server. I went to my cPanel account at <a href=\"https://secure261.inmotionhosting.com:2083/\">https://secure261.inmotionhosting.com:2083/</a> to obtain my FTP credentials:</p><div><img src=\"/blog/2023/12/10/05/59/img/cPanelLoginScreen.jpg\" alt=\"cPanel login screen\" width=\"546\" height=\"622\"></div><p>This was the first screen after a successful cPanel login:</p><div><img src=\"/blog/2023/12/10/05/59/img/cPanelFirstScreen.jpg\" alt=\"cPanel first screen\" width=\"1851\" height=\"965\"></div><p>I scrolled down to find the FTP Accounts link:</p><div><img src=\"/blog/2023/12/10/05/59/img/ftpAccountsLinkFromcPanel.jpg\" alt=\"FTP Accounts link from cPanel\" width=\"1215\" height=\"976\"></div><p>I found the FTP Username Account that I needed to connect to the server using FTP:</p><div><img src=\"/blog/2023/12/10/05/59/img/ftpUsernameAccountFound.jpg\" alt=\"FTP Username Account found\" width=\"946\" height=\"418\"></div><p>The information above does not specify Host nor the password to connect via FTP. But I found the password from my records of when I created the InMotion Hosting account. For the Host value, I could use either <span class=\"cod\">173.231.209.31</span> (the shared IP address) or <span class=\"cod\">secure261.inmotionhosting.com</span>. That was all I needed to connect to the server using FTP via FileZilla:</p><div><img src=\"/blog/2023/12/10/05/59/img/connectUsingFTPViaFileZilla.jpg\" alt=\"Connect using FTP via FileZilla\" width=\"703\" height=\"97\"></div><p>I clicked OK to the Unknown certificate pop-up message:</p><div><img src=\"/blog/2023/12/10/05/59/img/unknownCertificateFileZillaConnection.jpg\" alt=\"Unknown certificate FileZilla connection\" width=\"705\" height=\"919\"></div><p>My WordPress files on the server were displayed under the <span class=\"cod\">/unionchurchss.org</span> folder:</p><div><img src=\"/blog/2023/12/10/05/59/img/wordPressFilesOnServer.jpg\" alt=\"WordPress files on server\" width=\"1296\" height=\"783\"></div><p>20406 files were transferred successfully:</p><div><img src=\"/blog/2023/12/10/05/59/img/successfulTransfers.jpg\" alt=\"Successful transfers\" width=\"1915\" height=\"1028\"></div><p>The process resulted in 310 failed transfers:</p><div><img src=\"/blog/2023/12/10/05/59/img/failedTransfers.jpg\" alt=\"Successful transfers\" width=\"1919\" height=\"1029\"></div><p>All of the failed transfers are from this directory: <span class=\"cod\">unionchurchss.org&bsol;wp-content&bsol;plugins&bsol;boldgrid-backup-premium&bsol;vendor&bsol;google&bsol;apiclient-services&bsol;src&bsol;Google&bsol;Service&bsol;</span>. I could safely ignore those failed transfers because that was not going to affect what I needed for the functionality of my website.</p><p>The 20,406 downloaded files, together have a size of 5.15 GB:</p><div><img src=\"/blog/2023/12/10/05/59/img/showSizeOfDownloadedFiles.jpg\" alt=\"Show size of downloaded files\" width=\"466\" height=\"580\"></div><p>My next step was to download the MySQL database. From cPanel, I clicked the phpMyAdmin link:</p><div><img src=\"/blog/2023/12/10/05/59/img/clickPhpMyAdmin.jpg\" alt=\"Click phpMyAdmin\" width=\"1053\" height=\"809\"></div><p>That took me to <a href=\"https://secure261.inmotionhosting.com:2083/cpsess9515791293/3rdparty/phpMyAdmin/index.php\">https://secure261.inmotionhosting.com:2083/cpsess9515791293/3rdparty/phpMyAdmin/index.php</a>, where my database was listed as <span class=\"cod\">unionc10_wp96857</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/showPhpMyAdminInterface.jpg\" alt=\"Show phpMyAdmin interface\" width=\"1913\" height=\"983\"></div><p>This is the list of tables in the database:</p><div><img src=\"/blog/2023/12/10/05/59/img/databaseListOfTables.jpg\" alt=\"Database list of tables\" width=\"213\" height=\"554\"></div><p>I clicked the Databases tab and after that, I clicked the database that I wanted to export:</p><div><img src=\"/blog/2023/12/10/05/59/img/clickDatabaseToExport.jpg\" alt=\"Click database to export\" width=\"1197\" height=\"558\"></div><p>Then I clicked the Export tab:</p><div><img src=\"/blog/2023/12/10/05/59/img/exportDatabase.jpg\" alt=\"Export database\" width=\"1306\" height=\"946\"></div><p>I used the <span class=\"cod\">Quick - display only the minimal options</span> export method and <span class=\"cod\">SQL</span> as the output format. Then I clicked <span class=\"cod\">Export</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/finalStepsToExportDatabase.jpg\" alt=\"Final steps to export database\" width=\"1721\" height=\"569\"></div><p>The database was downloaded successfully as a <span class=\"cod\">.sql</span> file. Its size was 5.37 MB:</p><div><img src=\"/blog/2023/12/10/05/59/img/databaseDownloadedSuccessfully.jpg\" alt=\"Database downloaded successfully\" width=\"564\" height=\"644\"></div><p>I visited <a href=\"https://digitalocean.com\">https://digitalocean.com</a> and from my account, I clicked <span class=\"cod\">Create a Team</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/createATeamOnDigitalOcean.jpg\" alt=\"Create a Team\" width=\"268\" height=\"401\"></div><p>I provided the new team information and clicked <span class=\"cod\">Continue</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/createNewTeam.jpg\" alt=\"Create new team\" width=\"719\" height=\"631\"></div><p>A verification link was sent to the email address I provided:</p><div><img src=\"/blog/2023/12/10/05/59/img/verificationLinkSentToMyEmail.jpg\" alt=\"Create a Team\" width=\"714\" height=\"691\"></div><p>I received a welcome email:</p><div><img src=\"/blog/2023/12/10/05/59/img/digitalOceanWelcomeEmail.jpg\" alt=\"DigitalOcean welcome email\" width=\"1008\" height=\"834\"></div><p>I received a second email with a link to verify my email:</p><div><img src=\"/blog/2023/12/10/05/59/img/verifyEmail.jpg\" alt=\"Verify email\" width=\"1228\" height=\"200\"></div><p>Clicking the link to verify my email address took me to the <span class=\"cod\">Add Payment Method</span> section, where I provided my credit card information.</p><div><img src=\"/blog/2023/12/10/05/59/img/addPaymentMethod.jpg\" alt=\"Add Payment Method\" width=\"1358\" height=\"851\"></div><p>The last step was optional and I decided to skip it for now:</p><div><img src=\"/blog/2023/12/10/05/59/img/inviteMembers.jpg\" alt=\"Invite Members\" width=\"1360\" height=\"788\"></div><p>I was charged $1 as a pre-authorization \"hold\" charge on my card used to verify my card, which will be released within a day or two:</p><div><img src=\"/blog/2023/12/10/05/59/img/digitalOceanVerificationCharge.jpg\" alt=\"Invite Members\" width=\"482\" height=\"29\"></div><p>I visited <a href=\"https://marketplace.digitalocean.com/apps/wordpress\">https://marketplace.digitalocean.com/apps/wordpress</a> and clicked <span class=\"cod\">Create WordPress Droplet</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/createWordPressDroplet.jpg\" alt=\"Create WordPress Droplet\" width=\"1801\" height=\"963\"></div><p>I chose <span class=\"cod\">Toronto</span> as the Region:</p><div><img src=\"/blog/2023/12/10/05/59/img/chooseTorontoRegion.jpg\" alt=\"Choose Toronto Region\" width=\"1856\" height=\"968\"></div><p>I scrolled down and in the <span class=\"cod\">Choose an image</span> section, I added a MySQL Managed Database for an additional $15.00/month:</p><div><img src=\"/blog/2023/12/10/05/59/img/addMySQLManagedDatabase.jpg\" alt=\"Add MySQL Managed Database\" width=\"1860\" height=\"944\"></div><p>I scrolled down and in the <span class=\"cod\">CPU options</span> section, I chose <span class=\"cod\">Regular Disk type: SSD</span> and <span class=\"cod\">$6 /mo | $0.009 /hour (1 GB / 1 CPU | 25 GB SSD Disk | 1000 GB transfer)</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/choose6USDOption.jpg\" alt=\"Choose Toronto Region\" width=\"1857\" height=\"941\"></div><p>I scrolled down to the <span class=\"cod\">Choose Authentication Method</span> section and chose <span class=\"cod\">Password - Connect to your Droplet as the \"root\" user via password</span>, where I created my <span class=\"cod\">root</span> password:</p><div><img src=\"/blog/2023/12/10/05/59/img/createRootPassword.jpg\" alt=\"Create root password\" width=\"1857\" height=\"949\"></div><p>I enabled backups for an additional $1.20/month because I was going to production, and gave my Droplet an identifying name that I will remember it by: <span class=\"cod\">unionchurchss.org</span>. The price will be $22.20/month or $0.033/hour. Finally, I clicked <span class=\"cod\">Create Droplet</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/enableBackupsAndCreateDroplet.jpg\" alt=\"Enable backups and create Droplet\" width=\"1859\" height=\"974\"></div><p>It took a few minutes for the new Droplet and MySQL Managed Database to be created. When the creation was completed, I saw both listed as resources:</p><div><img src=\"/blog/2023/12/10/05/59/img/dropletAndDatabaseCreatedSuccessfully.jpg\" alt=\"Droplet and database created successfully\" width=\"1858\" height=\"967\"></div><p>In the <span class=\"cod\">Settings</span> section, I updated the project details:</p><div><img src=\"/blog/2023/12/10/05/59/img/updateProjectDetails.jpg\" alt=\"Update project details\" width=\"1859\" height=\"965\"></div><p>Now I see my project with proper descriptions:</p><div><img src=\"/blog/2023/12/10/05/59/img/properProjectDescriptions.jpg\" alt=\"Proper project descriptions\" width=\"1856\" height=\"966\"></div><p>Go to the new Droplet and click <span class=\"cod\">Graphs</span>. Notice that there is a message about an upgrade available for additional metrics and alerting:</p><div><img src=\"/blog/2023/12/10/05/59/img/upgradeForAdditionalMetricsAndAlerting.jpg\" alt=\"Upgrade for additional metrics and alerting\" width=\"1867\" height=\"970\"></div><p>Without the upgrade, only three metrics are available: <span class=\"cod\">Bandwidth</span>, <span class=\"cod\">CPU Usage</span> and <span class=\"cod\">Disk I/O</span>.</p><div><img src=\"/blog/2023/12/10/05/59/img/metricsWithoutTheUpgrade.jpg\" alt=\"Upgrade for additional metrics and alerting\" width=\"1860\" height=\"966\"></div><p>I used PuTTY to log in to my Droplet:</p><div><img src=\"/blog/2023/12/10/05/59/img/loginToDropletUsingPuTTY.jpg\" alt=\"Log in to Droplet using PuTTY\" width=\"446\" height=\"437\"></div><p>After clicking <span class=\"cod\">Open</span>, this pop-up security alert appeared:</p><div><img src=\"/blog/2023/12/10/05/59/img/puttySecurityAlert.jpg\" alt=\"PuTTY Security Alert\" width=\"504\" height=\"287\"></div><p>I clicked <span class=\"cod\">Accept</span>. Then I connected as <span class=\"cod\">root</span>:</p><div><img src=\"/blog/2023/12/10/05/59/img/loginAsRoot.jpg\" alt=\"Login as root\" width=\"176\" height=\"75\"></div><p>Provide <span class=\"cod\">root</span> password to login:</p><div><img src=\"/blog/2023/12/10/05/59/img/providePasswordToLogin.jpg\" alt=\"Login as root\" width=\"311\" height=\"73\"></div><p>This was the initial output after a successful login:</p><div><img src=\"/blog/2023/12/10/05/59/img/puttyOutputAfterSuccessfulLogin.jpg\" alt=\"PuTTY output after successful login\" width=\"646\" height=\"1031\"></div><p>Configure domain name and LetsEncrypt to activate HTTPS (part 1 of 3):</p><div><img src=\"/blog/2023/12/10/05/59/img/configureDomainNameAndLetsEncryptPart1Of3.jpg\" alt=\"Login as root\" width=\"1900\" height=\"1032\"></div><p>Configure domain name and LetsEncrypt to activate HTTPS (part 2 of 3):</p><div><img src=\"/blog/2023/12/10/05/59/img/configureDomainNameAndLetsEncryptPart2Of3.jpg\" alt=\"Login as root\" width=\"1901\" height=\"1034\"></div><p>Configure domain name and LetsEncrypt to activate HTTPS (part 3 of 3):</p><div><img src=\"/blog/2023/12/10/05/59/img/configureDomainNameAndLetsEncryptPart3Of3.jpg\" alt=\"Login as root\" width=\"1860\" height=\"1032\"></div><p>I installed and enabled the metrics agent using <span class=\"cod\">curl -sSL https://repos.insights.digitalocean.com/install.sh | sudo bash</span></p><div><img src=\"/blog/2023/12/10/05/59/img/installAndEnableMetricsAgent.jpg\" alt=\"Install and enable metrics agent\" width=\"1870\" height=\"1031\"></div><p>The new metrics <span class=\"cod\">Load (1/5/15)</span>, <span class=\"cod\">Memory</span> and <span class=\"cod\">Disk Usage</span> were added.</p><p>New metrics part 1 of 3:</p><div><img src=\"/blog/2023/12/10/05/59/img/newMetricsPart1Of3.jpg\" alt=\"New metrics part 1 of 3\" width=\"1794\" height=\"923\"></div><p>New metrics part 2 of 3:</p><div><img src=\"/blog/2023/12/10/05/59/img/newMetricsPart2Of3.jpg\" alt=\"New metrics part 2 of 3\" width=\"1791\" height=\"735\"></div><p>New metrics part 3 of 3:</p><div><img src=\"/blog/2023/12/10/05/59/img/newMetricsPart3Of3.jpg\" alt=\"New metrics part 3 of 3\" width=\"1791\" height=\"719\"></div><p>Use <span class=\"cod\">cd /var/www/</span>, <span class=\"cod\">adduser unionchurchss</span>, <span class=\"cod\">usermod -aG sudo unionchurchss</span></p> and <span class=\"cod\">chown -R unionchurchss:unionchurchss html</span> to create user, add it to the <span class=\"cod\">sudo</span> group, and assign new user as owner of directory where WordPress files are placed:</p><div><img src=\"/blog/2023/12/10/05/59/img/addUserSudoGroupAndOwnership.jpg\" alt=\"Add user, sudo group and ownership\" width=\"933\" height=\"1034\"></div><p>I renamed the <span class=\"cod\">html</span> directory to <span class=\"cod\">htmlBACKUP</span> and created a new <span class=\"cod\">html</span>, assigning proper directory owner and group to this new directory that will host the WordPress files.</p><div><img src=\"/blog/2023/12/10/05/59/img/prepareHTMLdirectoryThatWillHostWordPressFiles.jpg\" alt=\"Prepare HTML directory that will host WordPress files\" width=\"572\" height=\"482\"></div><p>I connected to FTP from FileZilla using <span class=\"cod\">159.203.14.185</span> as Host, with the username I created, with port 22.</p><div><img src=\"/blog/2023/12/10/05/59/img/successfulFTPConnectionWithNewUser.jpg\" alt=\"Successful FTP connection with new user\" width=\"1872\" height=\"666\"></div><p>At this point, <span class=\"cod\">/var/www/html/</span> was empty because that was the new folder I created in the previous steps. I uploaded to <span class=\"cod\">/var/www/html/</span> the WordPress source code and content that I downloaded from InMotion Hosting (the 20,406 files with a total size of 5.15 GB, shown in initial steps of this post):</p><div><img src=\"/blog/2023/12/10/05/59/img/emptyHTMLDirectory.jpg\" alt=\"Empty HTML directory\" width=\"1917\" height=\"1029\"></div><p>I do not understand why 20,463 files were transferred. I was expecting a transfer of 20,406 files because that was the number that I had at <span class=\"cod\">C:&bsol;Users&bsol;jmont&bsol;Dropbox&bsol;unionchurchofsansalvador&bsol;unionchurchss.org&bsol;inMotionHosting&bsol;unionchurchss.org&bsol;</span>. A possible explanation that I can think of is that maybe some files were counted more than once when a network error did not allow them to be uploaded, and FileZilla tried again. Maybe there was a bug in the FileZilla counter that made the same file to be counted more than once. I will not worry about it and assume that <span class=\"cod\">/var/www/html/</span> has all 20,406 files that I need, nothing less and nothing more.</p><div><img src=\"/blog/2023/12/10/05/59/img/inaccurateFileZillaCounter.jpg\" alt=\"Inaccurate FileZilla counter\" width=\"1920\" height=\"1033\"></div><p>I had to interrupt the migration process because I encountered incompatibility issues with PHP versions for the website. I needed to think carefully about my upgrade and server migration strategy. But I hope the idea was clear. The next steps on the new server would be to load the MySQL database, complete the Apache configurations, and finally changing the DNS settings for the website and email to point to the new server.</p><p>The problem was that the website to migrate was running PHP 7.2, a deprecated version:</p><div><img src=\"/blog/2023/12/10/05/59/img/deprecatedPHP.jpg\" alt=\"Deprecated PHP\" width=\"1615\" height=\"866\"></div><p>I created a new Droplet with <span class=\"cod\">Ubuntu 20.04 (LTS) x64</span>. Then I installed PHP 7.4:</p>
<pre>
login as: root
root@159.203.42.1's password:
Welcome to Ubuntu 20.04.4 LTS (GNU/Linux 5.4.0-122-generic x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Tue May 28 21:54:42 UTC 2024

  System load:  0.56              Users logged in:       0
  Usage of /:   6.7% of 24.05GB   IPv4 address for eth0: 159.203.42.1
  Memory usage: 23%               IPv4 address for eth0: 10.20.0.5
  Swap usage:   0%                IPv4 address for eth1: 10.118.0.2
  Processes:    108

199 updates can be applied immediately.
157 of these updates are standard security updates.
To see these additional updates run: apt list --upgradable



The programs included with the Ubuntu system are free software;
the exact distribution terms for each program are described in the
individual files in /usr/share/doc/*/copyright.

Ubuntu comes with ABSOLUTELY NO WARRANTY, to the extent permitted by
applicable law.

root@unionchurchss:~# php -v

Command 'php' not found, but can be installed with:

apt install php7.4-cli

root@unionchurchss:~# apt install php7.4-cli
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following additional packages will be installed:
  php-common php7.4-common php7.4-json php7.4-opcache php7.4-readline
Suggested packages:
  php-pear
The following NEW packages will be installed:
  php-common php7.4-cli php7.4-common php7.4-json php7.4-opcache php7.4-readline
0 upgraded, 6 newly installed, 0 to remove and 194 not upgraded.
Need to get 2655 kB of archives.
After this operation, 13.2 MB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://mirrors.digitalocean.com/ubuntu focal/main amd64 php-common all 2:75 [11.9 kB]
Get:2 http://mirrors.digitalocean.com/ubuntu focal-updates/main amd64 php7.4-common amd64 7.4.3-4ubuntu2.22 [984 kB]
Get:3 http://mirrors.digitalocean.com/ubuntu focal-updates/main amd64 php7.4-json amd64 7.4.3-4ubuntu2.22 [19.2 kB]
Get:4 http://mirrors.digitalocean.com/ubuntu focal-updates/main amd64 php7.4-opcache amd64 7.4.3-4ubuntu2.22 [198 kB]
Get:5 http://mirrors.digitalocean.com/ubuntu focal-updates/main amd64 php7.4-readline amd64 7.4.3-4ubuntu2.22 [12.6 kB]
Get:6 http://mirrors.digitalocean.com/ubuntu focal-updates/main amd64 php7.4-cli amd64 7.4.3-4ubuntu2.22 [1429 kB]
Fetched 2655 kB in 1s (2001 kB/s)
Selecting previously unselected package php-common.
(Reading database ... 63846 files and directories currently installed.)
Preparing to unpack .../0-php-common_2%3a75_all.deb ...
Unpacking php-common (2:75) ...
Selecting previously unselected package php7.4-common.
Preparing to unpack .../1-php7.4-common_7.4.3-4ubuntu2.22_amd64.deb ...
Unpacking php7.4-common (7.4.3-4ubuntu2.22) ...
Selecting previously unselected package php7.4-json.
Preparing to unpack .../2-php7.4-json_7.4.3-4ubuntu2.22_amd64.deb ...
Unpacking php7.4-json (7.4.3-4ubuntu2.22) ...
Selecting previously unselected package php7.4-opcache.
Preparing to unpack .../3-php7.4-opcache_7.4.3-4ubuntu2.22_amd64.deb ...
Unpacking php7.4-opcache (7.4.3-4ubuntu2.22) ...
Selecting previously unselected package php7.4-readline.
Preparing to unpack .../4-php7.4-readline_7.4.3-4ubuntu2.22_amd64.deb ...
Unpacking php7.4-readline (7.4.3-4ubuntu2.22) ...
Selecting previously unselected package php7.4-cli.
Preparing to unpack .../5-php7.4-cli_7.4.3-4ubuntu2.22_amd64.deb ...
Unpacking php7.4-cli (7.4.3-4ubuntu2.22) ...
Setting up php-common (2:75) ...
Created symlink /etc/systemd/system/timers.target.wants/phpsessionclean.timer → /lib/systemd/system/phpsessionclean.timer.
Setting up php7.4-common (7.4.3-4ubuntu2.22) ...

Creating config file /etc/php/7.4/mods-available/calendar.ini with new version

Creating config file /etc/php/7.4/mods-available/ctype.ini with new version

Creating config file /etc/php/7.4/mods-available/exif.ini with new version

Creating config file /etc/php/7.4/mods-available/fileinfo.ini with new version

Creating config file /etc/php/7.4/mods-available/ffi.ini with new version

Creating config file /etc/php/7.4/mods-available/ftp.ini with new version

Creating config file /etc/php/7.4/mods-available/gettext.ini with new version

Creating config file /etc/php/7.4/mods-available/iconv.ini with new version

Creating config file /etc/php/7.4/mods-available/pdo.ini with new version

Creating config file /etc/php/7.4/mods-available/phar.ini with new version

Creating config file /etc/php/7.4/mods-available/posix.ini with new version

Creating config file /etc/php/7.4/mods-available/shmop.ini with new version

Creating config file /etc/php/7.4/mods-available/sockets.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvmsg.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvsem.ini with new version

Creating config file /etc/php/7.4/mods-available/sysvshm.ini with new version

Creating config file /etc/php/7.4/mods-available/tokenizer.ini with new version
Setting up php7.4-readline (7.4.3-4ubuntu2.22) ...

Creating config file /etc/php/7.4/mods-available/readline.ini with new version
Setting up php7.4-opcache (7.4.3-4ubuntu2.22) ...

Creating config file /etc/php/7.4/mods-available/opcache.ini with new version
Setting up php7.4-json (7.4.3-4ubuntu2.22) ...

Creating config file /etc/php/7.4/mods-available/json.ini with new version
Setting up php7.4-cli (7.4.3-4ubuntu2.22) ...
update-alternatives: using /usr/bin/php7.4 to provide /usr/bin/php (php) in auto mode
update-alternatives: using /usr/bin/phar7.4 to provide /usr/bin/phar (phar) in auto mode
update-alternatives: using /usr/bin/phar.phar7.4 to provide /usr/bin/phar.phar (phar.phar) in auto mode

Creating config file /etc/php/7.4/cli/php.ini with new version
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for php7.4-cli (7.4.3-4ubuntu2.22) ...
root@unionchurchss:~# php -v
PHP 7.4.3-4ubuntu2.22 (cli) (built: May  1 2024 10:11:33) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.3-4ubuntu2.22, Copyright (c), by Zend Technologies
root@unionchurchss:~#
</pre>
		   <div>Published: 5:59 AM GMT · Dec 10, 2023</div>\n";
?>
