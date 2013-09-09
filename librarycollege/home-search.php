<div style="position:static;margin-top:.5em" class="tabswrap ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs_search">
<ul class="tabs ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
	<li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#discovery">Discovery Service</a></li>
	<li class="ui-state-default ui-corner-top"><a href="#gil">GIL - Catalog</a></li>
	<li class="ui-state-default ui-corner-top"><a href="#galileo">GALILEO Articles/Databases</a></li>
	<li class="ui-state-default ui-corner-top"><a href="#ejournals">E-Journals</a></li>
</ul>

<!-- Discovery -->
<div id="discovery" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
<h5 class="negmartop_5">Discovery Service Search</h5>
<script src="http://supportforms.epnet.com/eit/scripts/ebscohostsearch.js" type="text/javascript"></script>
  <form action="" onsubmit="return ebscoHostSearchGo(this);" method="post" class="gsform discovery" id="frm_discovery">
    <input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1">
    <input id="ebscohosturl" name="ebscohosturl" type="hidden" value="http://libez.lib.georgiasouthern.edu/login?url=http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=0&mode=and&lang=en&authtype=ip,cookie,uid">
	<input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db">
    <input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+AND+">

    <input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="">
 
          
   <input id="ebscohostsearchtext" name="ebscohostsearchtext" type="text" placeholder="DISCOVER articles, books, media and more...">
   
   <input type="submit" value="Search">
	
	<div class="search-options">
   <a href="http://libez.lib.georgiasouthern.edu/login?url=http://search.ebscohost.com/login.aspx?authtype=ip,cookie,uid&amp;group=main&amp;profile=edsadv">Advanced Search</a> &bull; 
   <a href="http://libez.lib.georgiasouthern.edu/login?url=http://search.ebscohost.com/login.aspx?authtype=ip,cookie,uid&amp;group=main&amp;profile=eds">Discovery Home</a> &bull;
   <a href="http://support.ebsco.com/help/index.php?help_topic_id=1361" target="_new">Help</a>
     </div>  

	<div class="search-filter">
	
    

           
              <input type="checkbox" id="chkFullText" name="chkFullText"><label for="chkFullText">Full Text Only</label>
        

   
              <input type="checkbox" id="chkPeerReviewed" name="chkPeerReviewed"> <label for="chkPeerReviewed">Scholarly Journals Only</label>
	</div>
  </form>






    
</div><!-- end Discovery -->

<!-- GIL -->

<div id="gil" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">  
<h5 class="negmartop_5">GIL Catalog Search</h5>
   <form action="http://gilfind.georgiasouthern.edu/vufind/Search/Results" method="GET" name="searchForm" target="_blank" class="search gsform gil">
                   <input type="text" name="lookfor" placeholder="Find books, journal titles, multimedia and more...">
                  <select name="type">
                    <option value="AllFields">All Fields</option>
                    <option value="Title">Title</option>
                    <option value="TitleSubject">Title+Subject</option>
                    <option value="JournalTitle">Journal Title</option>
                    <option value="Author">Author</option>
                    <option value="Subject">Subject</option>
                    <option value="CallNumber">Call Number</option>
                    <option value="sudoc">Sudoc Number</option>
                    <option value="ISN">ISBN/ISSN</option>
                    <option value="tag">Tag</option>
                  </select>
                 <input type="submit" name="SubBut" class="searchbox" alt="Find" value="Search GIL">
              <div class="search-options">
                 <strong>Didn't find it?</strong> Try searching <a href="https://gil.georgiasouthern.edu"> Classic GIL</a> instead. 
                </div>
                
                <div class="search-filter">
                <strong>More: </strong>
                    <a href="https://gil.georgiasouthern.edu/cgi-bin/Pwebrecon.cgi?DB=local&PAGE=rbSearch">Course Reserves</a> &bull;
                    <a href="http://gilfind.georgiasouthern.edu/vufind/Search/Advanced">Advanced Search</a>               
				</div>
        </form>    

</div><!-- end GIL-->
   
<!-- Galileo -->
  
<div id="galileo" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide"> 
<div class="left negmartop_5">
        <h6 class="f15 semibold">Search for articles in General Sources</h6>
      <form name="form1" >
      <select name="menu1" >
          <option value="#">Select Database</option>
          <option value="http://www.galileo.usg.edu/express?link=zbac">Academic Search Complete</option>
          <option value="http://www.galileo.usg.edu/express?link=omnf-gso1">OmniFile Full Text Mega Edition</option>
          <option value="http://www.galileo.usg.edu/express?link=webs-gso1">Web of Science</option>
      </select>
      <input type="submit" onClick="top.location.href = this.form.menu1.options[this.form.menu1.selectedIndex].value; return false;" name="gal-gensources" id="gal-gensources" value="Go">
            </form>
    </div>
   
   <div class="right negmartop_5">
<h6 class="f15 semibold">Search for articles by Subject</a></h6>
  <form action="http://library.georgiasouthern.edu/subjectsplus2/subjects/guide.php" method="get" id="subjectizer-Subject" class="form-galileo">

	<input type="hidden" name="submitted_by" value="index" />
	<select name="subject" size="1" id="subjects-Subject">
<option value="Accounting">Accounting </option>

<option value="AfricanAmericanStudies">African-American Studies </option>

<option value="Anthropology">Anthropology </option>
<option value="Art">Art </option>

<option value="Astronomy">Astronomy </option>
<option value="AthleticTraning">Athletic Training </option>
<option value="Biography">Biography </option>

<option value="Biology">Biology </option>
<option value="Business">Business </option>

<option value="Chemistry">Chemistry </option>

<option value="ChildDevelopment">Child Development </option>
<option value="Communication">Communication </option>

<option value="ComputerScience">Computer Science </option>
<option value="ConstructionIndustry">Construction Industry </option>

<option value="CounselingEducation">Counseling Education </option>

<option value="CriminalJustice">Criminal Justice </option>
<option value="Ecology">Ecology </option>

<option value="Economics">Economics </option>

<option value="Education">Education </option>
<option value="EducationK12">Education K-12 </option>

<option value="Engineering">Engineering </option>
<option value="English">English </option>

<option value="EnvironmentalScience">Environmental Science </option>

<option value="FashionDesign">Fashion Design </option>
<option value="Film">Film </option>

<option value="Finance">Finance </option>
<option value="FoodService">Food Service </option>

<option value="GenderStudies">Gender Studies </option>

<option value="General ">General  </option>
<option value="Geography">Geography </option>

<option value="Geology">Geology </option>
<option value="Georgia">Georgia </option>

<option value="GovernmentInformation">Government Information </option>

<option value="Health">Health </option>
<option value="History">History </option>

<option value="HospitalityIndustry">Hospitality Industry </option>

<option value="InformationTechnology">Information Technology </option>

<option value="InternationalStudies">International Studies </option>

<option value="IrishStudies">Irish Studies </option>
<option value="Journalism">Journalism </option>

<option value="Kinesiology">Kinesiology </option>
<option value="Languages">Languages </option>

<option value="Law">Law </option>
<option value="LibraryScience">Library Science </option>

<option value="Linguistics">Linguistics </option>

<option value="Literature">Literature </option>
<option value="Logistics">Logistics </option>

<option value="Management">Management </option>
<option value="Marketing">Marketing </option>

<option value="Mathematics">Mathematics </option>
<option value="Medicine">Medicine </option>

<option value="MilitaryArtandScience">Military Art and Science </option>

<option value="MulticulturalStudies">Multicultural Studies </option>

<option value="Music">Music </option>

<option value="News">News </option>

<option value="Nursing">Nursing </option>
<option value="Nutrition">Nutrition </option>

<option value="PerformingArts">Performing Arts </option>
<option value="Pharmacology">Pharmacology </option>

<option value="Philosophy">Philosophy </option>
<option value="PhysicalEducationandTraining">Physical Education and Training </option>

<option value="Physics">Physics </option>
<option value="PoliticalScience">Political Science </option>

<option value="Psychology">Psychology </option>

<option value="PublicAdministration">Public Administration </option>

<option value="PublicHealth">Public Health </option>
<option value="PublicRelations">Public Relations </option>

<option value="Recreation">Recreation </option>
<option value="Religion">Religion </option>

<option value="Sociology">Sociology </option>
<option value="Speech">Speech </option>

<option value="SportsScience">Sports Science </option>

<option value="Statistics">Statistics </option>
<option value="Theatre">Theatre </option>

<option value="Tourism">Tourism </option>
<option value="WomensStudies">Women's Studies </option>
    </select>
	<input type="submit" value="Go"></form> 
</div>

 <div class="search-options">
 <h6 class="f14 martop_5 marright_5 marbot_7 semibold inline">Browse databases alphabetically</h6>       
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/all/">All databases</a></span> | <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/1/">1</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/a/">A</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/b/">B</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/c/">C</a></span>
  
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/d/">D</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/e/">E</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/f/">F</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/g/">G</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/h/">H</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/i/">I</a></span>
  
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/j/">J</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/k/">K</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/l/">L</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/m/">M</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/n/">N</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/o/">O</a></span>
  
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/p/">P</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/q/">Q</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/r/">R</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/s/">S</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/t/">T</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/u/">U</a></span>
  
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/v/">V</a></span>
  <span><a href="http://www.galileo.usg.edu/scholar/georgiasouthern/databases/w/">W</a></span> 

    
  
  <div id="branding-galileo">
  <span>* <a href="http://www.galileo.usg.edu/scholar/databases/libx/" target="_blank">Get the GALILEO Toolbar</a></span>
   <img src="http://cmstest.georgiasouthern.edu/testsite2/files/logo_galileo.png" alt="Georgia's Virtual Library" id="logo-galileo">
  </div>      

 </div>  

 <div class="clear"></div>
 
</div><!-- end Galileo -->

<!-- eJournals -->
<div id="ejournals" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
<h5 class="negmartop_5">FindIt@GeorgiaSouthern</h5>

<form method="get" target="AZ_Window" accept-charset="UTF-8" action="http://sfx.galib.uga.edu/gso1/az/default" class="gsform ejournals"> 
<input name="param_perform_value" value="searchTitle" type="hidden"> 
<input name="param_jumpToPage_value" value="" type="hidden"> 
<input name="param_type_value" value="textSearch" type="hidden"> 
<input name="param_chinese_checkbox_active" value="1" type="hidden">



<input name="param_pattern_value" placeholder="Type Something to Find" id="param_pattern_value" type="text">  
<input value="Search" type="submit"> 

<div class="search-filter">
<input name="param_chinese_checkbox_value" id="param_chinese_checkbox_value" value="0" type="hidden"> 
<input name="param_textSearchType_value" id="startsWith" value="startsWith" checked="checked" type="radio"><label for="startsWith">Starts with</label>
<input name="param_textSearchType_value" id="contains" value="contains" type="radio">
<label for="contains">Contains</label>
<input name="param_textSearchType_value" id="exactMatch" value="exactMatch" type="radio">
<label for="exactMatch">Exact</label>
</div>
</form>

</div><!-- end eJournals -->


</div>