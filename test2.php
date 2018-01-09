<?php

$programs = array(
	array("4C0MT5Ach2U&t", "Tri-Tech"),
	array("L3NU_Aj5b2I","Auto Body"),
	array("SuoTdqZtVCg","Auto Systems"),
	array("7EBkpIKEQqY","Construction"),
	array("TTIjD2giWn8" ,"Cosmetology"),
	array("zAZz9GX2RQI" ,"Culinary Arts"),
	array("WuVS8h9SXvk" ,"Cyber Security"),
	array("Na5KXBIvlSk" ,"Digital Arts and Filmmaking"),
	array("LeI-8hznfb8" ,"Dentistry"),
	array("Q5hG0EWDZ34" ,"Diesel"),
	array("rmDleOagajY" ,"Early Childhood Education"),
	array("ezPGfDyzFWU" ,"Firefighting"),
	array("TW9AJ6urStc" ,"Carrers In Healthcare"),
	array("AmmYfyub7CQ" ,"Law Enforcement"),
	array("LrtiCHVIok0" ,"Nursing"),
	array("IRGovQvXfdU" ,"Pre-Veterinary"),
	array("WIcC_AsrRp0" ,"Radio"),
	array("PtUATEjLozM" ,"Teen Parenting"),
	array("6FhUXFZVj58" ,"Video Game Design"),
	array("_FejVzlhE_8" ,"Welding")
);

//teen parent PtUATEjLozM
// tri-tech overview 4C0MT5Ach2U&t=6s
?>

<html>
<head>
<title>Tri-Tech Programs</title>

<style>


</style>


</head>
<body>
<div id="ytplayer"></div>

 <div id="ytplayer"></div>
<script>
  // Load the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replace the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('ytplayer', {
      height: '390',
      width: '640',
      videoId: '4C0MT5Ach2U'
    });
  }

</script>
	
	
<?php
 
for ($i = 0; $i < 20; $i++){
	echo $programs[$i][0]." ".$programs[$i][1]."<br />";	
}

?>
</body>
</html>
