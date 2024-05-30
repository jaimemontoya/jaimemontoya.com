<?php
  $index->content .= 
           "<p>I had a dataset with this list of occupations:</p>
<pre>
CUST SERVICE REP.
CUSTOMER SERVICE REPRESENTATIVE
SHIFT LEAD
REGION MANAGER
ASSISTANT
REGIONAL MANAGER
STORE MGR.
CUSTOMER SERVICE REP
CUSTOMER SERVICE REPRESENTATIVE
STORE MANAGER
DISTRICT MANAGER
ASSIST. MANAGER
CUTSOMER SERIVCE REPRESENTATIVE
SHIFT LEADER
REGIONAL MANAGER
STORE MANAGER
DISTRICT MGR.
REGIONAL MGR
SHIFT LEADER
CUSTOMER SERIVCE REP
ASSISTANT MANAGER
DISTRICT MANAGER
</pre>
           <p>In the notation <span class=\"cod\">a -&gt; b</span> meaning <span class=\"cod\">a should be replaced with b</span>, with the data I received, I wanted the system to do the following for me. I also wanted to return the list of distinct values after applying the replacement aforementioned:</p>
<pre>
CUST SERVICE REP.               -> CUSTOMER SERVICE REPRESENTATIVE
CUSTOMER SERVICE REPRESENTATIVE -> CUSTOMER SERVICE REPRESENTATIVE
SHIFT LEAD                      -> SHIFT LEADER
REGION MANAGER                  -> REGIONAL MANAGER
ASSISTANT                       -> ASSISTANT MANAGER
REGIONAL MANAGER                -> REGIONAL MANAGER
STORE MGR.                      -> STORE MANAGER
CUSTOMER SERVICE REP            -> CUSTOMER SERVICE REPRESENTATIVE
CUSTOMER SERVICE REPRESENTATIVE -> CUSTOMER SERVICE REPRESENTATIVE
STORE MANAGER                   -> REGIONAL MANAGER
DISTRICT MANAGER                -> DISTRICT MANAGER
ASSIST. MANAGER                 -> ASSISTANT MANAGER
CUTSOMER SERIVCE REPRESENTATIVE -> CUSTOMER SERVICE REPRESENTATIVE
SHIFT LEADER                    -> SHIFT LEADER
REGIONAL MANAGER                -> REGIONAL MANAGER
STORE MANAGER                   -> STORE MANAGER
DISTRICT MGR.                   -> DISTRICT MANAGER
REGIONAL MGR                    -> REGIONAL MANAGER
SHIFT LEADER                    -> SHIFT LEADER
CUSTOMER SERIVCE REP            -> CUSTOMER SERVICE REPRESENTATIVE
ASSISTANT MANAGER               -> ASSISTANT MANAGER
DISTRICT MANAGER                -> DISTRICT MANAGER
</pre>
		   <p>My dataset was <a href=\"includes/FuzzyGroupingExample.txt\">FuzzyGroupingExample.txt</a>. I started by created my my reference table from that database. I opened Visual Studio and created a new project:</p><div><img src=\"/blog/2023/12/12/05/59/img/createNewProject.jpg\" alt=\"Create new project\" width=\"619\" height=\"119\"></div><p>I provided a name and location for my new project:</p><div><img src=\"/blog/2023/12/12/05/59/img/provideNameAndLocationForNewProject.jpg\" alt=\"Provide name and location for new project\" width=\"935\" height=\"649\"></div><p>I created a <span class=\"cod\">Data Flow Task</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/createDataFlowTask.jpg\" alt=\"Create Data Flow Task\" width=\"732\" height=\"303\"></div><p>I right-clicked the <span class=\"cod\">Connection Managers</span> area and then clicked <span class=\"cod\">New Flat File Connection...</span></p><div><img src=\"/blog/2023/12/12/05/59/img/createNewFlatFileConnection.jpg\" alt=\"Create New Flat File Connection\" width=\"1042\" height=\"732\"></div><p>I provided a name and chose the file to use (<a href=\"includes/FuzzyGroupingExample.txt\">FuzzyGroupingExample.txt</a>). Then I clicked <span class=\"cod\">Columns</span> to define the columns to use for this connection manager:</p><div><img src=\"/blog/2023/12/12/05/59/img/flatFileConnectionManagerEditor.jpg\" alt=\"Flat File Connection Manager Editor\" width=\"629\" height=\"604\"></div><p>Notice the warning in the image above: <span class=\"cod\">Columns are not defined for this connection manager.</span> It disappeared when clicking <span class=\"cod\">Columns</span> and going back to <span class=\"cod\">General</span> without further actions. From the <span class=\"cod\">Columns</span> section, I confirmed that my data was displaying correctly, and clicked <span class=\"cod\">OK</span>.</p><div><img src=\"/blog/2023/12/12/05/59/img/confirmThatDataIsDisplayingCorrectly.jpg\" alt=\"Confirm that data is displaying correctly\" width=\"619\" height=\"851\"></div><p>My connection was created successfully. I double clicked my Data Flow Task to open it:</p><div><img src=\"/blog/2023/12/12/05/59/img/connectionCreatedSuccessfully.jpg\" alt=\"Connection created successfully\" width=\"792\" height=\"957\"></div><p>I created a <span class=\"cod\">Flat File Source</span> and double clicked to open it.</p><div><img src=\"/blog/2023/12/12/05/59/img/createFlatFileSource.jpg\" alt=\"Create Flat File Source\" width=\"790\" height=\"958\"></div><p>From the <span class=\"cod\">Flat File Source Editor</span>, I clicked <span class=\"cod\">Columns</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/clickColumnsFromFlatFileSourceEditor.jpg\" alt=\"Click Columns from Flat File Source Editor\" width=\"745\" height=\"629\"></div><p>I unchecked <span class=\"cod\">LASTNAME</span> and <span class=\"cod\">FIRSTNAME</span> because I was creating my reference table, which should not have employee names, but only occupations. I renamed the <span class=\"cod\">Output Column</span> to <span class=\"cod\">OccupationLabel</span>. Then I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/uncheckColumnsAndDefineOutputColumn.jpg\" alt=\"Uncheck columns and define Output Column\" width=\"737\" height=\"618\"></div><p>I created another connection, this time a <span class=\"cod\">New OLE DB Connection...</span></p><div><img src=\"/blog/2023/12/12/05/59/img/newOLEDBConnection.jpg\" alt=\"New OLE DB Connection\" width=\"732\" height=\"751\"></div><p>I chose the database that I wanted to use and clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/configureOLEDBConnectionManager.jpg\" alt=\"Configure OLE DB Connection Manager\" width=\"1255\" height=\"746\"></div><p>I renamed my connection to <span class=\"cod\">SQLServerDatabase</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/newOLEDBConnectionCreatedSuccessfully.jpg\" alt=\"New OLE DB Connection created successfully\" width=\"733\" height=\"748\"></div><p>I created a <span class=\"cod\">Fuzzy Grouping Transformation</span> and connected the arrow from <span class=\"cod\">Flat File Source - Occupation Load</span> to <span class=\"cod\">Fuzzy Grouping</span>. Then I double clicked <span class=\"cod\">Fuzzy Grouping</span> to open it.</p><div><img src=\"/blog/2023/12/12/05/59/img/createFuzzyGroupingTransform.jpg\" alt=\"Create Fuzzy Grouping Transform\" width=\"731\" height=\"747\"></div><p>I clicked the <span class=\"cod\">Columns</span> tab:</p><div><img src=\"/blog/2023/12/12/05/59/img/clickColumnsTabFromFuzzyGroupingTransformationEditor.jpg\" alt=\"Click Columns from Flat File Source Editor\" width=\"1291\" height=\"792\"></div><p>I checked <span class=\"cod\">OccupationLabel</span> and clicked the <span class=\"cod\">Advanced</span> tab:</p><div><img src=\"/blog/2023/12/12/05/59/img/chooseColumnsFromFuzzyGroupingTransformationEditor.jpg\" alt=\"Choose columns from Fuzzy Grouping Transformation Editor\" width=\"1915\" height=\"791\"></div><p>I unchecked the <span class=\"cod\">Tab</span> and <span class=\"cod\">Line feed</span> <span class=\"cod\">Token delimiters</span>. I replaced <span class=\"cod\">,.;:-\"'&/\@!?()<>[]{}|#*^%</span> with <span class=\"cod\">.</span> in the <span class=\"cod\">Additional delimiters</span> textbox. I knew I had spaces and periods in the values of the <span class=\"cod\">TITLE</span> column of my <a href=\"includes/FuzzyGroupingExample.txt\">FuzzyGroupingExample.txt</a> file. For that reason, I included both spaces and periods as <span class=\"cod\">Token delimiters</span> in my configurations. Since I knew I did not have any other special characters in my data, I did not specify additional <span class=\"cod\">Token delimiters</span>. I changed the <span class=\"cod\">Similarity threshold</span> from <span class=\"cod\">0.8</span> to <span class=\"cod\">0.5</span>. Finally, I clicked <span class=\"cod\">OK</span>.</p><div><img src=\"/blog/2023/12/12/05/59/img/specifyTokenDelimitersAndSimilarityThreshold.jpg\" alt=\"Specify Token delimiters\" width=\"1266\" height=\"749\"></div><p>In order to specify which rows to return, I used the <span class=\"cod\">Conditional Split Transformation</span>. Each of those returned rows represent groups. For example, <span class=\"cod\">CUST SERVICE REP.</span>, <span class=\"cod\">CUSTOMER SERVICE REPRESENTATIVE</span>, <span class=\"cod\">CUSTOMER SERVICE REP</span>, <span class=\"cod\">CUTSOMER SERIVCE REPRESENTATIVE</span>, and <span class=\"cod\">CUSTOMER SERIVCE REP</span> are all part of the same group whose only returned row is <span class=\"cod\">CUSTOMER SERVICE REPRESENTATIVE</span>. I created a <span class=\"cod\">Conditional Split Transformation</span> and connected the arrow from <span class=\"cod\">Fuzzy Grouping</span> to <span class=\"cod\">Conditional Split</span>. Then I double clicked <span class=\"cod\">Conditional Split</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/addConditionalSplitTransform.jpg\" alt=\"Add Conditional Split Transform\" width=\"732\" height=\"709\"></div><p>I specified my condition in the <span class=\"cod\">Default output name</span> textbox. I replaced <span class=\"cod\">Conditional Split Default Output</span> with <span class=\"cod\">Delete</span>. Then I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/defineConditionFromConditionalSplitTransformationEditor.jpg\" alt=\"Define condition from Conditional Split Transformation Editor\" width=\"1293\" height=\"793\"></div><p>I created an <span class=\"cod\">OLE DB Destination</span> and connected the arrow from <span class=\"cod\">Conditional Split</span> to <span class=\"cod\">OLE DB Destination</span>. The <span class=\"cod\">Input Output Selection</span> pop-up appeared:</p><div><img src=\"/blog/2023/12/12/05/59/img/insertOLEDBDestination.jpg\" alt=\"Insert OLE DB Destination\" width=\"1113\" height=\"708\"></div><p>I chose <span class=\"cod\">Best Match</span> as my <span class=\"cod\">Output</span> and clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/chooseBestMatchAsInputOutputSelection.jpg\" alt=\"Choose BestMatch as Input Output Selection\" width=\"1105\" height=\"708\"></div><p>The arrow from <span class=\"cod\">Conditional Split</span> to <span class=\"cod\">OLE DB Destination</span> appeared correctly with the <span class=\"cod\">Best Match</span> label on it. I double clicked <span class=\"cod\">OLE DB Destination</span> to open it:</p><div><img src=\"/blog/2023/12/12/05/59/img/bestMatchArrowDisplayed.jpg\" alt=\"Best Match arrow displayed\" width=\"732\" height=\"707\"></div><p>I clicked the <span class=\"cod\">New...</span> button and in the <span class=\"cod\">Create Table</span> box, I provided the code to create the destination table to hold the final output. Then I clicked <span class=\"cod\">OK</span>:</p>
<pre>CREATE TABLE [Occupation_FuzzyGrouping] (
  [OccupationID] [smallint] IDENTITY(1,1) NOT NULL,
  [OccupationLabel] [varchar](50) NOT NULL
)</pre>
           <div><img src=\"/blog/2023/12/12/05/59/img/createTableToHoldFinalOutput.jpg\" alt=\"Create table to hold final output\" width=\"1796\" height=\"839\"></div><p><span class=\"cod\">Name of the table or the view</span> did not seem to have been populated properly. What I saw was <span class=\"cod\">[Occupation_FuzzyGrouping] (</span>. That opening parenthesis did not look correct as part of a table or view name. I clicked <span class=\"cod\">Mappings</span>. Notice the warning: <span class=\"cod\">Map the columns on the Mappings page.</span></p><div><img src=\"/blog/2023/12/12/05/59/img/tableOrViewCreatedForOLEDBDestination.jpg\" alt=\"Table or view created for OLE DB Destination\" width=\"1334\" height=\"840\"></div><p>I was not allowed to go to the <span class=\"cod\">Mappings</span> section. The following warning appeared.</p><p>Warning when trying to navigate to <span class=\"cod\">Mappings</span> (part 1 of 2):</p><div><img src=\"/blog/2023/12/12/05/59/img/warningWhenTryingToNavigateToMappingsPart1Of2.jpg\" alt=\"Table or view created for OLE DB Destination\" width=\"1335\" height=\"890\"></div><p>Warning when trying to navigate to <span class=\"cod\">Mappings</span> (part 2 of 2):</p><div><img src=\"/blog/2023/12/12/05/59/img/warningWhenTryingToNavigateToMappingsPart2Of2.jpg\" alt=\"Table or view created for OLE DB Destination\" width=\"1335\" height=\"890\"></div><p>I went to the database and discovered that the table had been created successfully:</p><div><img src=\"/blog/2023/12/12/05/59/img/tableCreatedSuccessfully.jpg\" alt=\"Table created successfully\" width=\"269\" height=\"72\"></div><p>In the value for <span class=\"cod\">Name of the table or the view</span>, I replaced <span class=\"cod\">[Occupation_FuzzyGrouping] (</span> with <span class=\"cod\">[dbo].[Occupation_FuzzyGrouping]</span>. The warning changed back to <span class=\"cod\">Map the columns on the Mappings page.</span> Then I clicked <span class=\"cod\">Mappings</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/mappingsWorkingProperly.jpg\" alt=\"Mappings working properly\" width=\"1335\" height=\"840\"></div><p>The mapping was wrong because it was linking <span class=\"cod\">OccupationLabel</span> from <span class=\"cod\">Available Input Columns</span> to <span class=\"cod\">OccupationLabel</span> from <span class=\"cod\">Available Destination Columns</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/wrongMapping.jpg\" alt=\"Wrong mapping\" width=\"1335\" height=\"793\"></div><p>I fixed the mappings by linking <span class=\"cod\">OccupationLabel_clean</span> from <span class=\"cod\">Available Input Columns</span> to <span class=\"cod\">OccupationLabel</span> from <span class=\"cod\">Available Destination Columns</span>. Then I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/fixMapping.jpg\" alt=\"Fix mapping\" width=\"1335\" height=\"794\"></div><p>The explanation of why the mapping was wrong and it had to be fixed, was because the <span class=\"cod\">OccupationLabel Output Alias</span> returns several rows, while <span class=\"cod\">OccupationLabel_clean Group Output Alias</span> returns the grouping of all those rows. For example, <span class=\"cod\">OccupationLabel Output Alias</span> would return <span class=\"cod\">CUST SERVICE REP.</span>, <span class=\"cod\">CUSTOMER SERVICE REPRESENTATIVE</span>, <span class=\"cod\">CUSTOMER SERVICE REP</span>, <span class=\"cod\">CUTSOMER SERIVCE REPRESENTATIVE</span>, and <span class=\"cod\">CUSTOMER SERIVCE REP</span>; while <span class=\"cod\">OccupationLabel_clean Group Output Alias</span> would only return <span class=\"cod\">CUSTOMER SERVICE REPRESENTATIVE</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/explainDifferenceBetweenOutputAliasAndGroupOutputAlias.jpg\" alt=\"Explain difference between Output Alias and Group Output Alias\" width=\"1297\" height=\"794\"></div><p>I right clicked on the package and then clicked <span class=\"cod\">Execute Package</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/executePackage.jpg\" alt=\"Execute Package\" width=\"1911\" height=\"669\"></div><p>The execution was successful, returning 6 rows from the original input of 22 rows:</p><div><img src=\"/blog/2023/12/12/05/59/img/successfulExecution.jpg\" alt=\"Successful execution\" width=\"1915\" height=\"956\"></div><p>I clicked Progress and scrolled all the way down to see how the execution was completed successfully. Its elapsed time was 21.563 seconds:</p><div><img src=\"/blog/2023/12/12/05/59/img/showElapsedTime.jpg\" alt=\"Show elapsed time\" width=\"1913\" height=\"957\"></div><p>The final output contains only 6 rows, without duplicates, which were written to the database:</p><div><img src=\"/blog/2023/12/12/05/59/img/finalResultWrittenToDatabase.jpg\" alt=\"Final result written to database\" width=\"485\" height=\"249\"></div><p>What happens behind the scenes? In order to find out, I deleted the <span class=\"cod\">Conditional Split Transformation</span>. I connected <span class=\"cod\">Fuzzy Grouping</span> to <span class=\"cod\">OLE DB Destination</span>. Then I double clicked <span class=\"cod\">Fuzzy Grouping</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/deleteConditionalSplitTransformation.jpg\" alt=\"Delete Conditional Split Transformation\" width=\"735\" height=\"718\"></div><p>I clicked the <span class=\"cod\">Advanced</span> tab:</p><div><img src=\"/blog/2023/12/12/05/59/img/clickTheAdvancedTab.jpg\" alt=\"Click the Advanced tab\" width=\"1294\" height=\"793\"></div><p>I changed the <span class=\"cod\">Similarity threshold</span> to 0.00 and clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/changeSimilarityThresholdTo0.jpg\" alt=\"Change Similarity threshold to 0\" width=\"1293\" height=\"794\"></div><p>I deleted my <span class=\"cod\">Occupation_FuzzyGrouping</span> table that I had previously used as my destination of final results.</p>After deleting it, I created a table with the same name, but with another set of fields. In order to do that, I started by double clicking <span class=\"cod\">OLE Destination DB</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/doubleClickOLEDestinationDB.jpg\" alt=\"Double click OLE Destination DB\" width=\"607\" height=\"628\"></div><p>I clicked <span class=\"cod\">New...</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/clickNew.jpg\" alt=\"Click New...\" width=\"1334\" height=\"793\"></div><p>I provided the following code in the Create Table pop-up box:</p>
<pre>CREATE TABLE [Occupation_FuzzyGrouping] (
  [_key_in] int,
  [_key_out] int,
  [_score] real,
  [OccupationLabel] varchar(50),
  [OccupationLabel_clean] varchar(50),
  [_Similarity_OccupationLabel] real
)</pre>
           <p>I clicked <span class=\"cod\">OK</span>. As soon as the <span class=\"cod\">OK</span> button was clicked, the new table was created in the database:</p><div><img src=\"/blog/2023/12/12/05/59/img/provideCodeToCreateNewTable.jpg\" alt=\"Provide code to create new table\" width=\"1792\" height=\"791\"></div><p>I confirmed from the database that my table was created successfully:</p><div><img src=\"/blog/2023/12/12/05/59/img/newTableCreatedSuccessfully.jpg\" alt=\"New table created successfully\" width=\"268\" height=\"142\"></div><p>I clicked <span class=\"cod\">Mappings</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/clickMappings.jpg\" alt=\"Click Mappings\" width=\"1332\" height=\"857\"></div><p>I did not change anything. The mappings were already correct as I needed it, autimatically done by the tool based on exactly matching names. I clicked <span class=\"cod\">OK</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/seeMappingsAndClickOK.jpg\" alt=\"See Mappings and click OK\" width=\"1360\" height=\"856\"></div><p>Click <span class=\"cod\">Start</span> to execute the package:</p><div><img src=\"/blog/2023/12/12/05/59/img/clickStartToExecuteThePackage.jpg\" alt=\"Click Start to execute the package\" width=\"1910\" height=\"715\"></div><p>From an input of 22 rows, the output is also 22 rows:</p><div><img src=\"/blog/2023/12/12/05/59/img/showOutputOf22Rows.jpg\" alt=\"Show output of 22 rows\" width=\"679\" height=\"660\"></div><p>This was the result in the database:</p><div><img src=\"/blog/2023/12/12/05/59/img/resultInDatabaseWith0SimilarityThreshold.jpg\" alt=\"Result in database with 0.00 Similarity threshold\" width=\"837\" height=\"613\"></div><p>I deleted all rows from the <span class=\"cod\">Occupation_FuzzyGrouping</span> table. I changed the <span class=\"cod\">Similarity threshold</span> to <span class=\"cod\">0.99</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/changeSimilarityThresholdTo0Point99.jpg\" alt=\"Change Similarity threshold to 0.99\" width=\"1295\" height=\"793\"></div><p>I executed the package again. This was the new result in the database:</p><div><img src=\"/blog/2023/12/12/05/59/img/resultsWith0Point99SimilarityThreshold.jpg\" alt=\"Results with 0.99 Similarity threshold\" width=\"810\" height=\"611\"></div><p>I deleted all rows from the <span class=\"cod\">Occupation_FuzzyGrouping</span> table. I changed the <span class=\"cod\">Similarity threshold</span> to <span class=\"cod\">0.5</span>:</p><div><img src=\"/blog/2023/12/12/05/59/img/changeSimilarityThresholdTo0Point5.jpg\" alt=\"Change Similarity threshold to 0.5\" width=\"1293\" height=\"793\"></div><p>I executed the package again. This was the new result in the database:</p><div><img src=\"/blog/2023/12/12/05/59/img/finalResultWith0Point5SimilarityThreshold.jpg\" alt=\"Final result with 0.5 Similarity threshold\" width=\"832\" height=\"606\"></div><p>Notice how all values in <span class=\"cod\">_Similarity_OccupationLabel</span> are higher than <span class=\"cod\">0.5</span>. That is because <span class=\"cod\">0.5</span> was used as the <span class=\"cod\">Similarity threshold</span> from the <span class=\"cod\">Fuzzy Grouping Transformation Editor</span>. Observe how the query <span class=\"cod\">SELECT DISTINCT OccupationLabel_clean FROM Occupation_FuzzyGrouping</span> returns the same 6 rows that had previously been obtained from the SSIS package, when writing to the <span class=\"cod\">Occupation_FuzzyGrouping</span> table that had only two fields: <span class=\"cod\">OccupationID</span> and <span class=\"cod\">OccupationLabel</span>. Modifying it and writing to a table with more fields, I did it with the purpose of showing and explaining a little deeper part of what happends behand the scenes to obtain the desired final output:</p><div><img src=\"/blog/2023/12/12/05/59/img/FinalOutput.jpg\" alt=\"Show final output\" width=\"499\" height=\"237\"></div><p>It almost feels like a spelling correction system, where if the value in the left column is not exactly the same as the value in the right column, we could ask, \"Did you mean this?\" offering the value in the right column as a suggestion:</p><div><img src=\"/blog/2023/12/12/05/59/img/didYouMeanThisFeatureToSuggestValues.jpg\" alt=\"Did you mean this feature to suggest values\" width=\"1178\" height=\"749\"></div><div>Published: 5:59 AM GMT · Dec 12, 2023</div>\n";
?>