<?php
  $index->content .= 
           "<p>In a previous post at <a href=\"https://jaimemontoya.com/blog/2023/12/17/11/41/\">https://jaimemontoya.com/blog/2023/12/17/11/41/</a>, I explained the process I followed for provisioning Azure relational database services to create a MySQL database resource.</p><p>Instead of downloading a MySQL client tool, I connected by using <a href=\"https://learn.microsoft.com/en-us/azure/cloud-shell/overview\">Azure Cloud Shell</a> within the Azure portal.</p><p>I started by creating a new Azure Database for MySQL Flexible server with the following configurations:</p><div><img src=\"/blog/2024/01/12/06/49/img/newAzureDatabaseForMySQLFlexibleServer.jpg\" alt=\"New Azure Database for MySQL Flexible server\" width=\"1060\" height=\"967\"></div><p>I made a note of my server name, server admin login name, and password for my newly created server from the <span class=\"cod\">Overview</span> section of my server. I clicked <span class=\"cod\">Connect</span> to open Azure Cloud Shell in the portal:</p><div><img src=\"/blog/2024/01/12/06/49/img/serverNameAndAdminLogin.jpg\" alt=\"Server name ad admin login\" width=\"1552\" height=\"474\"></div><p>I clicked <span class=\"cod\">Yes</span> to allow public access from Azure Services within Azure to my server:</p><div><img src=\"/blog/2024/01/12/06/49/img/allowPublicAccessFromAzureServices.jpg\" alt=\"Allow public access from Azure Services\" width=\"1550\" height=\"472\"></div><p>I connected to the server successfully with my credentials:</p><div><img src=\"/blog/2024/01/12/06/49/img/successfulConnectionToMySQLDatabase.jpg\" alt=\"Successful connection to MySQL database\" width=\"1916\" height=\"983\"></div>
<pre>Requesting a Cloud Shell.Succeeded. 
Connecting terminal...

Welcome to Azure Cloud Shell

Type \"az\" to use Azure CLI
Type \"help\" to learn about Cloud Shell

wget --trust-server-names --no-check-certificate \"https://go.microsoft.com/fwlink/?linkid=2157444\"
--2024-01-12 07:27:42--  https://go.microsoft.com/fwlink/?linkid=2157444
Resolving go.microsoft.com... 23.40.70.176, 2600:1404:6400:88d::2c1a, 2600:1404:6400:895::2c1a
Connecting to go.microsoft.com|23.40.70.176|:443... connected.
HTTP request sent, awaiting response... 302 Moved Temporarily
Location: https://dl.cacerts.digicert.com/DigiCertGlobalRootCA.crt.pem [following]
--2024-01-12 07:27:42--  https://dl.cacerts.digicert.com/DigiCertGlobalRootCA.crt.pem
Resolving dl.cacerts.digicert.com... 192.229.211.108
Connecting to dl.cacerts.digicert.com|192.229.211.108|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 1338 (1.3K) [application/x-pem-file]
Saving to: ‘DigiCertGlobalRootCA.crt.pem’

DigiCertGlobalRootCA.crt.pem                                100%[========================================================================================================================================>]   1.31K  --.-KB/s    in 0s      

2024-01-12 07:27:42 (38.4 MB/s) - ‘DigiCertGlobalRootCA.crt.pem’ saved [1338/1338]

jaime [ ~ ]$ mysql -h jaimemontoya.mysql.database.azure.com -u jaimemontoya -p \"--ssl-ca=DigiCertGlobalRootCA.crt.pem\"
Enter password: jaime [ ~ ]$ wget --trust-server-names --no-check-certificate \"https://go.microsoft.com/fwlink/?linkid=2157444\"
--2024-01-12 07:27:42--  https://go.microsoft.com/fwlink/?linkid=2157444
Resolving go.microsoft.com... 23.40.70.176, 2600:1404:6400:88d::2c1a, 2600:1404:6400:895::2c1a
Connecting to go.microsoft.com|23.40.70.176|:443... connected.
HTTP request sent, awaiting response... 302 Moved Temporarily
Location: https://dl.cacerts.digicert.com/DigiCertGlobalRootCA.crt.pem [following]
--2024-01-12 07:27:42--  https://dl.cacerts.digicert.com/DigiCertGlobalRootCA.crt.pem
Resolving dl.cacerts.digicert.com... 192.229.211.108
Connecting to dl.cacerts.digicert.com|192.229.211.108|:443... connected.
HTTP request sent, awaiting response... 200 OK
Length: 1338 (1.3K) [application/x-pem-file]
Saving to: ‘DigiCertGlobalRootCA.crt.pem’

DigiCertGlobalRootCA.crt.pem                                100%[========================================================================================================================================>]   1.31K  --.-KB/s    in 0s      

2024-01-12 07:27:42 (38.4 MB/s) - ‘DigiCertGlobalRootCA.crt.pem’ saved [1338/1338]

jaime [ ~ ]$ mysql -h jaimemontoya.mysql.database.azure.com -u jaimemontoya -p \"--ssl-ca=DigiCertGlobalRootCA.crt.pem\"
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 13
Server version: 8.0.34 Source distribution

Copyright (c) 2000, 2023, Oracle and/or its affiliates.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> </pre>
           <div>Published: 6:49 AM GMT · Jan 12, 2024</div>\n";
?>
