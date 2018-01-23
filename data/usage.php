 <html><head><title>
 select all count </title></head>
 <style>

html {
    font-family: "Lucida Sans", sans-serif;
}
body {
font-family: "Lucida Sans", sans-serif;
font-size: 18px;
    background-color: #000;
    color: #00ff00;
    padding: 5px;
}

 </style>
 <body> 
 
 <?php
 include 'db/db.php';
 try{ 
# MySQL with PDO_MYSQL  
  $DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
  $STH = $DBH->query("select * from stream.programs order by id desc;");  
  $STH->setFetchMode(PDO::FETCH_OBJ); 
		//$therows = $STH->fetchColumn();
		//echo "$therows <hr />";
	while($row = $STH->fetch()){
		echo $row->id . " ~ \n";  
		echo $row->ip . " ~ \n";  
		echo $row->timein . " ~ \n";  
		echo $row->datein . " ~ \n";   
	    echo $row->pagename . " ~ \n";   
	    echo " <br />";
	   }
//id	ip	timein	datein	pagename
	
	}
    catch(Exception $e)

    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';

    }


# creating the statement  
//$STH = $DBH->query('SELECT name, addr, city from folks');  
  
# setting the fetch mode  
//$STH->setFetchMode(PDO::FETCH_OBJ);  
  
# showing the results  
//while($row = $STH->fetch()) {  
//    echo $row->name . "\n";  
//    echo $row->addr . "\n";  
//    echo $row->city . "\n";  
//}  

?>

</body>
</html>
