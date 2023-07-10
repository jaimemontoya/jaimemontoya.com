<?php
  include '../../db.inc';
  $sqlGetCategories = "SELECT * FROM DimCategory ORDER BY CategoryName ASC;";
  $resultCategories = $conn->query($sqlGetCategories);
  if ($resultCategories->num_rows > 0) {
	while($row = $resultCategories->fetch_assoc()) {
	$finances ->content .=
	   "\t\t\t<div>".$row['CategoryName']."
		</div>\n";
	}
  } else {
  $finances ->content .=
	   "\t\t\t<div>bye
		</div>\n";	
  }
  /*$finances ->content .=
           "\t\t\t<div>a
            </div>\n";*/
?>