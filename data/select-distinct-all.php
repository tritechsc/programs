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
 // Auto-Body-Technology ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Auto-Body-Technology";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 //Auto-Systems-Technology ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 $abt = 0;
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Auto-Systems-Technology";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	   $abt = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Careers-in-Health-Care ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Careers-in-Health-Care";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Construction-Trades ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Construction-Trades";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Cosmetology  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Cosmetology";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Culinary-Arts ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Culinary-Arts";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Cyber-Security ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Cyber-Security";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Dental-Assisting ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Cosmetology";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Diesel-Technology ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Diesel-Technology";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Digital-Arts-Filmmaking ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Digital-Arts-Filmmaking";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Early-Childhood-Education ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Early-Childhood-Education";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Firefighting ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Firefighting";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Game-Design ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Game-Design";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Law-Enforcement ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Law-Enforcement";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Pre-Nursing ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Pre-Nursing";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Pre-Veterinary-Technician ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Pre-Veterinary-Technician";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Radio-Broadcasting ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Radio-Broadcasting";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Teen-Parenting ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Teen-Parenting";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Welding-Technology ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Welding-Technology";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

//Tri-Tech~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Tri-Tech-Programs";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


//LOC~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "LOC";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
?>

</body>
</html>
