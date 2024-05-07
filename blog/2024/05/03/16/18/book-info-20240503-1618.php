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
		   <div><img src=\"/blog/2024/05/03/16/18/img/installationsImage1.jpg\" alt=\"Installation image 1\" width=\"1034\" height=\"879\"></div>
		   <div>Published: 4:18 PM GMT · May 3, 2024</div>\n";
?>
