<html>
<head>
<title>tritechsc.org/programs/</title>
<link rel="stylesheet" type="text/css" href="solarized.css">
<style>

</style>
</head>
<body>
	
<?php
	$theList = array("*");
    if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != ".."&& $file != "index.php" && $file != "db" && $file != "solarized.css")
        {
            $thelist .= '<a href="'.$file.'" target = "_blank">'.$file.'</a><br />';
        }
    }
    closedir($handle);
    }
?>
<div class = "data">
	DATA <br />
<?php echo $thelist?>
</div>
<footer>
<center>
<div style="background-color:#002b36; color:white;padding:5px;">#002b36;</div>
<div style="background-color:#073642; color:white;padding:5px;">#073642;</div>
<div style="background-color:#586e75; color:white;padding:5px;">#586e75;</div>
<div style="background-color:#657b83; color:white;padding:5px;">#657b83;</div>
<div style="background-color:#839496; color:white;padding:5px;">#839496;</div>
<div style="background-color:#93a1a1; color:white;padding:5px;">#93a1a1;</div>
<div style="background-color:#eee8d5; color:white;padding:5px;">#eee8d5;</div>
<div style="background-color:#fdf6e3; color:white;padding:5px;">#fdf6e3;</div>
<div style="background-color:#b58900; color:white;padding:5px;">#b58900;</div>
<div style="background-color:#cb4b16; color:white;padding:5px;">#cb4b16;</div>
<div style="background-color:#dc322f; color:white;padding:5px;">#dc322f;</div>
<div style="background-color:#d33682; color:white;padding:5px;">#d33682;</div>
<div style="background-color:#6c71c4; color:white;padding:5px;">#6c71c4;</div>
<div style="background-color:#268bd2; color:white;padding:5px;">#268bd2;</div>
<div style="background-color:#2aa198; color:white;padding:5px;">#2aa198;</div>
<div style="background-color:#859900; color:white;padding:5px;">#859900;</div>
</center>
</footer>
</body>
</head>
