The simple php routines use the following sql queries

usage.php
select * from stream.hits order by id desc limit 50;

select-district-all.pjp
 $programs = array("Tri-Tech","Auto Body","Auto Systems","Construction","Cosmetology",
 "Culinary Arts","Cyber Security","Digital Arts and Filmmaking","Dentistry","Diesel",
 "Early Childhood Education","Firefighting","Carrers In Healthcare","Law Enforcement",
 "Nursing","Pre-Veterinary","Radio","Teen Parenting","Video Game Design","Welding","LOC");

for ($n = 0; $n < 21; $n++){
		$sql = "select distinct ip from stream.hits where pagename = \"$programs[$n]\"";
		// output all ip addresses

select-distict.php
$sql = "select distinct ip from stream.hits where pagename = \"$programs[$n]\"";
		/output totals
