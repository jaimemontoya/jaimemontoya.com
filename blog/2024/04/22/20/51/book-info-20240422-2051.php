<?php
  $index->content .= 
           "<p>I visited <a href=\"https://www.microsoft.com/download/details.aspx?id=53595\">https://www.microsoft.com/download/details.aspx?id=53595</a> and downloaded Microsoft Data Migration Assistant v5.8.</p><div><img src=\"/blog/2024/04/22/20/51/img/downloadMicrosoftDataMigrationAssistantv5Dot8.jpg\" alt=\"Download Microsoft Data Migration Assistant v5.8\" width=\"1754\" height=\"1024\"></div><p>I opened the downloaded file:</p><div><img src=\"/blog/2024/04/22/20/51/img/dataMigrationAssistant.jpg\" alt=\"Microsoft Data Migration Assistant\" width=\"380\" height=\"171\"></div><p>I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/microsoftDataMigrationAssistantSetupWizard.jpg\" alt=\"Microsoft Data Migration Assistant Setup Wizard\" width=\"488\" height=\"370\"></div><p>I accepted the terms in the License Agreement and clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/acceptTermsInLicenseAgreement.jpg\" alt=\"Terms in the License Agreement\" width=\"488\" height=\"372\"></div><p>I clicked <span class=\"cod\">Install</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/install.jpg\" alt=\"Install\" width=\"486\" height=\"370\"></div><p>I checked the \"Launch Microsoft Data Migration Assistant\" box and clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/finishInstallation.jpg\" alt=\"Finish installation\" width=\"481\" height=\"370\"></div><p>I used the following options and clicked <span class=\"cod\">Create</span>:</p><table><tr><th>Property</th><th>Value</th></tr><tr><td>Project type</td><td>Assessment</td></tr><tr><td>Project name</td><td>SQL Server to Azure SQL Database</td></tr><tr><td>Assessment type</td><td>Database Engine</td></tr><tr><td>Source server type</td><td>SQL Server</td></tr><tr><td>Targer server type</td><td>Azure SQL Database</td></tr></table><div><img src=\"/blog/2024/04/22/20/51/img/createNewDataMigrationProject.jpg\" alt=\"Create new Data Migration project\" width=\"962\" height=\"578\"></div><p>I kept all items selected in the report type screen and clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/selectReportType.jpg\" alt=\"Select report type\" width=\"972\" height=\"582\"></div><p>I provided my credentials to connect to my source SQL Server database, specified the connection properties and clicked <span class=\"cod\">Connect</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/connectToAServer.jpg\" alt=\"Connect to a server\" width=\"967\" height=\"652\"></div><p>I selected the server and specific database that I wanted to connect to and clicked <span class=\"cod\">Add</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/addSources.jpg\" alt=\"Add sources\" width=\"969\" height=\"655\"></div><p>I clicked <span class=\"cod\">Start Assessment</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/startAssessment.jpg\" alt=\"Start assessment\" width=\"1063\" height=\"659\"></div><p>I examined the <span class=\"cod\">SQL Server feature parity</span> results. Then I clicked the <span class=\"cod\">Compatibility issues</span> radio button:</p><div><img src=\"/blog/2024/04/22/20/51/img/SQLServerFeatureParityResults.jpg\" alt=\"SQL Server feature parity results\" width=\"1391\" height=\"654\"></div><p>I had no compatibility issues. I clicked <span class=\"cod\">Upload to Azure Migrate</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/uploadToAzureMigrate.jpg\" alt=\"Upload to Azure Migrate\" width=\"1385\" height=\"651\"></div><p>I selected <span class=\"cod\">Azure</span> as my <span class=\"cod\">Azure Environment</span> and clicked <span class=\"cod\">Connect</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/connectToAzure.jpg\" alt=\"Connect to Azure\" width=\"1349\" height=\"650\"></div><p>I signed in to my Microsoft account:</p><div><img src=\"/blog/2024/04/22/20/51/img/uploadAssessmentReportToAzureMigrate.jpg\" alt=\"Upload assessment report to Azure Migrate\" width=\"1354\" height=\"650\"></div><p>The following error appeared when I connected to Azure:</p><div><img src=\"/blog/2024/04/22/20/51/img/azureMigrateErrorFetchingSubscriptionList.jpg\" alt=\"Azure Migrate error fetching subscription list\" width=\"1350\" height=\"650\"></div><p>Since I did not find any compatibility issues, I was ready to export my database as .bacpac file and import it using the Azure portal or SqlPackage.</p><p>From Microsoft SQL Server Management Studio I clicked <span class=\"cod\">Export Data-tier Application...</span> for the database that I wanted to export:</p><div><img src=\"/blog/2024/04/22/20/51/img/exportDataTierApplication.jpg\" alt=\"Export Data-tier Application\" width=\"697\" height=\"980\"></div><p>From the <span class=\"cod\">Introduction</span> screen, I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/exportDataTierApplicationIntroduction.jpg\" alt=\"Introduction screen in export data-tier application process\" width=\"649\" height=\"769\"></div><p>From the <span class=\"cod\">Export Settings</span> screen, I kept the <span class=\"cod\">Save to local disk</span> radio button selected. Then I clicked <span class=\"cod\">Browse...</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/savingBACPACToLocalDisk.jpg\" alt=\"Saving BACPAC to local disk\" width=\"772\" height=\"770\"></div><p>I provided a name for the file and clicked <span class=\"cod\">Save</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/saveBACPACFile.jpg\" alt=\"Save BACPAC file\" width=\"1391\" height=\"780\"></div><p>I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/saveBACPACToLocalDisk.jpg\" alt=\"Save BACPAC to local disk\" width=\"844\" height=\"772\"></div><p>I clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/finishExportingBACPACFile.jpg\" alt=\"Finish exporting BACPAC file\" width=\"843\" height=\"773\"></div><p>The Operation Complete message appeared with a summary of results:</p><div><img src=\"/blog/2024/04/22/20/51/img/operationCompleteSummaryResults.jpg\" alt=\"Operation Complete summary results\" width=\"843\" height=\"842\"></div><p>The BACPAC file was saved successfully in the location of my local disk that I specified:</p><div><img src=\"/blog/2024/04/22/20/51/img/bacpacFileSavedSuccessfully.jpg\" alt=\"BACPAC file saved successfully\" width=\"755\" height=\"96\"></div><p>I visited <a href=\"https://portal.azure.com/\">https://portal.azure.com/</a> and navigated to my storage account. Then I clicked <span class=\"cod\">Upload</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/navigateToStorageAccount.jpg\" alt=\"Navigate to storage account\" width=\"1899\" height=\"1020\"></div><p>I clicked <span class=\"cod\">Browse for files</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/browseForFiles.jpg\" alt=\"Browse for files\" width=\"1897\" height=\"1025\"></div><p>I navigated to the location where I had my BACPAC file and clicked <span class=\"cod\">Open</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/openBACPACFile.jpg\" alt=\"Open BACPAC file\" width=\"1895\" height=\"1020\"></div><p>I clicked <span class=\"cod\">Create new</span> to create a container for my BACPAC file:</p><div><img src=\"/blog/2024/04/22/20/51/img/createNewContainer.jpg\" alt=\"Create new container\" width=\"1882\" height=\"973\"></div><p>I provided a name for my container anc clicked <span class=\"cod\">Ok</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/provideNameForContainer.jpg\" alt=\"Provide name for container\" width=\"1892\" height=\"1019\"></div><p>I clicked <span class=\"cod\">Upload</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/uploadBACPACFile.jpg\" alt=\"Upload BACPAC file\" width=\"1893\" height=\"1021\"></div><p>My BACPAC file was uploaded successfully:</p><div><img src=\"/blog/2024/04/22/20/51/img/bacpacFileUploadedSuccessfully.jpg\" alt=\"BACPAC file uploaded successfully\" width=\"1890\" height=\"1064\"></div><p>From the home page of the Microsoft Azure Portal, I clicked <span class=\"cod\">Create a resource</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/createAResource.jpg\" alt=\"Create a resource\" width=\"1836\" height=\"1020\"></div><p>I searched for <span class=\"cod\">sql server (logical server)</span> and pressed enter:</p><div><img src=\"/blog/2024/04/22/20/51/img/searchForSQLServerLogicalServer.jpg\" alt=\"Search for SQL Server (logical server)\" width=\"1129\" height=\"932\"></div><p>I clicked <span class=\"cod\">SQL server (logical server)</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/clickSQLServerLogicalServer.jpg\" alt=\"Click SQL Server (logical server)\" width=\"1899\" height=\"1024\"></div><p>I clicked <span class=\"cod\">Create</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/createSQLServerLogicalServer.jpg\" alt=\"Create SQL Server (logical server)\" width=\"1000\" height=\"544\"></div><p>I provided the required basic information and clicked <span class=\"cod\">Review + create</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/provideRequiredBasicInformationPart1Of2.jpg\" alt=\"Provide required basic information (part 1 of 2)\" width=\"741\" height=\"969\"></div><div><img src=\"/blog/2024/04/22/20/51/img/provideRequiredBasicInformationPart2Of2.jpg\" alt=\"Provide required basic information (part 2 of 2)\" width=\"746\" height=\"975\"></div><p>I reviewed the values I provided and clicked Create:</p><div><img src=\"/blog/2024/04/22/20/51/img/createSQLServerLogicalServerAfterReviewingValues.jpg\" alt=\"Create SQL Server (logical server) after reviewing values\" width=\"1903\" height=\"1026\"></div><p>I was redirected to a page with the message Deployment is in progress:</p><div><img src=\"/blog/2024/04/22/20/51/img/deploymentInProgress.jpg\" alt=\"Deployment in progress\" width=\"1895\" height=\"1024\"></div><p>My deployment was complete. I clicked <span class=\"cod\">Go to resource</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/deploymentWasComplete.jpg\" alt=\"Deployment was complete\" width=\"1530\" height=\"619\"></div><p>My SQL server resource was available. I clicked <span class=\"cod\">Import database</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/sqlServerResourceAvailable.jpg\" alt=\"SQL server resource available\" width=\"1899\" height=\"1021\"></div><p>I clicked <span class=\"cod\">Select backup</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/selectBackup.jpg\" alt=\"Select backup\" width=\"1892\" height=\"1030\"></div><p>I clicked my storage account:</p><div><img src=\"/blog/2024/04/22/20/51/img/clickStorageAccount.jpg\" alt=\"Click storage account\" width=\"1695\" height=\"336\"></div><p>I clicked my container:</p><div><img src=\"/blog/2024/04/22/20/51/img/clickContainer.jpg\" alt=\"Click container\" width=\"1900\" height=\"1028\"></div><p>I clicked the BACPAC file that I wanted to restore from. Then I clicked <span class=\"cod\">Select</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/selectBACPACFile.jpg\" alt=\"Select BACPAC file\" width=\"1818\" height=\"976\"></div><p>My BACPAC file was selected successfully. I clicked <span class=\"cod\">Configure database</span> to change pricing tier and define the computing power and capacity of my database:</p><div><img src=\"/blog/2024/04/22/20/51/img/BACPACSelectedThenConfigureDatabase.jpg\" alt=\"BACPAC selected, then configure database\" width=\"1896\" height=\"1027\"></div><p>I selected <span class=\"cod\">Basic (For less demanding workloads)</span> as my <span class=\"cod\">Service tier</span>. Then I clicked <span class=\"cod\">Apply</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/chooseBasicServiceTier.jpg\" alt=\"Choose Basic service tier\" width=\"1087\" height=\"982\"></div><p>I provided a database name, and the <span class=\"cod\">Server admin login</span> and <span class=\"cod\">Password</span> for my logical server (created in previous steps). Then I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/importDatabase.jpg\" alt=\"Import database\" width=\"1908\" height=\"1023\"></div><p>The message <span class=\"cod\">Deployment is in progress</span> appeared:</p><div><img src=\"/blog/2024/04/22/20/51/img/databaseDeploymentInProgress.jpg\" alt=\"Database deployment in progress\" width=\"1900\" height=\"1034\"></div><p>My deployment failed. The error was: <span class=\"cod\">The resource write operation failed to complete successfully, because it reached terminal provisioning state 'Failed'. Click here for details.</span> I clicked the error message for details:</p><div><img src=\"/blog/2024/04/22/20/51/img/failedDeployment.jpg\" alt=\"Failed deployment\" width=\"1514\" height=\"565\"></div><p>This was the error summary:  <span class=\"cod\">The resource write operation failed to complete successfully, because it reached terminal provisioning state 'Failed'. (Code: ResourceDeploymentFailure, Target: /subscriptions/2c0d7d7b-29ee-4def-a6f6-234adfa3ecf2/resourceGroups/cloud-shell-storage-southcentralus/providers/Microsoft.Sql/servers/jaimemontoya/databases/Finances/extensions/import-without-private-link)</span></p><div><img src=\"/blog/2024/04/22/20/51/img/showErrorSummary.jpg\" alt=\"Show error summary\" width=\"1886\" height=\"622\"></div><p>I deleted the failed deployment. When navigating to the home page of the Microsoft Azure Portal, I saw the SQL database I created (the deployment that failed) as an existing resource. I clicked on it:</p><div><img src=\"/blog/2024/04/22/20/51/img/showDatabaseAsExistingResource.jpg\" alt=\"Show database as existing resource\" width=\"1422\" height=\"581\"></div><p>I clicked <span class=\"cod\">Query editor (preview)</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/clickQueryEditorPreview.jpg\" alt=\"Click Query Editor (preview)\" width=\"1516\" height=\"854\"></div><p>I provided my credentials to log in (created in previous steps) and clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/provideCredentialsToLogin.jpg\" alt=\"Provide credentials to login\" width=\"1408\" height=\"633\"></div><p>My connection attempt was denied and the following error message appeared: <span class=\"cod\">Reason: An instance-specific error occurred while establishing a connection to SQL Server. Connection was denied since Deny Public Network Access is set to Yes (https://docs.microsoft.com/azure/azure-sql/database/connectivity-settings#deny-public-network-access). To connect to this server, use the Private Endpoint from inside your virtual network (https://docs.microsoft.com/azure/sql-database/sql-database-private-endpoint-overview#how-to-set-up-private-link-for-azure-sql-database).</span></p><p>I clicked <span class=\"cod\">Finances (jaimemontoya/Finances)</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/clickDatabaseToEditConfigurations.jpg\" alt=\"Click database to edit configurations\" width=\"1408\" height=\"821\"></div><p>I clicked the <span class=\"cod\">Set server firewall</span> link:</p><div><img src=\"/blog/2024/04/22/20/51/img/setServerFirewall.jpg\" alt=\"Set server firewall\" width=\"1517\" height=\"851\"></div><p>I clicked the <span class=\"cod\">Selected networks</span> radio button. Then I clicked <span class=\"cod\">Add your client IPv4 address (168.243.238.100)</span> to allow access to the database from my current client IP address. After that, I checked the box <span class=\"cod\">Allow Azure services and resources to access this server</span> to allow access to the database from Azure services. Finally, I clicked <span class=\"cod\">Save</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/addFirewallRules.jpg\" alt=\"Add firewall rules\" width=\"1692\" height=\"977\"></div><p>I tried again clicking Query editor (preview) as shown in steps above, and after providing my credentials for SQL server authentication, I was able to login successfully. Nonetheless, my database did not have any tables. That confirms that the deployment trying to import my database from a BACPAC failed:</p><div><img src=\"/blog/2024/04/22/20/51/img/showEmptyDatabase.jpg\" alt=\"Empty database\" width=\"680\" height=\"480\"></div><p>I deleted the database:</p><div><img src=\"/blog/2024/04/22/20/51/img/deleteDatabase.jpg\" alt=\"Delete database\" width=\"1895\" height=\"973\"></div><p>I tried again the steps above to import my database from a BACPAC file, and this time the deployment was complete. I clicked <span class=\"cod\">Go to resource</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/databaseImportedSuccessfully.jpg\" alt=\"Database imported successfully from BACPAC file\" width=\"1517\" height=\"609\"></div><p>All of my tables were available and I was able to query the database successfully:</p><div><img src=\"/blog/2024/04/22/20/51/img/databaseAvailable.jpg\" alt=\"Database available\" width=\"1899\" height=\"1031\"></div><p>This is the overview of my database successfully created:</p><div><img src=\"/blog/2024/04/22/20/51/img/databaseOverview.jpg\" alt=\"Database overview\" width=\"1524\" height=\"436\"></div><p>This is the BACPAC file that I created and used according to the explanations provided in this blog post: <a href=\"includes/Finances.bacpac\">Finances.bacpac</a>.</p><p>I right-clicked the <span class=\"cod\">FinancesBACKUP</span> database, selected <span class=\"cod\">Tasks</span>, and clicked <span class=\"cod\">Generate Scripts...</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/generateScripts.jpg\" alt=\"Generate Scripts...\" width=\"701\" height=\"976\"></div><p>The <span class=\"cod\">Generate Scripts Wizard</span> appeared. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/generateScriptsForDatabaseObjects.jpg\" alt=\"Generate scripts for database objects\" width=\"1097\" height=\"739\"></div><p>From the <span class=\"cod\">Choose Options</span> window, I left <span class=\"cod\">Script entire database and all database objects</span> checked and clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/ScriptEntireDatabaseAndAllDatabaseObjects.jpg\" alt=\"Script entire database and all database objects\" width=\"1098\" height=\"738\"></div><p>From the <span class=\"cod\">Set Scripting Options</span> window, I selected <span class=\"cod\">Save as script file</span> and clicked <span class=\"cod\">Advanced</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/saveAsScriptFile.jpg\" alt=\"Save as script file\" width=\"1097\" height=\"741\"></div><p>From the <span class=\"cod\">Advanced Scripting Options</span> window, for <span class=\"cod\">Types of data to script</span> I changed the value from <span class=\"cod\">Schema only</span> to <span class=\"cod\">Schema and data</span>. Then I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/selectTypeOfDataScript.jpg\" alt=\"Select type of data script\" width=\"1593\" height=\"820\"></div><p>I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/saveAsScriptFile.jpg\" alt=\"Save as script file\" width=\"1097\" height=\"741\"></div><p>The <span class=\"cod\">Summary</span> window appeared. I clicked <span class=\"cod\">Next</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/generateScriptsSummary.jpg\" alt=\"Generate scripts summary\" width=\"1084\" height=\"740\"></div><p>The <span class=\"cod\">Save Scripts</span> window appeared. I clicked <span class=\"cod\">Finish</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/saveScripts.jpg\" alt=\"Save scripts\" width=\"1084\" height=\"792\"></div><p>I found the script in the location I specified, saved as <span class=\"cod\">C:\Users\jmont\Documents\script.sql</span> and having the content shown below:</p><div><img src=\"/blog/2024/04/22/20/51/img/propertiesOfScriptFile.jpg\" alt=\"Properties of script file\" width=\"387\" height=\"503\"></div>
<pre>
USE [master]
GO
/****** Object:  Database [FinancesBACKUP]    Script Date: 4/24/2024 11:05:10 PM ******/
CREATE DATABASE [FinancesBACKUP]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'Finances', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\Finances.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'Finances_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\DATA\Finances_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [FinancesBACKUP] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [FinancesBACKUP].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [FinancesBACKUP] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET ARITHABORT OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [FinancesBACKUP] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [FinancesBACKUP] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET  DISABLE_BROKER 
GO
ALTER DATABASE [FinancesBACKUP] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [FinancesBACKUP] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [FinancesBACKUP] SET  MULTI_USER 
GO
ALTER DATABASE [FinancesBACKUP] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [FinancesBACKUP] SET DB_CHAINING OFF 
GO
ALTER DATABASE [FinancesBACKUP] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [FinancesBACKUP] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [FinancesBACKUP] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [FinancesBACKUP] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'FinancesBACKUP', N'ON'
GO
ALTER DATABASE [FinancesBACKUP] SET QUERY_STORE = OFF
GO
USE [FinancesBACKUP]
GO
/****** Object:  Table [dbo].[DimBank]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimBank](
	[BankID] [int] NOT NULL,
	[BankName] [varchar](50) NOT NULL,
 CONSTRAINT [PK_DimCardBank] PRIMARY KEY CLUSTERED 
(
	[BankID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimBuyer]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimBuyer](
	[BuyerID] [int] NOT NULL,
	[BuyerName] [varchar](50) NOT NULL,
 CONSTRAINT [PK_DimBuyer] PRIMARY KEY CLUSTERED 
(
	[BuyerID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCard]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCard](
	[CardID] [int] NOT NULL,
	[CardNumber] [varchar](19) NOT NULL,
	[CardTypeID] [int] NOT NULL,
	[BankID] [int] NOT NULL,
	[CardBrandID] [int] NOT NULL,
 CONSTRAINT [PK_DimCard] PRIMARY KEY CLUSTERED 
(
	[CardID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCardBrand]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCardBrand](
	[CardBrandID] [int] NOT NULL,
	[CardBrandName] [varchar](10) NOT NULL,
 CONSTRAINT [PK_DimCardBrand] PRIMARY KEY CLUSTERED 
(
	[CardBrandID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCardType]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCardType](
	[CardTypeID] [int] NOT NULL,
	[CardTypeName] [varchar](7) NOT NULL,
 CONSTRAINT [PK_DimCardType] PRIMARY KEY CLUSTERED 
(
	[CardTypeID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCategory]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCategory](
	[CategoryID] [int] NOT NULL,
	[ParentCategoryID] [int] NOT NULL,
	[CategoryName] [varchar](50) NOT NULL,
 CONSTRAINT [PK_DimCategory] PRIMARY KEY CLUSTERED 
(
	[CategoryID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCity]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCity](
	[CityID] [int] NOT NULL,
	[CityName] [varchar](50) NOT NULL,
	[ProvinceID] [int] NOT NULL,
 CONSTRAINT [PK_DimCity] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimCountry]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimCountry](
	[CountryID] [int] NOT NULL,
	[CountryName] [varchar](255) NOT NULL,
 CONSTRAINT [PK_DimCountry] PRIMARY KEY CLUSTERED 
(
	[CountryID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimDay]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimDay](
	[DayID] [varchar](8) NOT NULL,
	[FullDateAlternateKey] [date] NOT NULL,
	[CalendarQuarter] [tinyint] NOT NULL,
	[CalendarYear] [smallint] NOT NULL,
	[CalendarSemester] [tinyint] NOT NULL,
	[DayOfWeek] [tinyint] NOT NULL,
	[CalendarMonth] [smallint] NOT NULL,
 CONSTRAINT [PK_DimDay] PRIMARY KEY CLUSTERED 
(
	[DayID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimParentCategory]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimParentCategory](
	[ParentCategoryID] [int] NOT NULL,
	[ParentCategoryName] [varchar](100) NOT NULL,
 CONSTRAINT [PK_DimParentCategory] PRIMARY KEY CLUSTERED 
(
	[ParentCategoryID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimPaymentMethod]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimPaymentMethod](
	[PaymentMethodID] [int] NOT NULL,
	[PaymentMethodName] [varchar](50) NOT NULL,
	[CardID] [int] NOT NULL,
 CONSTRAINT [PK_DimPaymentMethod] PRIMARY KEY CLUSTERED 
(
	[PaymentMethodID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimProvince]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimProvince](
	[ProvinceID] [int] NOT NULL,
	[ProvinceName] [varchar](25) NOT NULL,
	[CountryID] [int] NOT NULL,
 CONSTRAINT [PK_DimProvince] PRIMARY KEY CLUSTERED 
(
	[ProvinceID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[DimSeller]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[DimSeller](
	[SellerID] [int] NOT NULL,
	[SellerName] [varchar](100) NOT NULL,
 CONSTRAINT [PK_DimSeller] PRIMARY KEY CLUSTERED 
(
	[SellerID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactPurchases]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactPurchases](
	[TotalPurchases] [money] NOT NULL,
	[Description] [varchar](1000) NOT NULL,
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[SellerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL,
 CONSTRAINT [PK_FactPurchases] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[SellerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactPurchasesXDimCategory]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactPurchasesXDimCategory](
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[SellerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL,
 CONSTRAINT [PK_FactPurchasesXDimCategory] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[SellerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactSales]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactSales](
	[TotalSales] [money] NOT NULL,
	[Description] [varchar](1000) NOT NULL,
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[BuyerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL,
 CONSTRAINT [PK_FactSales] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[BuyerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[FactSalesXDimCategory]    Script Date: 4/24/2024 11:05:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[FactSalesXDimCategory](
	[CityID] [int] NOT NULL,
	[DayID] [varchar](8) NOT NULL,
	[PaymentMethodID] [int] NOT NULL,
	[BuyerID] [int] NOT NULL,
	[CategoryID] [int] NOT NULL,
	[CategoryDeduplicate] [int] NOT NULL,
 CONSTRAINT [PK_FactSalesXDimCategory] PRIMARY KEY CLUSTERED 
(
	[CityID] ASC,
	[DayID] ASC,
	[PaymentMethodID] ASC,
	[BuyerID] ASC,
	[CategoryID] ASC,
	[CategoryDeduplicate] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
INSERT [dbo].[DimBank] ([BankID], [BankName]) VALUES (1, N'N/A')
INSERT [dbo].[DimBank] ([BankID], [BankName]) VALUES (2, N'BAC Credomatic')
GO
INSERT [dbo].[DimBuyer] ([BuyerID], [BuyerName]) VALUES (1, N'TEAM International, Inc.')
INSERT [dbo].[DimBuyer] ([BuyerID], [BuyerName]) VALUES (2, N'Miguel Polanco')
INSERT [dbo].[DimBuyer] ([BuyerID], [BuyerName]) VALUES (3, N'Unclaimed money')
GO
INSERT [dbo].[DimCard] ([CardID], [CardNumber], [CardTypeID], [BankID], [CardBrandID]) VALUES (1, N'N/A', 1, 1, 1)
INSERT [dbo].[DimCard] ([CardID], [CardNumber], [CardTypeID], [BankID], [CardBrandID]) VALUES (2, N'4085-18**-****-0998', 2, 2, 2)
INSERT [dbo].[DimCard] ([CardID], [CardNumber], [CardTypeID], [BankID], [CardBrandID]) VALUES (3, N'4919-49**-****-5863', 2, 2, 2)
INSERT [dbo].[DimCard] ([CardID], [CardNumber], [CardTypeID], [BankID], [CardBrandID]) VALUES (4, N'118961457', 3, 2, 1)
GO
INSERT [dbo].[DimCardBrand] ([CardBrandID], [CardBrandName]) VALUES (1, N'N/A')
INSERT [dbo].[DimCardBrand] ([CardBrandID], [CardBrandName]) VALUES (2, N'VISA')
GO
INSERT [dbo].[DimCardType] ([CardTypeID], [CardTypeName]) VALUES (1, N'N/A')
INSERT [dbo].[DimCardType] ([CardTypeID], [CardTypeName]) VALUES (2, N'Credit')
INSERT [dbo].[DimCardType] ([CardTypeID], [CardTypeName]) VALUES (3, N'Savings')
GO
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (1, 1, N'Restaurant for church fellowship')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (2, 1, N'Cash donation for church')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (3, 2, N'Email')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (4, 2, N'Server')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (5, 3, N'Book')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (6, 4, N'Warehouse club membership')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (7, 5, N'Salary')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (8, 6, N'Health insurance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (9, 7, N'Parking')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (10, 8, N'Restaurant with nuclear family')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (11, 8, N'Household medicine')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (12, 9, N'Gasoline')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (13, 10, N'Family debt')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (14, 2, N'Domain')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (15, 8, N'Household cash gift')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (16, 8, N'Household food')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (17, 9, N'Car part repair and maintenance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (18, 11, N'Clothing')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (19, 12, N'Charger, battery, cable')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (20, 9, N'Car labor repair and maintenance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (21, 8, N'Household personal hygiene')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (22, 1, N'Food/Drinks contribution for church fellowship')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (23, 8, N'Household cleaning products')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (24, 9, N'Car insurance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (25, 8, N'Electricity')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (26, 13, N'House mortgage')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (27, 14, N'Tax penalty')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (28, 2, N'Top up phone balance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (29, 8, N'Water bill')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (30, 9, N'Traffic ticket')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (31, 8, N'Restaurant with family')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (32, 8, N'Household gift')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (33, 15, N'Glasses')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (34, 16, N'Attractions entrance fee')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (35, 2, N'Screen and camera recording')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (36, 17, N'Gym')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (37, 8, N'Household medical expenses')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (38, 20, N'Kitchen accessories')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (39, 8, N'Family gift')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (40, 18, N'Bank charge')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (41, 19, N'Government taxes for receiving foreign transfer')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (42, 21, N'Friend gift')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (43, 1, N'Children''s Sunday School snacks')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (44, 3, N'Learning subscription')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (45, 1, N'Equipment for church')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (46, 12, N'Watch')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (47, 17, N'Physical exercise tracking service')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (48, 13, N'House materials repair and maintenance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (49, 13, N'House labor labor repair and maintenance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (50, 22, N'Movie theater')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (51, 16, N'Hotel')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (52, 23, N'Restaurant with friends')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (53, 22, N'Subscription video on-demand')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (54, 13, N'House security and maintenance')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (55, 24, N'Unclaimed money')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (56, 1, N'Email for church')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (57, 1, N'Domain for church')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (58, 20, N'Stationery and office supplies')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (59, 8, N'Food contribution for family meal')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (60, 25, N'Supermarket loyalty Program')
INSERT [dbo].[DimCategory] ([CategoryID], [ParentCategoryID], [CategoryName]) VALUES (61, 26, N'Money lent to family')
GO
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (1, N'Colonia Escalon', 1)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (2, N'La Mascota', 1)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (3, N'Online', 2)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (4, N'San Benito', 1)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (5, N'Antiguo Cuscatlan', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (6, N'Santa Tecla', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (7, N'Volcan de San Salvador', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (8, N'Cordillera del Balsamo', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (9, N'San Salvador', 1)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (10, N'Tamanique', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (11, N'Playa El Cocal', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (12, N'Parque Nacional Cerro Verde', 4)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (13, N'La Cima', 1)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (14, N'Santa Ana', 4)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (15, N'San Luis Talpa
', 5)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (16, N'Concepcion de Ataco', 6)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (17, N'Chalchuapa', 4)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (18, N'Playa El Sunzal', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (19, N'Los Naranjos', 7)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (20, N'Playa El Zonte
', 3)
INSERT [dbo].[DimCity] ([CityID], [CityName], [ProvinceID]) VALUES (21, N'Los Naranjos', 4)
GO
INSERT [dbo].[DimCountry] ([CountryID], [CountryName]) VALUES (1, N'El Salvador')
INSERT [dbo].[DimCountry] ([CountryID], [CountryName]) VALUES (2, N'Online')
GO
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20140331', CAST(N'2024-03-31' AS Date), 1, 2024, 1, 1, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231001', CAST(N'2023-10-01' AS Date), 4, 2023, 2, 1, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231002', CAST(N'2023-10-02' AS Date), 4, 2023, 2, 2, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231003', CAST(N'2023-10-03' AS Date), 4, 2023, 2, 3, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231004', CAST(N'2023-10-04' AS Date), 4, 2023, 2, 4, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231005', CAST(N'2023-10-05' AS Date), 4, 2023, 2, 5, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231006', CAST(N'2023-10-06' AS Date), 4, 2023, 2, 6, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231007', CAST(N'2023-10-07' AS Date), 4, 2023, 2, 7, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231008', CAST(N'2023-10-08' AS Date), 4, 2023, 2, 1, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231009', CAST(N'2023-10-09' AS Date), 4, 2023, 2, 2, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231010', CAST(N'2023-10-10' AS Date), 4, 2023, 2, 3, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231011', CAST(N'2023-10-11' AS Date), 4, 2023, 2, 4, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231012', CAST(N'2023-10-12' AS Date), 4, 2023, 2, 5, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231013', CAST(N'2023-10-13' AS Date), 4, 2023, 2, 6, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231014', CAST(N'2023-10-14' AS Date), 4, 2023, 2, 7, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231015', CAST(N'2023-10-15' AS Date), 4, 2023, 2, 1, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231016', CAST(N'2023-10-16' AS Date), 4, 2023, 2, 2, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231017', CAST(N'2023-10-17' AS Date), 4, 2023, 2, 3, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231018', CAST(N'2023-10-18' AS Date), 4, 2023, 2, 4, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231019', CAST(N'2023-10-19' AS Date), 4, 2023, 2, 5, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231020', CAST(N'2023-10-20' AS Date), 4, 2023, 2, 6, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231021', CAST(N'2023-10-21' AS Date), 4, 2023, 2, 7, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231022', CAST(N'2023-10-22' AS Date), 4, 2023, 2, 1, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231023', CAST(N'2023-10-23' AS Date), 4, 2023, 2, 2, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231024', CAST(N'2023-10-24' AS Date), 4, 2023, 2, 3, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231025', CAST(N'2023-10-25' AS Date), 4, 2023, 2, 4, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231026', CAST(N'2023-10-26' AS Date), 4, 2023, 2, 5, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231027', CAST(N'2023-10-27' AS Date), 4, 2023, 2, 6, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231028', CAST(N'2023-10-28' AS Date), 4, 2023, 2, 7, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231029', CAST(N'2023-10-29' AS Date), 4, 2023, 2, 1, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231030', CAST(N'2023-10-30' AS Date), 4, 2023, 2, 2, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231031', CAST(N'2023-10-31' AS Date), 4, 2023, 2, 3, 10)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231101', CAST(N'2023-11-01' AS Date), 4, 2023, 2, 4, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231102', CAST(N'2023-11-02' AS Date), 4, 2023, 2, 5, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231103', CAST(N'2023-11-03' AS Date), 4, 2023, 2, 6, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231104', CAST(N'2023-11-04' AS Date), 4, 2023, 2, 7, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231105', CAST(N'2023-11-05' AS Date), 4, 2023, 2, 1, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231106', CAST(N'2023-11-06' AS Date), 4, 2023, 2, 2, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231107', CAST(N'2023-11-07' AS Date), 4, 2023, 2, 3, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231108', CAST(N'2023-11-08' AS Date), 4, 2023, 2, 4, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231109', CAST(N'2023-11-09' AS Date), 4, 2023, 2, 5, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231110', CAST(N'2023-11-10' AS Date), 4, 2023, 2, 6, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231111', CAST(N'2023-11-11' AS Date), 4, 2023, 2, 7, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231112', CAST(N'2023-11-12' AS Date), 4, 2023, 2, 1, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231113', CAST(N'2023-11-13' AS Date), 4, 2023, 2, 2, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231114', CAST(N'2023-11-14' AS Date), 4, 2023, 2, 3, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231115', CAST(N'2023-11-15' AS Date), 4, 2023, 2, 4, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231116', CAST(N'2023-11-16' AS Date), 4, 2023, 2, 5, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231117', CAST(N'2023-11-17' AS Date), 4, 2023, 2, 6, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231118', CAST(N'2023-11-18' AS Date), 4, 2023, 2, 7, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231119', CAST(N'2023-11-19' AS Date), 4, 2023, 2, 1, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231120', CAST(N'2023-11-20' AS Date), 4, 2023, 2, 2, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231121', CAST(N'2023-11-21' AS Date), 4, 2023, 2, 3, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231122', CAST(N'2023-11-22' AS Date), 4, 2023, 2, 4, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231123', CAST(N'2023-11-23' AS Date), 4, 2023, 2, 5, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231124', CAST(N'2023-11-24' AS Date), 4, 2023, 2, 6, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231125', CAST(N'2023-11-25' AS Date), 4, 2023, 2, 7, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231126', CAST(N'2023-11-26' AS Date), 4, 2023, 2, 1, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231127', CAST(N'2023-11-27' AS Date), 4, 2023, 2, 2, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231128', CAST(N'2023-11-28' AS Date), 4, 2023, 2, 3, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231129', CAST(N'2023-11-29' AS Date), 4, 2023, 2, 4, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231130', CAST(N'2023-11-30' AS Date), 4, 2023, 2, 5, 11)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231201', CAST(N'2023-12-01' AS Date), 4, 2023, 2, 6, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231202', CAST(N'2023-12-02' AS Date), 4, 2023, 2, 7, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231203', CAST(N'2023-12-03' AS Date), 4, 2023, 2, 1, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231204', CAST(N'2023-12-04' AS Date), 4, 2023, 2, 2, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231205', CAST(N'2023-12-05' AS Date), 4, 2023, 2, 3, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231206', CAST(N'2023-12-06' AS Date), 4, 2023, 2, 4, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231207', CAST(N'2023-12-07' AS Date), 4, 2023, 2, 5, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231208', CAST(N'2023-12-08' AS Date), 4, 2023, 2, 6, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231209', CAST(N'2023-12-09' AS Date), 4, 2023, 2, 7, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231210', CAST(N'2023-12-10' AS Date), 4, 2023, 2, 1, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231211', CAST(N'2023-12-11' AS Date), 4, 2023, 2, 2, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231212', CAST(N'2023-12-12' AS Date), 4, 2023, 2, 3, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231213', CAST(N'2023-12-13' AS Date), 4, 2023, 2, 4, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231214', CAST(N'2023-12-14' AS Date), 4, 2023, 2, 5, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231215', CAST(N'2023-12-15' AS Date), 4, 2023, 2, 6, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231216', CAST(N'2023-12-16' AS Date), 4, 2023, 2, 7, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231217', CAST(N'2023-12-17' AS Date), 4, 2023, 2, 1, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231218', CAST(N'2023-12-18' AS Date), 4, 2023, 2, 2, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231219', CAST(N'2023-12-19' AS Date), 4, 2023, 2, 3, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231220', CAST(N'2023-12-20' AS Date), 4, 2023, 2, 4, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231221', CAST(N'2023-12-21' AS Date), 4, 2023, 2, 5, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231222', CAST(N'2023-12-22' AS Date), 4, 2023, 2, 6, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231223', CAST(N'2023-12-23' AS Date), 4, 2023, 2, 7, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231224', CAST(N'2023-12-24' AS Date), 4, 2023, 2, 1, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231225', CAST(N'2023-12-25' AS Date), 4, 2023, 2, 2, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231226', CAST(N'2023-12-26' AS Date), 4, 2023, 2, 3, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231227', CAST(N'2023-12-27' AS Date), 4, 2023, 2, 4, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231228', CAST(N'2023-12-28' AS Date), 4, 2023, 2, 5, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231229', CAST(N'2023-12-29' AS Date), 4, 2023, 2, 6, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231230', CAST(N'2023-12-30' AS Date), 4, 2023, 2, 7, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20231231', CAST(N'2023-12-31' AS Date), 4, 2023, 2, 1, 12)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240101', CAST(N'2024-01-01' AS Date), 1, 2024, 1, 2, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240102', CAST(N'2024-01-02' AS Date), 1, 2024, 1, 3, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240103', CAST(N'2024-01-03' AS Date), 1, 2024, 1, 4, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240104', CAST(N'2024-01-04' AS Date), 1, 2024, 1, 5, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240105', CAST(N'2024-01-05' AS Date), 1, 2024, 1, 6, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240106', CAST(N'2024-01-06' AS Date), 1, 2024, 1, 7, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240107', CAST(N'2024-01-07' AS Date), 1, 2024, 1, 1, 1)
GO
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240108', CAST(N'2024-01-08' AS Date), 1, 2024, 1, 2, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240109', CAST(N'2024-01-09' AS Date), 1, 2024, 1, 3, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240110', CAST(N'2024-01-10' AS Date), 1, 2024, 1, 4, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240111', CAST(N'2024-01-11' AS Date), 1, 2024, 1, 5, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240112', CAST(N'2024-01-12' AS Date), 1, 2024, 1, 6, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240113', CAST(N'2024-01-13' AS Date), 1, 2024, 1, 7, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240114', CAST(N'2024-01-14' AS Date), 1, 2024, 1, 1, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240115', CAST(N'2024-01-15' AS Date), 1, 2024, 1, 2, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240116', CAST(N'2024-01-16' AS Date), 1, 2024, 1, 3, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240117', CAST(N'2024-01-17' AS Date), 1, 2024, 1, 4, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240118', CAST(N'2024-01-18' AS Date), 1, 2024, 1, 5, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240119', CAST(N'2024-01-19' AS Date), 1, 2024, 1, 6, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240120', CAST(N'2024-01-20' AS Date), 1, 2024, 1, 7, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240121', CAST(N'2024-01-21' AS Date), 1, 2024, 1, 1, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240122', CAST(N'2024-01-22' AS Date), 1, 2024, 1, 2, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240123', CAST(N'2024-01-23' AS Date), 1, 2024, 1, 3, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240124', CAST(N'2024-01-24' AS Date), 1, 2024, 1, 4, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240125', CAST(N'2024-01-25' AS Date), 1, 2024, 1, 5, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240126', CAST(N'2024-01-26' AS Date), 1, 2024, 1, 6, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240127', CAST(N'2024-01-27' AS Date), 1, 2024, 1, 7, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240128', CAST(N'2024-01-28' AS Date), 1, 2024, 1, 1, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240129', CAST(N'2024-01-29' AS Date), 1, 2024, 1, 2, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240130', CAST(N'2024-01-30' AS Date), 1, 2024, 1, 3, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240131', CAST(N'2024-01-31' AS Date), 1, 2024, 1, 4, 1)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240201', CAST(N'2024-02-01' AS Date), 1, 2024, 1, 5, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240202', CAST(N'2024-02-02' AS Date), 1, 2024, 1, 6, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240203', CAST(N'2024-02-03' AS Date), 1, 2024, 1, 7, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240204', CAST(N'2024-02-04' AS Date), 1, 2024, 1, 1, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240205', CAST(N'2024-02-05' AS Date), 1, 2024, 1, 2, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240206', CAST(N'2024-02-06' AS Date), 1, 2024, 1, 3, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240207', CAST(N'2024-02-07' AS Date), 1, 2024, 1, 4, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240208', CAST(N'2024-02-08' AS Date), 1, 2024, 1, 5, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240209', CAST(N'2024-02-09' AS Date), 1, 2024, 1, 6, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240210', CAST(N'2024-02-10' AS Date), 1, 2024, 1, 7, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240211', CAST(N'2024-02-11' AS Date), 1, 2024, 1, 1, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240212', CAST(N'2024-02-12' AS Date), 1, 2024, 1, 2, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240213', CAST(N'2024-02-13' AS Date), 1, 2024, 1, 3, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240214', CAST(N'2024-02-14' AS Date), 1, 2024, 1, 4, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240215', CAST(N'2024-02-15' AS Date), 1, 2024, 1, 5, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240216', CAST(N'2024-02-16' AS Date), 1, 2024, 1, 6, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240217', CAST(N'2024-02-17' AS Date), 1, 2024, 1, 7, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240218', CAST(N'2024-02-18' AS Date), 1, 2024, 1, 1, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240219', CAST(N'2024-02-19' AS Date), 1, 2024, 1, 2, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240220', CAST(N'2024-02-20' AS Date), 1, 2024, 1, 3, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240221', CAST(N'2024-02-21' AS Date), 1, 2024, 1, 4, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240222', CAST(N'2024-02-22' AS Date), 1, 2024, 1, 5, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240223', CAST(N'2024-02-23' AS Date), 1, 2024, 1, 6, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240224', CAST(N'2024-02-24' AS Date), 1, 2024, 1, 7, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240225', CAST(N'2024-02-25' AS Date), 1, 2024, 1, 1, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240226', CAST(N'2024-02-26' AS Date), 1, 2024, 1, 2, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240227', CAST(N'2024-02-27' AS Date), 1, 2024, 1, 3, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240228', CAST(N'2024-02-28' AS Date), 1, 2024, 1, 4, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240229', CAST(N'2024-02-29' AS Date), 1, 2024, 1, 5, 2)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240301', CAST(N'2024-03-01' AS Date), 1, 2024, 1, 6, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240302', CAST(N'2024-03-02' AS Date), 1, 2024, 1, 7, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240303', CAST(N'2024-03-03' AS Date), 1, 2024, 1, 1, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240304', CAST(N'2024-03-04' AS Date), 1, 2024, 1, 2, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240305', CAST(N'2024-03-05' AS Date), 1, 2024, 1, 3, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240306', CAST(N'2024-03-06' AS Date), 1, 2024, 1, 4, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240307', CAST(N'2024-03-07' AS Date), 1, 2024, 1, 5, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240308', CAST(N'2024-03-08' AS Date), 1, 2024, 1, 6, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240309', CAST(N'2024-03-09' AS Date), 1, 2024, 1, 7, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240310', CAST(N'2024-03-10' AS Date), 1, 2024, 1, 1, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240311', CAST(N'2024-03-11' AS Date), 1, 2024, 1, 2, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240312', CAST(N'2024-03-12' AS Date), 1, 2024, 1, 3, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240313', CAST(N'2024-03-13' AS Date), 1, 2024, 1, 4, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240314', CAST(N'2024-03-14' AS Date), 1, 2024, 1, 5, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240315', CAST(N'2024-03-15' AS Date), 1, 2024, 1, 6, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240316', CAST(N'2024-03-16' AS Date), 1, 2024, 1, 7, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240317', CAST(N'2024-03-17' AS Date), 1, 2024, 1, 1, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240318', CAST(N'2024-03-18' AS Date), 1, 2024, 1, 2, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240319', CAST(N'2024-03-19' AS Date), 1, 2024, 1, 3, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240320', CAST(N'2024-03-20' AS Date), 1, 2024, 1, 4, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240321', CAST(N'2024-03-21' AS Date), 1, 2024, 1, 5, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240322', CAST(N'2024-03-22' AS Date), 1, 2024, 1, 6, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240323', CAST(N'2024-03-23' AS Date), 1, 2024, 1, 7, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240324', CAST(N'2024-03-24' AS Date), 1, 2024, 1, 1, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240325', CAST(N'2024-03-25' AS Date), 1, 2024, 1, 2, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240326', CAST(N'2024-03-26' AS Date), 1, 2024, 1, 3, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240327', CAST(N'2024-03-27' AS Date), 1, 2024, 1, 4, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240328', CAST(N'2024-03-28' AS Date), 1, 2024, 1, 5, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240329', CAST(N'2024-03-29' AS Date), 1, 2024, 1, 6, 3)
INSERT [dbo].[DimDay] ([DayID], [FullDateAlternateKey], [CalendarQuarter], [CalendarYear], [CalendarSemester], [DayOfWeek], [CalendarMonth]) VALUES (N'20240330', CAST(N'2024-03-30' AS Date), 1, 2024, 1, 7, 3)
GO
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (1, N'Donation')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (2, N'Digital subscription')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (3, N'Education')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (4, N'Membership')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (5, N'Employee salary')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (6, N'Insurance')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (7, N'Parking')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (8, N'Household expenses')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (9, N'Transportation')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (10, N'Debt')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (11, N'Clothing')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (12, N'Electronic device and parts')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (13, N'Housing')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (14, N'Accounting')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (15, N'Accessories')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (16, N'Travel')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (17, N'Health')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (18, N'Bank charge')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (19, N'Government taxes')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (20, N'Home maintenance, equipment, accessories and furniture')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (21, N'Social gift')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (22, N'Entertainment')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (23, N'Social life')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (24, N'Unclaimed money')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (25, N'Loyalty program')
INSERT [dbo].[DimParentCategory] ([ParentCategoryID], [ParentCategoryName]) VALUES (26, N'Money lent')
GO
INSERT [dbo].[DimPaymentMethod] ([PaymentMethodID], [PaymentMethodName], [CardID]) VALUES (1, N'Cash', 1)
INSERT [dbo].[DimPaymentMethod] ([PaymentMethodID], [PaymentMethodName], [CardID]) VALUES (2, N'4085-18**-****-0998', 2)
INSERT [dbo].[DimPaymentMethod] ([PaymentMethodID], [PaymentMethodName], [CardID]) VALUES (3, N'4919-49**-****-5863', 3)
INSERT [dbo].[DimPaymentMethod] ([PaymentMethodID], [PaymentMethodName], [CardID]) VALUES (4, N'118961457', 4)
GO
INSERT [dbo].[DimProvince] ([ProvinceID], [ProvinceName], [CountryID]) VALUES (1, N'San Salvador', 1)
INSERT [dbo].[DimProvince] ([ProvinceID], [ProvinceName], [CountryID]) VALUES (2, N'Online', 2)
INSERT [dbo].[DimProvince] ([ProvinceID], [ProvinceName], [CountryID]) VALUES (3, N'La Libertad', 1)
INSERT [dbo].[DimProvince] ([ProvinceID], [ProvinceName], [CountryID]) VALUES (4, N'Santa Ana', 1)
INSERT [dbo].[DimProvince] ([ProvinceID], [ProvinceName], [CountryID]) VALUES (5, N'La Paz', 1)
INSERT [dbo].[DimProvince] ([ProvinceID], [ProvinceName], [CountryID]) VALUES (6, N'Ahuachapan', 1)
INSERT [dbo].[DimProvince] ([ProvinceID], [ProvinceName], [CountryID]) VALUES (7, N'Sonsonate', 1)
GO
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (1, N'Restaurante Royal')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (2, N'Union Church of San Salvador')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (3, N'Google')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (4, N'DigitalOcean')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (5, N'Amazon')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (6, N'Pollo Campero')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (7, N'PriceSmart')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (8, N'Asesuisa')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (9, N'Multiplaza')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (10, N'San Martin')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (11, N'Farmacias Camila')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (12, N'McDonald''s')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (13, N'Restaurante y Jardin Ecologico Cafe del Volcan')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (14, N'Texaco')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (15, N'Grandmother')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (16, N'El Zocalo')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (17, N'Alfresco')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (18, N'Namecheap')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (19, N'Partner')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (20, N'LacaLaca')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (21, N'Street vendor')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (22, N'El Mirador de La Giralda')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (23, N'Go Green')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (24, N'Econoparts')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (25, N'Almacenes Siman')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (26, N'Techstop')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (27, N'DIPARVEL')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (28, N'Burger King')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (29, N'CAESS')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (30, N'BAC Credomatic')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (31, N'Hipermall Las Cascadas')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (32, N'Ministerio de Hacienda')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (33, N'Digicel')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (34, N'ANDA')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (35, N'Comedor y Pupuseria La Santaneca')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (36, N'Diego''s Restaurant')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (37, N'Small business in Antiguo Cuscatlan')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (38, N'Puma Energy')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (39, N'La Pampa')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (40, N'Presidente Plaza')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (41, N'Opticas La Realeza')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (42, N'Maurita Mariscos y Cocteles')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (43, N'Super Selectos')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (44, N'Chocolate Nibs')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (45, N'Los Volcanes Bistro Cafe')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (46, N'Ministerio de Medio Ambiente y Recursos Naturales, Gobierno de El Salvador')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (47, N'Instituto Salvadoreno de Turismo, Gobierno de El Salvador')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (48, N'Loom, Inc.')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (49, N'World Gym')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (50, N'Papa John''s')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (51, N'Centro Integral para Manejo del Dolor')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (52, N'Denny''s')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (53, N'A lo Peruano')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (54, N'La Popuza')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (55, N'Walmart')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (56, N'Rena Ware')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (57, N'Le Croissant')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (58, N'Andian Bistro & Cafe')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (59, N'Crepe Lovers')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (60, N'KOI Sushi')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (61, N'Mister Donut
')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (62, N'Pupusas y Tipicos La Cacerola')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (63, N'El Salvador International Airport
')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (64, N'Farmacias UNO')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (65, N'O''Reilly Media, Inc.')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (66, N'iShop Centroamerica')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (67, N'Strava')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (68, N'Kreef')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (69, N'Oscar Villafranco')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (70, N'Cinemark Holdings, Inc.')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (71, N'Airbnb, Inc.')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (72, N'Palermo Prime Steakhouse & Wine Bar')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (73, N'Bambu City Center')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (74, N'Plaza La Ceiba')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (75, N'Antiguo Cuscatlan Municipal Parking')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (76, N'Farmacias Economicas')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (77, N'Hilton Hotels & Resorts')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (78, N'Small business in Ataco')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (79, N'Max (streaming service)')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (80, N'Restaurante Graciela')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (81, N'Los Castanos condominium')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (82, N'Lubrimotors Repuestos')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (83, N'Steren')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (84, N'Cafe Sunzal')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (85, N'llaollao')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (86, N'Sucree')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (87, N'Coursera Inc.')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (88, N'Restaurante Caliche''s')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (89, N'Panaderia Polanco')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (90, N'Pupuseria Suiza')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (91, N'Taqueria Los Tapatios')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (92, N'El Pinche')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (93, N'National Palace (El Salvador)')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (94, N'Centro Comercial Galerias')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (95, N'Starbucks')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (96, N'Plaza Merliot')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (97, N'Delikat')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (98, N'Cinepolis')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (99, N'BibleGateway')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (100, N'Small business in Los Naranjos')
GO
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (101, N'Sandy''s Gift Shop')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (102, N'Inna Jammin')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (103, N'Hachibi Store')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (104, N'Shaw''s')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (105, N'Dollarcity')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (106, N'Uber Technologies, Inc.')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (107, N'GQ Automotores
')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (108, N'Office Depot, Inc.')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (109, N'Gasolineras Uno')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (110, N'La Esquina de Kurt
')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (111, N'Chez Andre
')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (112, N'Courtyard by Marriott')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (113, N'Esencia Nativa
')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (114, N'Farmacias San Nicolas')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (115, N'Brasas y Lena Restaurante Mirador')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (116, N'Vivero Cafe El Arco')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (117, N'Volcano Restaurante
')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (118, N'Esta Carbon')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (119, N'Kaltepet')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (120, N'Daniela Polanco')
INSERT [dbo].[DimSeller] ([SellerID], [SellerName]) VALUES (121, N'Basilico Italian Bistro')
GO
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Table with Theo, for Rebeca''s birthday with Union Church people.', 1, N'20231001', 1, 1, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231001', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231008', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (50.0000, N'Food.', 1, N'20231008', 1, 19, 15, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (723.0000, N'Mortgage for Los Castanos to BAC (Masferrer branch) for October 2023.', 1, N'20231014', 1, 30, 26, 13)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (14.7400, N'Lunch with Gabriela.', 1, N'20231014', 2, 23, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231015', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5.9900, N'Lunch for Gabriela. By Masferrer roundabout.', 1, N'20231015', 2, 28, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (57.1400, N'Paying traffic ticket at BAC Masferrer.', 1, N'20231016', 1, 32, 30, 9)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (2.5000, N'2 chocobananos at Salvador del Mundo, with mom and grandmother.', 1, N'20231021', 1, 21, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231022', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (41.1500, N'Breakfast with mom and Grandmother at La Pampa Escalon.', 1, N'20231022', 2, 39, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (41.3100, N'Lunch with Gabriela and Miguel at Maurita Mariscos y Cocteles, Palm Plaza by Masferrer roundabout.', 1, N'20231026', 2, 42, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (28.3000, N'Food.', 1, N'20231027', 2, 43, 16, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231029', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (16.3800, N'Food.', 1, N'20231029', 2, 43, 16, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (25.0000, N'Gym subscription for November 2023.', 1, N'20231030', 2, 49, 36, 17)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1.0000, N'Bananas outside of Super Selectos Masferrer.', 1, N'20231031', 1, 21, 16, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (36.1100, N'Food from Super Selectos Masferrer.', 1, N'20231031', 2, 43, 16, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (200.0000, N'Gabriela''s medical expenses for four sessions: Oct. 30, Oct. 31, Nov. 1, and $50 remaining for a future session.', 1, N'20231101', 1, 51, 37, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4.9500, N'Garlic Knots for Gabriela from Papa John’s Luceiro.', 1, N'20231101', 2, 50, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (37.4400, N'Gasoline from Texaco Masferrer.', 1, N'20231102', 2, 14, 12, 9)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (100.0000, N'Housing.', 1, N'20231103', 1, 19, 15, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (14.4700, N'Dinner with Gabriela and Union Church people after sports day.', 1, N'20231104', 2, 54, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231105', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (50.0000, N'Housing.', 1, N'20231105', 1, 19, 15, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (100.0000, N'Gabriela''s medical expenses for two sessions, covering until Nov. 10. Total so far, 6 sessions for $300 (3 sessions last week, 3 current week).', 1, N'20231105', 1, 51, 37, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (7.7600, N'Food.', 1, N'20231105', 2, 43, 16, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231112', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231119', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231126', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231203', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231210', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20231217', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20240107', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20240114', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20240121', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20240128', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20240204', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 1, N'20240225', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (8.0000, N'Breakfast with Theo/Union Church Men''s Bible study.', 2, N'20231011', 1, 20, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.3000, N'Pumpkin loaf for Gabriela from San Martin at Las Azaleas.', 2, N'20231028', 2, 10, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Union Church of San Salvador. Donation.', 2, N'20240303', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.0000, N'Donation.', 2, N'20240317', 1, 2, 2, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.0000, N'Google Workspace Business Starter for September 2023.', 3, N'20231001', 2, 3, 3, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.7800, N'138.197.165.222 server for September 2023.', 3, N'20231001', 2, 4, 4, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (10.7900, N'\"Academic Writing for Graduate Students: Essential Tasks and Skills\", by John Swales, Christine Feak. Kindle Edition.', 3, N'20231003', 2, 5, 5, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (16.1900, N'\"Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones\", by James Clear. Kindle Edition.', 3, N'20231006', 2, 5, 5, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (53.2800, N'Medical insurance Policy No. 45316, payment No. 12.', 3, N'20231006', 2, 8, 8, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (25.0000, N'Bank commission for receiving wire transfer from international employer.', 3, N'20231006', 4, 30, 40, 18)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3.2500, N'Government of El Salvador''s commission for receiving wire transfer from international employer.', 3, N'20231006', 4, 32, 41, 19)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1500.0000, N'Debt to grandmother.', 3, N'20231007', 4, 15, 13, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (7.6600, N'Domain Registration jaimemontoya.org.', 3, N'20231010', 2, 18, 14, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (53.8100, N'ASESUISA. Car insurance.', 3, N'20231015', 2, 8, 24, 9)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (36.3600, N'Electricity.', 3, N'20231015', 2, 29, 25, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (10.0000, N'Top up Digicel phone balance.', 3, N'20231016', 2, 33, 28, 2)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (2.3900, N'Water bill.', 3, N'20231016', 2, 34, 29, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (18.3500, N'\"12 Rules for Life\", by Jordan B. Peterson. Kindle Edition.', 3, N'20231025', 2, 5, 5, 3)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (96.0000, N'Loom Business - Annual. $10.00 USD × 1 Creator × 12 months: $120.00 USD. Annual discount: -$24.00 USD. Billed at renewal: $96.00 USD.', 3, N'20231029', 3, 48, 35, 2)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.3800, N'Google Workspace Business Starter for October 2023.', 3, N'20231101', 2, 3, 3, 2)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.0000, N'138.197.165.222 server for October 2023.', 3, N'20231101', 2, 4, 4, 2)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (25.0000, N'Bank commission for receiving wire transfer from international employer.', 3, N'20231104', 4, 30, 40, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3.2500, N'Government of El Salvador''s commission for receiving wire transfer from international employer.', 3, N'20231104', 4, 32, 41, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5.0000, N'Breakfast with Michael and Theo.', 4, N'20231004', 1, 6, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4.3500, N'Lunch with Andrew, Silvia and their kids, for Union Church fellowship. Zona Rosa.', 4, N'20231015', 2, 12, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (0.5000, N'Parking when buying Nike glasses.', 4, N'20231023', 1, 40, 9, 7)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (300.0000, N'Nike glasses at Opticas La Realeza, Presidente Plaza.', 4, N'20231023', 2, 41, 33, 15)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (0.5000, N'Parking when picking up Nike glasses.', 4, N'20231028', 1, 40, 9, 7)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.0000, N'Chocolate for Gabriela.', 4, N'20231028', 2, 44, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.2500, N'Breakfast with people from Union Church Men''s Bible study at Denny''s Zona Rosa.', 4, N'20231101', 2, 52, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (90.4000, N'Platinum Membership yearly fee.', 5, N'20231005', 3, 7, 6, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (0.5000, N'Parking for dinner with Gabriela.', 5, N'20231006', 1, 9, 9, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (15.6200, N'Dinner at San Martin Multiplaza with Gabriela.', 5, N'20231006', 2, 10, 10, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (8.5300, N'Lunch with Gabriela and Union Church people at Centro Comercial Plaza Madero.', 5, N'20231008', 2, 16, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (19.2700, N'Lunch with Gabriela and Union Church people at Centro Comercial Plaza Madero.', 5, N'20231008', 2, 17, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (121.4100, N'Food.', 5, N'20231014', 2, 7, 16, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (14.7900, N'Scott Elegance toilet paper, 32 units.', 5, N'20231014', 2, 7, 21, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (14.7900, N'La Croix Sparkling Water.', 5, N'20231014', 2, 7, 22, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (19.9900, N'ARM & HAMMER Plus OxiClean Stain Fighters liquid laundry detergent.', 5, N'20231014', 2, 7, 23, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (29.9000, N'Nike BV6708 010 shirt, at La Gran Via.', 5, N'20231014', 2, 25, 18, 11)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (43.6700, N'Apple 20W USB-C Power Adapter. USB-C to Lightning charger cable. Multiplaza store.', 5, N'20231014', 2, 26, 19, 12)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (0.2500, N'Parking when paying traffic ticket at Hipermall Las Cascadas.', 5, N'20231016', 1, 31, 9, 7)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.0000, N'Dinner with mom and grandmother, Antiguo Cuscatlan.', 5, N'20231020', 2, 35, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (9.0000, N'$1 for atol chuco/shuco; $2 for two corns; $6 for bread and typical drink.', 5, N'20231021', 1, 21, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5.0000, N'Knitted Sunflower for Gabriela.', 5, N'20231021', 1, 37, 32, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (18.1300, N'Lunch with Gabriela and Union Church people for fellowship at LacaLaca Santa Elena.', 5, N'20231022', 2, 20, 1, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (7.7500, N'Dinner with Gabriela, my meal from El Zocalo Plaza Madero.', 5, N'20231103', 2, 16, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (20.3500, N'Dinner with Gabriela, her meal from Alfresco.', 5, N'20231103', 2, 17, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (94.0800, N'Food from PriceSmart Santa Elena.', 5, N'20231103', 3, 7, 16, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (29.5800, N'La Croix Sparkling Water.', 5, N'20231103', 3, 7, 22, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (13.7900, N'DelaFaille chocolatier - Belgium. 2 gift boxes. For Geraldina and Blanqui.', 5, N'20231103', 3, 7, 39, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (41.4600, N'Food for Gabriela from Walmart Santa Elena.', 5, N'20231105', 2, 55, 32, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (59.2400, N'Food for Gabriela from PriceSmart Santa Elena.', 5, N'20231105', 3, 7, 32, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (67.5500, N'By Texaco British School. Zyprexa Zydis 5MG X 14 compressed. Medicine for Gabriela.', 6, N'20231007', 2, 11, 11, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1.6500, N'By Texaco British School. 2da Y 4rta Calle Oriente, Santa Tecla. 1 Sundae Chocolate for Gabriela.', 6, N'20231007', 2, 12, 10, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (42.3000, N'TEXACO SERVITEX. CAR PANAMERICANA KM11 ST TECLA. ROCELI CONSULTORES, S.A. DE C.V.', 6, N'20231007', 2, 14, 12, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.7700, N'Oil filter.', 6, N'20231014', 2, 24, 17, 9)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (12.7000, N'Engine oil change.', 6, N'20231014', 2, 27, 20, 9)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3.3000, N'Desert with Gabriela from McDonald''s by Academia Britanica Cuscatleca.', 6, N'20231015', 2, 12, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (40.6900, N'TEXACO SERVITEX. CAR PANAMERICANA KM11 ST TECLA. ROCELI CONSULTORES, S.A. DE C.V. Gasoline.', 6, N'20231021', 2, 14, 12, 9)
GO
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (37.4400, N'TEXACO SERVITEX. CAR PANAMERICANA KM11 ST TECLA. ROCELI CONSULTORES, S.A. DE C.V.', 6, N'20231104', 2, 14, 12, 9)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (19.5300, N'Canton El Progreso KM 20. Volcan de San Salvador. With Gabriela.', 7, N'20231007', 2, 13, 10, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (189.3500, N'Lunch with Geraldina, Blanqui, Carlos, 
Julieta, Benjamin, Gabriela and Carlos; for Geraldina and Blanqui''s birthday. A lo Peruano Calle al Volcan.', 7, N'20231104', 2, 53, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5.0000, N'Fruits on the way to El Mirador de La Giralda.', 8, N'20231013', 1, 21, 16, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (37.2400, N'Dinner with Gabriela.', 8, N'20231013', 2, 22, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (90.0000, N'Paying late filing tax penalty at Ministerio de Hacienda, Tres Torres building.', 9, N'20231016', 2, 32, 27, 14)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (82.0000, N'Aqua check nano 500 CTU lower for water filter system.', 9, N'20231106', 2, 56, 38, 1)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (18.0000, N'Lunch with Gabriela, Miguel, mom and grandmother, plus Day Pass. Colonia el Palmarcito, CA-2 KM 50 #42, Tamanique CP 1522.', 10, N'20231021', 2, 36, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5.0400, N'For mom and grandmother at a gas station when coming back from the beach: $1 for water; $1.99 for Cashita''s nuts; $2.05 for chips. Playa El Cocal, CA-2, Carretera Litoral, Block 5, La Libertad.', 11, N'20231021', 1, 38, 31, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (2.4900, N'Coffee for Gabriela.', 12, N'20231028', 1, 45, 10, 8)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6.0000, N'Entrance fee to Santa Ana Volcano (National Park area) with Gabriela, two tickets.', 12, N'20231028', 1, 46, 34, 16)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1.0000, N'Parking at Cerro Verde National Park.', 12, N'20231028', 1, 47, 9, 7)
INSERT [dbo].[FactPurchases] ([TotalPurchases], [Description], [CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (9.0000, N'$3 for entrance fee to Cerro Verde National Park with Gabriela, two tickets. $6 for guided tour to Santa Ana Volcano (National Park area) with Gabriela, two tickets.', 12, N'20231028', 1, 47, 34, 16)
GO
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231001', 1, 1, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231001', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231008', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231008', 1, 19, 15, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231014', 1, 30, 26, 13)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231014', 2, 23, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231015', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231015', 2, 28, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231016', 1, 32, 30, 9)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231021', 1, 21, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231022', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231022', 2, 39, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231026', 2, 42, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231027', 2, 43, 16, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231029', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231029', 2, 43, 16, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231030', 2, 49, 36, 17)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231031', 1, 21, 16, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231031', 2, 43, 16, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231101', 1, 51, 37, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231101', 2, 50, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231102', 2, 14, 12, 9)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231103', 1, 19, 15, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231104', 2, 54, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231105', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231105', 1, 19, 15, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231105', 1, 51, 37, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231105', 2, 43, 16, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231112', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231119', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231126', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231203', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231210', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20231217', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20240107', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20240114', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20240121', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20240128', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20240204', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (1, N'20240225', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (2, N'20231011', 1, 20, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (2, N'20231028', 2, 10, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (2, N'20240303', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (2, N'20240317', 1, 2, 2, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231001', 2, 3, 3, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231001', 2, 4, 4, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231003', 2, 5, 5, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231006', 2, 5, 5, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231006', 2, 8, 8, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231006', 4, 30, 40, 18)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231006', 4, 32, 41, 19)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231007', 4, 15, 13, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231010', 2, 18, 14, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231015', 2, 8, 24, 9)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231015', 2, 29, 25, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231016', 2, 33, 28, 2)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231016', 2, 34, 29, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231025', 2, 5, 5, 3)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231029', 3, 48, 35, 2)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231101', 2, 3, 3, 2)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231101', 2, 4, 4, 2)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231104', 4, 30, 40, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231104', 4, 32, 41, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4, N'20231004', 1, 6, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4, N'20231015', 2, 12, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4, N'20231023', 1, 40, 9, 7)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4, N'20231023', 2, 41, 33, 15)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4, N'20231028', 1, 40, 9, 7)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4, N'20231028', 2, 44, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (4, N'20231101', 2, 52, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231005', 3, 7, 6, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231006', 1, 9, 9, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231006', 2, 10, 10, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231008', 2, 16, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231008', 2, 17, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231014', 2, 7, 16, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231014', 2, 7, 21, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231014', 2, 7, 22, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231014', 2, 7, 23, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231014', 2, 25, 18, 11)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231014', 2, 26, 19, 12)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231016', 1, 31, 9, 7)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231020', 2, 35, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231021', 1, 21, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231021', 1, 37, 32, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231022', 2, 20, 1, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231103', 2, 16, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231103', 2, 17, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231103', 3, 7, 16, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231103', 3, 7, 22, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231103', 3, 7, 39, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231105', 2, 55, 32, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (5, N'20231105', 3, 7, 32, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231007', 2, 11, 11, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231007', 2, 12, 10, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231007', 2, 14, 12, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231014', 2, 24, 17, 9)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231014', 2, 27, 20, 9)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231015', 2, 12, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231021', 2, 14, 12, 9)
GO
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (6, N'20231104', 2, 14, 12, 9)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (7, N'20231007', 2, 13, 10, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (7, N'20231104', 2, 53, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (8, N'20231013', 1, 21, 16, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (8, N'20231013', 2, 22, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (9, N'20231016', 2, 32, 27, 14)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (9, N'20231106', 2, 56, 38, 1)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (10, N'20231021', 2, 36, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (11, N'20231021', 1, 38, 31, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (12, N'20231028', 1, 45, 10, 8)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (12, N'20231028', 1, 46, 34, 16)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (12, N'20231028', 1, 47, 9, 7)
INSERT [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate]) VALUES (12, N'20231028', 1, 47, 34, 16)
GO
INSERT [dbo].[FactSales] ([TotalSales], [Description], [CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate]) VALUES (4175.0000, N'Salary for September 2023.', 3, N'20231006', 4, 1, 7, 1)
INSERT [dbo].[FactSales] ([TotalSales], [Description], [CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate]) VALUES (5657.8600, N'Salary for October 2023.', 3, N'20231104', 4, 1, 7, 1)
GO
INSERT [dbo].[FactSalesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231006', 4, 1, 7, 1)
INSERT [dbo].[FactSalesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate]) VALUES (3, N'20231104', 4, 1, 7, 1)
GO
ALTER TABLE [dbo].[DimCard]  WITH CHECK ADD  CONSTRAINT [FK_DimCard_DimBank] FOREIGN KEY([BankID])
REFERENCES [dbo].[DimBank] ([BankID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCard] CHECK CONSTRAINT [FK_DimCard_DimBank]
GO
ALTER TABLE [dbo].[DimCard]  WITH CHECK ADD  CONSTRAINT [FK_DimCard_DimCardBrand] FOREIGN KEY([CardBrandID])
REFERENCES [dbo].[DimCardBrand] ([CardBrandID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCard] CHECK CONSTRAINT [FK_DimCard_DimCardBrand]
GO
ALTER TABLE [dbo].[DimCard]  WITH CHECK ADD  CONSTRAINT [FK_DimCard_DimCardType] FOREIGN KEY([CardTypeID])
REFERENCES [dbo].[DimCardType] ([CardTypeID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCard] CHECK CONSTRAINT [FK_DimCard_DimCardType]
GO
ALTER TABLE [dbo].[DimCategory]  WITH CHECK ADD  CONSTRAINT [FK_DimCategory_DimParentCategory] FOREIGN KEY([ParentCategoryID])
REFERENCES [dbo].[DimParentCategory] ([ParentCategoryID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCategory] CHECK CONSTRAINT [FK_DimCategory_DimParentCategory]
GO
ALTER TABLE [dbo].[DimCity]  WITH CHECK ADD  CONSTRAINT [FK_DimCity_DimProvince] FOREIGN KEY([ProvinceID])
REFERENCES [dbo].[DimProvince] ([ProvinceID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimCity] CHECK CONSTRAINT [FK_DimCity_DimProvince]
GO
ALTER TABLE [dbo].[DimPaymentMethod]  WITH CHECK ADD  CONSTRAINT [FK_DimPaymentMethod_DimCard] FOREIGN KEY([CardID])
REFERENCES [dbo].[DimCard] ([CardID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimPaymentMethod] CHECK CONSTRAINT [FK_DimPaymentMethod_DimCard]
GO
ALTER TABLE [dbo].[DimProvince]  WITH CHECK ADD  CONSTRAINT [FK_DimProvince_DimCountry] FOREIGN KEY([CountryID])
REFERENCES [dbo].[DimCountry] ([CountryID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[DimProvince] CHECK CONSTRAINT [FK_DimProvince_DimCountry]
GO
ALTER TABLE [dbo].[FactPurchases]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchases_FactPurchasesXDimCategory] FOREIGN KEY([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate])
REFERENCES [dbo].[FactPurchasesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [SellerID], [CategoryID], [CategoryDeduplicate])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchases] CHECK CONSTRAINT [FK_FactPurchases_FactPurchasesXDimCategory]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimCategory] FOREIGN KEY([CategoryID])
REFERENCES [dbo].[DimCategory] ([CategoryID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimCategory]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimCity] FOREIGN KEY([CityID])
REFERENCES [dbo].[DimCity] ([CityID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimCity]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimDay] FOREIGN KEY([DayID])
REFERENCES [dbo].[DimDay] ([DayID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimDay]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimPaymentMethod] FOREIGN KEY([PaymentMethodID])
REFERENCES [dbo].[DimPaymentMethod] ([PaymentMethodID])
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimPaymentMethod]
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactPurchasesXDimCategory_DimSeller] FOREIGN KEY([SellerID])
REFERENCES [dbo].[DimSeller] ([SellerID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactPurchasesXDimCategory] CHECK CONSTRAINT [FK_FactPurchasesXDimCategory_DimSeller]
GO
ALTER TABLE [dbo].[FactSales]  WITH CHECK ADD  CONSTRAINT [FK_FactSales_FactSales] FOREIGN KEY([CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate])
REFERENCES [dbo].[FactSalesXDimCategory] ([CityID], [DayID], [PaymentMethodID], [BuyerID], [CategoryID], [CategoryDeduplicate])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactSales] CHECK CONSTRAINT [FK_FactSales_FactSales]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimBuyer] FOREIGN KEY([BuyerID])
REFERENCES [dbo].[DimBuyer] ([BuyerID])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimBuyer]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimCategory] FOREIGN KEY([CategoryID])
REFERENCES [dbo].[DimCategory] ([CategoryID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimCategory]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimCity] FOREIGN KEY([CityID])
REFERENCES [dbo].[DimCity] ([CityID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimCity]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimDay] FOREIGN KEY([DayID])
REFERENCES [dbo].[DimDay] ([DayID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimDay]
GO
ALTER TABLE [dbo].[FactSalesXDimCategory]  WITH CHECK ADD  CONSTRAINT [FK_FactSalesXDimCategory_DimPaymentMethod] FOREIGN KEY([PaymentMethodID])
REFERENCES [dbo].[DimPaymentMethod] ([PaymentMethodID])
GO
ALTER TABLE [dbo].[FactSalesXDimCategory] CHECK CONSTRAINT [FK_FactSalesXDimCategory_DimPaymentMethod]
GO
USE [master]
GO
ALTER DATABASE [FinancesBACKUP] SET  READ_WRITE 
GO
</pre>
		   <p>This is the script that was generated containing both schema and data: <a href=\"includes/script.sql\">script.sql</a></p><p>I clicked <span class=\"cod\">Back Up...</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/backUpDatabase.jpg\" alt=\"Back up database\" width=\"651\" height=\"983\"></div><p>I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2024/04/22/20/51/img/backUpDatabaseGeneratingBAKFile.jpg\" alt=\"Back up database generating BAK file\" width=\"1183\" height=\"656\"></div><p>The backup of my database completed successfully:</p><div><img src=\"/blog/2024/04/22/20/51/img/successfulCompletionOfBackup.jpg\" alt=\"Successful completion of backup\" width=\"843\" height=\"640\"></div><div>Published: 8:51 AM GMT · Apr 22, 2023</div>\n";
?>
