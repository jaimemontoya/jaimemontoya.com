<?php
  $index->content .= 
           "<p>As I was trying to update my website, I received the following error message:</p>
<pre>
root@jaimemontoya:~# cd /var/www/jaimemontoya.com/
root@jaimemontoya:/var/www/jaimemontoya.com# git pull origin dev
remote: Enumerating objects: 7, done.
remote: Counting objects: 100% (7/7), done.
remote: Compressing objects: 100% (1/1), done.
remote: Total 4 (delta 3), reused 4 (delta 3), pack-reused 0 (from 0)
error: file write error: No space left on device
fatal: unable to write loose object file
fatal: unpack-objects failed
</pre>   
		   <p>From my DigitalOcean Graphs, I realized that my Disk Usage was at 100%:</p><div><img src=\"/blog/2024/12/21/04/27/img/diskUsage99Point99Percent.jpg\" alt=\"Disk Usage 99.99%\" width=\"1556\" height=\"402\"></div><p>I fixed the disk space issue on my Droplet by completing the following steps:</p>
<pre>
root@jaimemontoya:/var/www/jaimemontoya.com#
du -h --max-depth=1 /var
64K     /var/spool
462M    /var/www
3.1M    /var/snap
80K     /var/tmp
4.0K    /var/opt
4.0K    /var/crash
2.9M    /var/backups
4.0K    /var/metrics
4.0K    /var/local
284M    /var/cache
12G     /var/log
4.3G    /var/lib
4.0K    /var/mail
17G     /var
root@jaimemontoya:/var/www/jaimemontoya.com# ls -larSh /var/log/
total 11G
-rw-r--r--   1 root              root               0 Dec 21 00:32 .xrdp.log.swp
-rw-------   1 root              root               0 Aug 20  2023 php7.0-fpm.log
-rw-r--r--   1 root              root               0 Dec 21 02:17 droplet-agent.update.log
-rw-r-----   1 root              adm                0 Jan  5  2023 apport.log
-rw-------   1 root              root              76 Jun 18  2023 php7.0-fpm.log.9.gz
-rw-------   1 root              root              76 Jun 26  2023 php7.0-fpm.log.8.gz
-rw-------   1 root              root              76 Jul  2  2023 php7.0-fpm.log.7.gz
-rw-------   1 root              root              76 Jul  9  2023 php7.0-fpm.log.6.gz
-rw-------   1 root              root              76 Jul 17  2023 php7.0-fpm.log.5.gz
-rw-------   1 root              root              76 Aug  7  2023 php7.0-fpm.log.2.gz
-rw-------   1 root              root              76 May 22  2023 php7.0-fpm.log.13.gz
-rw-------   1 root              root              76 May 28  2023 php7.0-fpm.log.12.gz
-rw-------   1 root              root              76 Jun  4  2023 php7.0-fpm.log.11.gz
-rw-------   1 root              root              76 Jun 12  2023 php7.0-fpm.log.10.gz
-rw-r--r--   1 root              root             124 Aug 17 06:07 alternatives.log.4.gz
-rw-r--r--   1 root              root             141 Feb 29  2024 alternatives.log.10.gz
-rw-r-----   1 root              adm              157 Feb 10  2022 apport.log.3.gz
-rw-r--r--   1 root              root             174 Jun 20  2024 alternatives.log.6.gz
-rw-r--r--   1 root              root             178 Jul  2 06:15 alternatives.log.5.gz
-rw-------   1 root              root             202 Aug  7  2023 php7.0-fpm.log.3.gz
-rw-r--r--   1 root              root             228 Apr 30  2024 alternatives.log.8.gz
-rw-r-----   1 root              adm              280 Feb 23  2022 apport.log.2.gz
-rw-r--r--   1 root              root             286 Jan 16  2024 alternatives.log.11.gz
-rw-------   1 root              root             332 Jul 29  2023 php7.0-fpm.log.4.gz
-rw-r--r--   1 root              root             437 Sep  6 07:00 alternatives.log.3.gz
-rw-r-----   1 root              adm              535 Jan 14  2022 apport.log.4.gz
-rw-r-----   1 root              adm              538 Jan 13  2022 apport.log.5.gz
-rw-r--r--   1 root              root             549 Oct 16 06:37 alternatives.log.2.gz
-rw-r--r--   1 root              root             553 Dec 21  2023 alternatives.log.12.gz
-rw-r--r--   1 root              root             564 Dec 13 06:49 alternatives.log
-rw-r--r--   1 root              root             581 Mar 29  2024 alternatives.log.9.gz
-rw-r-----   1 root              adm              651 Jan 12  2022 apport.log.6.gz
-rw-r-----   1 root              adm              657 Jan 11  2022 apport.log.7.gz
-rw-------   1 root              root             716 Aug 17  2023 php7.0-fpm.log.1
-rw-r--r--   1 root              root             776 May 11  2024 alternatives.log.7.gz
-rw-r--r--   1 root              root            1.3K Nov  8 13:37 gpu-manager.log
-rw-r--r--   1 root              root            1.4K Nov  8 13:37 Xvnc-root.log.bak
-rw-r--r--   1 root              root            1.4K Nov  8 13:37 Xvnc-root.log
-rw-r--r--   1 root              root            1.4K Jun 29  2020 vncserver-x11-root.log.bak
-rw-r--r--   1 root              root            1.4K Jun 29  2020 vncserver-x11-root.log
-rw-------   1 root              root            1.6K Jun 29  2020 vncserver-x11-serviced.log
-rw-------   1 root              root            1.6K Jun 29  2020 vncserver-x11-serviced.log.bak
-rw-r--r--   1 root              root            1.7K Mar  9  2021 vncpamhelper.log.bak
-rw-r--r--   1 root              root            1.7K Mar 16  2021 vncpamhelper.log
-rw-r-----   1 root              adm             2.1K Jan  4  2023 apport.log.1
-rw-rw-r--   1 root              utmp            3.4K Jun 28  2023 wtmp.1
-rw-r--r--   1 root              root            3.8K Oct 30 06:05 dpkg.log.2.gz
drwxr-xr-x   2 root              root            4.0K Jun 18  2019 upgrade
drwxr-x---   2 root              adm             4.0K Dec  1 00:00 unattended-upgrades
drwx------   2 speech-dispatcher root            4.0K Apr 23  2018 speech-dispatcher
drwx------   2 root              root            4.0K Jul 28  2023 private
drwxr-xr-x   2 root              root            4.0K Mar 22  2022 openvpn
drwx------   2 root              root            4.0K Dec 19 09:57 letsencrypt
drwxr-xr-x   2 landscape         landscape       4.0K Jun 18  2019 landscape
drwxr-sr-x+  3 root              systemd-journal 4.0K Jun 18  2019 journal
drwx--x--x   2 root              gdm             4.0K Aug 17  2023 gdm3
drwxr-xr-x   8 root              root            4.0K Aug 17  2023 dist-upgrade
drwxr-xr-x   2 root              root            4.0K Dec 19 00:00 cups
drwxr-xr-x   2 root              root            4.0K Dec 19 06:46 apt
drwxr-x---   2 root              adm             4.0K Dec 19 00:00 apache2
drwxr-xr-x  15 root              root            4.0K Jun 25  2020 ..
drwxrwxr-x  15 root              syslog          4.0K Dec 21 00:32 .
-rw-r--r--   1 root              root            4.2K Feb 29  2024 dpkg.log.10.gz
-rw-r--r--   1 root              root            4.2K Jul 31  2020 vnclicense.log
-rw-r--r--   1 root              root            4.4K Sep 30 17:31 ubuntu-advantage.log.3.gz
-rw-r--r--   1 root              root            4.5K Jun 30 13:54 ubuntu-advantage.log.6.gz
-rw-r--r--   1 root              root            4.6K Oct 31 15:50 ubuntu-advantage.log.2.gz
-rw-r--r--   1 root              root            4.6K Jul 31 13:02 ubuntu-advantage.log.5.gz
-rw-r--r--   1 root              root            4.6K Jan 26  2024 dpkg.log.11.gz
-rw-r--r--   1 root              root            4.6K Aug 31 07:42 ubuntu-advantage.log.4.gz
-rw-r--r--   1 root              root            4.6K Mar 29  2024 dpkg.log.9.gz
-rw-r--r--   1 root              root            5.1K Jul 26 06:16 dpkg.log.5.gz
-rw-r--r--   1 root              root            5.8K Jun 29 06:41 dpkg.log.6.gz
-rw-r--r--   1 root              root            5.9K Aug 27 16:12 dpkg.log.4.gz
-rw-r--r--   1 root              root            6.0K Apr 30  2024 dpkg.log.8.gz
-rw-r--r--   1 root              root            6.3K Dec 21  2023 dpkg.log.12.gz
-rw-r--r--   1 root              root            6.6K Nov 28 06:16 alternatives.log.1
-rw-r--r--   1 root              root            7.2K Sep 27 06:15 dpkg.log.3.gz
-rw-------   1 root              root             11K Nov  8 13:37 vncserver-virtuald.log
-rw-------   1 root              root             11K Aug 27 16:12 vncserver-virtuald.log.bak
-rw-r--r--   1 root              root             12K Sep 20 07:00 fontconfig.log
-rw-r--r--   1 root              root             13K May 30  2024 dpkg.log.7.gz
-rw-r-----   1 root              adm              15K Nov  1  2023 dmesg.3.gz
-rw-r-----   1 root              adm              15K Dec 11  2023 dmesg.1.gz
-rw-r-----   1 root              adm              15K Dec 11  2023 dmesg.2.gz
-rw-r-----   1 root              adm              16K Aug 17  2023 dmesg.4.gz
-rw-r--r--   1 root              root             27K Dec 19 06:46 dpkg.log
-rw-------   1 root              root             52K Jun 29  2020 vncserver-x11.log
-rw-r-----   1 root              adm              54K Nov  8 13:37 dmesg
-rw-r-----   1 root              adm              56K Apr 20  2024 dmesg.0
-rw-r--r--   1 root              root             56K Nov 28 06:18 dpkg.log.1
-rw-r--r--   1 root              root             60K Dec 19 07:43 ubuntu-advantage.log
-rw-------   1 root              root             63K Jul 28  2023 tallylog
-rw-------   1 root              root             73K Jun 29  2020 vncserver-x11.log.bak
-rw-r--r--   1 root              root             95K Nov 30 07:45 ubuntu-advantage.log.1
-rw-r-----   1 root              adm             113K Nov  8 13:37 cloud-init-output.log
-rw-rw-r--   1 root              utmp            256K Dec 21 02:58 wtmp
-rw-rw-r--   1 root              utmp            286K Dec 21 02:58 lastlog
-rw-r-----   1 syslog            adm             881K Nov 30 23:59 ufw.log.3.gz
-rw-r-----   1 syslog            adm             886K Dec  1 00:00 kern.log.3.gz
-rw-r-----   1 syslog            adm             897K Nov 24 00:00 ufw.log.4.gz
-rw-r-----   1 syslog            adm             907K Nov 24 00:00 kern.log.4.gz
-rw-r-----   1 syslog            adm             990K Dec  8 00:00 ufw.log.2.gz
-rw-r-----   1 syslog            adm             993K Dec  8 00:00 kern.log.2.gz
-rw-r-----   1 syslog            adm             1.5M Aug 12  2023 syslog.6.gz
-rw-r-----   1 syslog            adm             1.9M Aug 11  2023 syslog.7.gz
-rw-r-----   1 syslog            adm             3.2M Nov  8 13:37 cloud-init.log
-rw-r-----   1 root              adm             4.3M Dec 20 04:00 xrdp-sesman.log
-rw-r-----   1 syslog            adm             4.4M Dec  8 00:00 auth.log.2.gz
-rw-r-----   1 syslog            adm             4.7M Dec  1 00:00 auth.log.3.gz
-rw-r-----   1 syslog            adm             5.2M Dec 21 03:12 ufw.log
-rw-r-----   1 syslog            adm             5.2M Dec 21 03:12 kern.log
-rw-r-----   1 syslog            adm             5.4M Nov 24 00:00 auth.log.4.gz
-rw-r-----   1 syslog            adm             7.7M Nov 24 00:00 syslog.4.gz
-rw-r-----   1 syslog            adm             8.1M Dec 14 23:59 ufw.log.1
-rw-r-----   1 syslog            adm             8.1M Dec 15 00:00 kern.log.1
-rw-r-----   1 syslog            adm              13M Dec  8 00:00 syslog.2.gz
-rw-r-----   1 syslog            adm              13M Dec  1 00:00 syslog.3.gz
-rw-r-----   1 syslog            adm              38M Dec 21 03:12 auth.log
-rw-r-----   1 syslog            adm              64M Dec 15 00:00 auth.log.1
-rw-rw----   1 root              utmp            169M Dec 21 03:12 btmp
-rw-r-----   1 syslog            adm             174M Dec 21 03:12 syslog
-rw-r-----   1 syslog            adm             215M Dec 15 00:00 syslog.1
-rw-rw----   1 root              utmp            297M Nov 30 23:59 btmp.1
-rw-r-----   1 xrdp              adm             9.6G Dec 21 03:12 xrdp.log
root@jaimemontoya:/var/www/jaimemontoya.com# rm -d /var/log/xrdp.log
root@jaimemontoya:/var/www/jaimemontoya.com# reboot
root@jaimemontoya:~# df -h
Filesystem      Size  Used Avail Use% Mounted on
tmpfs            96M  1.4M   95M   2% /run
/dev/vda1        25G   15G  9.7G  60% /
tmpfs           479M     0  479M   0% /dev/shm
tmpfs           5.0M     0  5.0M   0% /run/lock
/dev/vda15      105M  7.2M   98M   7% /boot/efi
tmpfs            96M  104K   96M   1% /run/user/126
tmpfs            96M   88K   96M   1% /run/user/0
</pre>
		   <p>The Disk Usage improved:</p><div><img src=\"/blog/2024/12/21/04/27/img/diskUsage59Point8Percent.jpg\" alt=\"Disk Usage 59.8%\" width=\"1555\" height=\"402\"></div><p>The \"error: file write error: No space left on device\" error did not happen anymore:</p>
<pre>
root@jaimemontoya:~# cd /var/www/jaimemontoya.com/
root@jaimemontoya:/var/www/jaimemontoya.com# git pull origin dev
remote: Enumerating objects: 7, done.
remote: Counting objects: 100% (7/7), done.
remote: Compressing objects: 100% (1/1), done.
remote: Total 4 (delta 3), reused 4 (delta 3), pack-reused 0 (from 0)
Unpacking objects: 100% (4/4), 524 bytes | 262.00 KiB/s, done.
From https://github.com/jaimemontoya/jaimemontoya
 * branch              dev        -> FETCH_HEAD
   0b9eb37c..1d8f2f53  dev        -> origin/dev
Merge made by the 'ort' strategy.
 home.php  | 20 ++++++++++----------
 index.php |  2 +-
 2 files changed, 11 insertions(+), 11 deletions(-)
</pre>
			<div>Published: 4:27 PM GMT · Dec 21, 2024</div>\n";
?>
