<?php
include 'db/db.php';
?>

<html>
<head>
  <title> hits</title>
</head>
<body>
<tt>

<?php
  $programs = array("Tri-Tech","uto Body","Auto Systems","Construction","Cosmetology","Culinary Arts","Cyber Security","Digital Arts and Filmmaking","Dentistry","Diesel","Early Childhood Education",,"Firefighting",,"Carrers In Healthcare",,"Law Enforcement","Nursing","Pre-Veterinary","Radio","Teen Parenting","Video Game Design","Welding","LOC");
$connection = mysqli_connect("localhost",$username,$password);
$dbname = "stream";
mysqli_select_db( $connection,$dbname);
echo $programs[0];
$sql = "select distinct ip from stream.programs where pagename = \"$programs[0]\";
echo "$sql";
  	$result = mysqli_query ($connection,$sql);
		$therows = mysqli_num_rows($result);
	echo "$therows hits.<br><br>";
   	while ($row = mysqli_fetch_row($result)){
   		
     			for ($i=0; $i<mysqli_num_fields($result); $i++){
										
       			echo "$row[$i] * ";
   							
					}
					echo "<br> ";
	 	}



  	mysqli_close($connection);
	
?>
</tt>
</body>
</html>  
