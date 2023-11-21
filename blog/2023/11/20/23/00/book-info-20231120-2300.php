<?php
  $index->content .= 
           "\t\t\t<div>11:00 PM GMT · Nov 20, 2023</div><p>In my previous post at <a href=\"https://jaimemontoya.com/blog/2023/11/17/13/08/\">https://jaimemontoya.com/blog/2023/11/17/13/08/</a>, the entire process to install two websites on the same server using Apache virtual hosts was explained. One of those websites was installed on a subdomain. The only issue and missing step was fixing the \"Not secure\" message:</p><div><img src=\"/blog/2023/11/17/13/08/img/subdomainWorking.png\" alt=\"Subdomain working correctly\" width=\"462\" height=\"136\"></div><p>Using <span class=\"cod\">certbot --apache</span> and then choosing the sites that I wanted to activate HTTPS for, was all I had to do. Certbot took care of obtaining and installing HTTPS/TLS/SSL certificates for me:</p><pre>root@jaimemontoya:~# certbot --apache
Saving debug log to /var/log/letsencrypt/letsencrypt.log

Which names would you like to activate HTTPS for?
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
1: jaimemontoya.net
2: sponsorship.jaimemontoya.net
3: www.sponsorship.jaimemontoya.net
4: www.jaimemontoya.net
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Select the appropriate numbers separated by commas and/or spaces, or leave input
blank to select all options shown (Enter 'c' to cancel): 2,3
Requesting a certificate for sponsorship.jaimemontoya.net and www.sponsorship.jaimemontoya.net

Successfully received certificate.
Certificate is saved at: /etc/letsencrypt/live/sponsorship.jaimemontoya.net/fullchain.pem
Key is saved at:         /etc/letsencrypt/live/sponsorship.jaimemontoya.net/privkey.pem
This certificate expires on 2024-02-18.
These files will be updated when the certificate renews.
Certbot has set up a scheduled task to automatically renew this certificate in the background.

Deploying certificate
Successfully deployed certificate for sponsorship.jaimemontoya.net to /etc/apache2/sites-enabled/sponsorship.jaimemontoya.net-le-ssl.conf
Successfully deployed certificate for www.sponsorship.jaimemontoya.net to /etc/apache2/sites-enabled/sponsorship.jaimemontoya.net-le-ssl.conf
<span class=\"red\">Added an HTTP->HTTPS rewrite in addition to other RewriteRules; you may wish to check for overall consistency.</span>
Congratulations! You have successfully enabled HTTPS on https://sponsorship.jaimemontoya.net and https://www.sponsorship.jaimemontoya.net

- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
If you like Certbot, please consider supporting our work by:
 * Donating to ISRG / Let's Encrypt:   https://letsencrypt.org/donate
 * Donating to EFF:                    https://eff.org/donate-le
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
root@jaimemontoya:~# cat /etc/apache2/sites-available/sponsorship.jaimemontoya.net-le-ssl.conf
&lt;IfModule mod_ssl.c&gt;
<span class=\"indent\">&lt;VirtualHost *:443&gt;</span>
<span class=\"indent2\">ServerAdmin webmaster@localhost</span>
<span class=\"indent2\">ServerName sponsorship.jaimemontoya.net</span>
<span class=\"indent2\">ServerAlias www.sponsorship.jaimemontoya.net</span>
<span class=\"indent2\">DocumentRoot /var/www/sponsorship.jaimemontoya.net</span>
<span class=\"indent2\">ErrorLog \${APACHE_LOG_DIR}/error.log</span>
<span class=\"indent2\">CustomLog \${APACHE_LOG_DIR}/access.log combined</span>
Include /etc/letsencrypt/options-ssl-apache.conf</span>
SSLCertificateFile /etc/letsencrypt/live/sponsorship.jaimemontoya.net/fullchain.pem</span>
SSLCertificateKeyFile /etc/letsencrypt/live/sponsorship.jaimemontoya.net/privkey.pem</span>
<span class=\"indent\">&lt;/VirtualHost&gt;</span>
&lt;/IfModule&gt;
root@jaimemontoya:~# pico /etc/letsencrypt/options-ssl-apache.conf
root@jaimemontoya:~# cat /etc/apache2/sites-available/sponsorship.jaimemontoya.net.conf
# Added to mitigate CVE-2017-8295 vulnerability
UseCanonicalName On

&lt;VirtualHost *:80&gt;
        ServerAdmin webmaster@localhost
        ServerName sponsorship.jaimemontoya.net
        ServerAlias www.sponsorship.jaimemontoya.net
        DocumentRoot /var/www/sponsorship.jaimemontoya.net/public_html
        ErrorLog \${APACHE_LOG_DIR}/error.log
        CustomLog \${APACHE_LOG_DIR}/access.log combined
        RewriteEngine On
        RewriteRule ^(.*)$ https://%{HTTP_HOST}$1 [R=301,L]
RewriteCond %{SERVER_NAME} =sponsorship.jaimemontoya.net [OR]
RewriteCond %{SERVER_NAME} =www.sponsorship.jaimemontoya.net
RewriteRule ^ https://%{SERVER_NAME}%{REQUEST_URI} [END,NE,R=permanent]
&lt;/VirtualHost&gt;</pre><div><img src=\"/blog/2023/11/20/23/00/img/letsEncryptLock.jpg\" alt=\"Let\'s Encrypt lock\" width=\"328" height=\"135\"></div><div><img src=\"/blog/2023/11/20/23/00/img/connectionIsSecure.jpg\" alt=\"Connection is secure\" width=\"302" height=\"191\"></div><hr>\n";
?>
