<?php
/**
 * Template Name: Agenda Template
 * Description: Displays STEM Google Calendar entries.
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
				<h1 class="entry-title">Conference Agenda</h1>
				<?php
$db = mysql_connect("mysql:3308","webconferences","CNU113h20G");
mysql_select_db("WEB_APP_CONFERENCES",$db) or die(mysql_error()); 
// Retrieve all the data from the "example" table
$id = 14;
$agendaQuery = "SELECT * FROM CONFEVENT WHERE EVENT_CNFID ='". $id. "' ORDER BY STR_TO_DATE(EVENT_DATE,'%M %d,%Y'), STR_TO_DATE(EVENT_STARTTIME, '%h:%i%p') ASC";
	
//echo $agendaQuery;
$agendaResult = mysql_query($agendaQuery) or die(mysql_error());
echo "<div id=agenda><ul>";

while($row = mysql_fetch_assoc($agendaResult)){
      $date = $row['EVENT_DATE'];

      if ($date <> $saveDate){
           $saveDate = $date;
            echo "<h2>".$date."</h2>";      
      }

	if (empty($hour)){
		$hour = $row['EVENT_HOURS'];
		echo "<li><span class=time>".$row['EVENT_STARTTIME']." - ".$row['EVENT_ENDTIME']."</span></li>"; 
		}
	
	if($hour != $row['EVENT_HOURS']){
		$hour = $row['EVENT_HOURS'];
		echo "<li><span class=time>".$row['EVENT_STARTTIME']." - ".$row['EVENT_ENDTIME']."</span></li>"; 
	}		
	
		echo "<ul class=sessioninfo><h3>".$row['EVENT_TITLE']."</h3>";
		if(!empty($row['EVENT_THEME'])) { echo "<span class=track>Track:  ".$row['EVENT_THEME']."</span><br />"; }
		if(!empty($row['EVENT_LOC'])) { echo "<li><span class=location>".$row['EVENT_LOC']."</span><br />"; }		
		echo "<span class=desc>".$row['EVENT_DESC']."</span></li></ul>"; 
}
echo "</ul></div>";

?>
<p class="note">*Unless noted otherwise, events are held in the <a href="location">Nessmith-Lane Conference Center</a>.</p>

			</div><!-- #content -->
		</div><!-- #primary -->
<script>
	$(function() {
		$( "#accordion" ).accordion();
	});
	</script
<?php get_footer(); ?>