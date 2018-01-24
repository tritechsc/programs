<?php
include 'db/db.php';
?>
<html>
<head>
  <title> select distict</title>
  <link rel="stylesheet" type="text/css" href="solarized.css">
</head>
<body>
<div class="data">
UNIQUE IP ADDRESSES TOTALS <hr />
<?php
 $programs = array("Tri-Tech","Auto Body","Auto Systems","Construction","Cosmetology",
 "Culinary Arts","Cyber Security","Digital Arts and Filmmaking","Dentistry","Diesel",
 "Early Childhood Education","Firefighting","Carrers In Healthcare","Law Enforcement",
 "Nursing","Pre-Veterinary","Radio","Teen Parenting","Video Game Design","Welding","LOC");
$connection = mysqli_connect("localhost",$username,$password);
$dbname = "stream";
mysqli_select_db( $connection,$dbname);
for ($n = 0; $n < 21; $n++){
		echo "$programs[$n]";
		$sql = "select distinct ip from stream.hits where pagename = \"$programs[$n]\"";
		//echo "$sql";
		$result = mysqli_query ($connection,$sql);
		$therows = mysqli_num_rows($result);
		echo " = $therows<br>";
	//	while ($row = mysqli_fetch_row($result)){
	//		for ($i=0; $i<mysqli_num_fields($result); $i++){								
	//			echo "$row[$i] * ";		
	//		}
	 	};
//}


  	mysqli_close($connection);
	
?>
</div>

</body>
</html>  
