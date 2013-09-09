<?php
/**
 * Template Name: Agenda
 * Description: Displays STEM Google Calendar entries.
 */

get_header(); ?>

		<div id="primary" class="fullpage">
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


echo '<div id="agenda">';

while($row = mysql_fetch_assoc($agendaResult)){
      $date = $row['EVENT_DATE'];

      if ($date <> $saveDate){
           $saveDate = $date;
            echo '<h2 class="confday" style="font-size:25px; margin:20px 0">' . $date . '</h2>';      
      }

	if (empty($hour)){
		$hour = $row['EVENT_HOURS'];
		echo '<span class="time"><img src="http://stem.georgiasouthern.edu/wordpress/wp-content/themes/stem/images/icon_time.png" alt="" style="float:left; margin:4px 8px 0 0;">' . $row['EVENT_STARTTIME']." - ".$row['EVENT_ENDTIME'] . "</span>"; 
		}
	
	if($hour != $row['EVENT_HOURS']){
		$hour = $row['EVENT_HOURS'];
		echo '<span class="time">'. $row['EVENT_STARTTIME']. " - ". $row['EVENT_ENDTIME'] . "</span>"; 
	}		
	
		echo '<h6 class="btn_toggle">' . $row['EVENT_TITLE'] . "</h6>";
		echo '<div class="slide_toggle">';
		if(!empty($row['EVENT_THEME'])) { echo '<span class="track info"><strong>Track:</strong>  ' .$row['EVENT_THEME']."</span><br />"; }
		if(!empty($row['EVENT_LOC'])) { echo '<li><span class="location info"><strong>Location:</strong> ' . $row['EVENT_LOC']."</span><br />"; }		
		if(!empty($row['EVENT_DESC'])) { echo '<span class="desc info"><strong>Description:</strong> '. $row['EVENT_DESC']. "</span>"; }
		echo '</div><hr class="spacer">';
		
}
echo "</div>";

?>
<p class="note">*Unless noted otherwise, events are held in the <a href="http://stem.georgiasouthern.edu/travel">Nessmith-Lane Conference Center</a>.</p>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>