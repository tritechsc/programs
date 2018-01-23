<html>
<head>
<title>tritechsc.org/programs/</title>
<link href="dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {margin: 0; padding: 0;
background-color: #ffffff;
color:#8d1af8;
font-family:"Arial","sans-serif";color:#700070;font-size:12px;}
pre{margin: 0; padding: 0;font-family:"Arial","sans-serif";color:#71b9cf;font-size:18px;}

a{
font-family:"Arial","sans-serif";
font-size:18px;
font-size:2em;
color: #ffffff;
background-color:#000;
text-decoration:none;

}

a:hover {
font-family: arial, san-serif;
font-size:18px;
font-size:2em;
background-color: #111;
color: #fff;
text-decoration:none;

}

#list{
position:absolute;
text-align: left;
top: 100px;
left :100px;

}
#video-location{
text-align: left;
font-size:18px;
color: #8d1af8;
position:absolute;
top: 150px;
left :10px;
width: 680px;
height: 500px;
z-index:0;
}
</style>
</head>
<body>
	
<?php
	$theList = array("*");
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "db")
        {
            $thelist .= '<a href="'.$file.'" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>
<div id= "list">
<?php echo $thelist?>

</body>
</head>
