<?php
	include_once("../../config.php");
    include_once("../../classes/database.php");
	include_once("../../classes/messages.php");	
	include_once("../../classes/functions.php");	
	$db = Database::GetDatabase();
	$html = "";
	$rows = $db->SelectAll("service","*",null,"id ASC");
	$html.=<<<cd
	<div class="pages rtl" id="internet">
	<div class="internet">
	    <h1>اینترنت</h1>
	    <div class="buttons">
		    <span class="horline"></span>
	    	<span class="verline"></span>
cd;
    foreach($rows as $key=>$val) 	
	{
		$html.="<a class='mokhaberat ' id='mokhaberat'>{$val[name]}</a>";
	}
	$html.=<<<cd
	<div class="table" id="table"></div>
		</div>
	</div>
</div>
cd;
echo $html;
?>			
			
	