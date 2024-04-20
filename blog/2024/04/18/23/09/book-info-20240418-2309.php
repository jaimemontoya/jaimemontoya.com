<?php
  $index->content .= 
           "<p>This is the error I was getting when trying to access my database that was in Recovery Pending state:</p><div><img src=\"/blog/2024/04/18/23/09/img/recoveryPendingError.jpg\" alt=\"Database in Recovery Pending state\" width=\"875\" height=\"207\"></div><p>I ran <span class=\"cod\">SELECT name, state_desc from sys.databases</span> and realized my database was in Recovery Pending state:</p><div><img src=\"/blog/2024/04/18/23/09/img/databaseInRecoveryPendingState.jpg\" alt=\"Show database status\" width=\"384\" height=\"365\"></div><p>I put the database in emergency mode with the following code:</p>
<pre>
ALTER DATABASE Finances SET EMERGENCY;
GO
</pre>
		   <p>The query was completed with errors:</p>
<pre>
Msg 5120, Level 16, State 101, Line 1
Unable to open the physical file \"C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\Finances.mdf\". Operating system error 32: \"32(The process cannot access the file because it is being used by another process.)\".
</pre>
           <p>Nonetheless, by running <span class=\"cod\">SELECT name, state_desc from sys.databases</span> again I could confirm that the database changed to Emergency state:</p><div><img src=\"/blog/2024/04/18/23/09/img/databaseInEmergencyState.jpg\" alt=\"Show database status\" width=\"381\" height=\"364\"></div><div>Published: 11:09 PM GMT · Apr 18, 2024</div>\n";
?>
