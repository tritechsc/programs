
<?php
$programs = array(
	array("4C0MT5Ach2U", "Tri-Tech"),
	array("L3NU_Aj5b2I", "Auto Body"),
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

if (isset($_GET['v'])) {
	$v = $_GET['v']; // Default page
	} else {
		$v = 0;
	}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tri-Tech</title>
		<link rel="stylesheet"href="style.css">
		<style>
		</style>
	</head>
	<body>
		<div class="row">
		<div class="col-M-6">
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
					  videoId: '<?php echo $programs[$v][0] ?>'
					});
				  }
				</script>

		</div>
		<div class="menu col-3 col-s-3">
		<li><a href="index.php?v=1">Auto Body Technology</a></li>
		<li><a href="index.php?v=2">Auto Systems Technology</a></li>
		<li><a href="index.php?v=12">Careers in Healthcare</a></li>
		<li><a href="index.php?v=3">Construction Trades</a></li>
		<li><a href="index.php?v=4">Cosmetology</a></li>
		<li><a href="index.php?v=5">Culinary Arts</a></li>
		<li><a href="index.php?v=6">Cyber Security</a></li>
		<li><a href="index.php?v=7">Digital Arts &amp; Filmmaking</a></li>
		<li><a href="index.php?v=8">Dental Assisting</a></li>
		<li><a href="index.php?v=9">Diesel Technology</a></li>
		</ul>
		</div>
		<div class="menu col-3 col-s-3">
		<ul>
		<li><a href="index.php?v=10">Early Childhood Education</a></li>
		<li><a href="index.php?v=11">Firefighting</a></li>
		<li><a href="index.php?v=13">Law Enforcement</a></li>
		<li><a href="index.php?v=14">Pre-Nursing</a></li>
		<li><a href="index.php?v=15">Pre-Veterinary Tech</a></li>
		<li><a href="index.php?v=16">Radio</a></li>
		<li><a href="index.php?v=17">Teen Parenting</a></li>
		<li><a href="index.php?v=18">Video Game Design</a></li>
		<li><a href="index.php?v=19">Welding Technology</a></li>
		</ul>
		</div>
		</div>
	</body>
</html>

