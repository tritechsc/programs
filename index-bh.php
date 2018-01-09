<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Tri-Tech</title>
		<link rel="stylesheet"href="style.css">
		<style>
		</style>
	</head>
	<body>
		<?php
		if (!isset($_GET['v'])) {
			$_GET['v'] = 0;
		}
		$url = 'https://www.youtube.com/embed/';
		$movies = array(
			'' => 'Index',
			$url.'L3NU_Aj5b2I' => 'Auto Body',
			$url.'SuoTdqZtVCg' => 'Auto Systems',
			$url.'7EBkpIKEQqY' => 'Construction',
			$url.'TTIjD2giWn8' => 'Cosmetology',
			$url.'zAZz9GX2RQI' => 'Culinary Arts',
			$url.'WuVS8h9SXvk' => 'Cyber Security',
			$url.'Na5KXBIvlSk' => 'Digital Arts &amp; Filmmaking',
			$url.'LeI-8hznfb8' => 'Dentistry',
			$url.'Q5hG0EWDZ34' => 'Diesel',
			$url.'rmDleOagajY' => 'Early Childhood Education',
			$url.'ezPGfDyzFWU' => 'Firefighting',
			$url.'TW9AJ6urStc' => 'Healthcare',
			$url.'AmmYfyub7CQ' => 'Law Enforcement',
			$url.'LrtiCHVIok0' => 'Nursing',
			$url.'IRGovQvXfdU' => 'Pre-Veterinary',
			$url.'0a9KVpkE2pI' => 'Radio',
			$url.'PtUATEjLozM' => 'Teen Parenting',
			$url.'6FhUXFZVj58' => 'Video Game Design',
			$url.'_FejVzlhE_8' => 'Welding'
		);
		$values = array_values($movies);
		$keys = array_keys($movies);
		$_SESSION['pagename'] = $values[$_GET['v']];
		include('hits.php');
		?>
		<div class="row">
			<div class="col-M-8">
				<header>Tri-Tech Skills Center</header>
				<?php if (!$_GET['v'] == 0): ?>
				<iframe style="width:100%;" src="<?php echo $keys[$_GET['v']];?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen><?php print $values[$_GET['v']]; ?></iframe>
				<?php else: ?>
				<h3>Click a menu button to get started!</h3>
				<?php endif; ?>
			</div>
			<div class="menu col-4 col-s-4">
				<ul>
					<?php 
					foreach ($values as $video => $name) {
						if ($video < 1) continue;
						$query = "select pagename from hits where pagename = '".$name."';";
						$result = mysqli_query($connection, $query);
						$num = mysqli_num_rows($result);
						if ($num == 0) {
							$num = 0;
						}
						echo '<li><sup>'.$num.' hits </sup><a href="index.php?v='.$video.'">'.$name.'</a>'."\n";
					}
					?>
				</ul>
			</div>
		</div>
	</body>
	<footer>
	</footer>
</html>
<?php mysqli_close($connection); ?>
