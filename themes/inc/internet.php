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
		$html.="<a class='mokhaberat' id='isp'>{$val[name]}</a>";
	}
	$html.=<<<cd
	<div class="table" id="table"></div>
		</div>
	</div>
</div>
<script type='text/javascript'>
		$(document).ready(function(){
		$("#isp").click(function(){
			$.ajax({
        	type: 'POST',
        	url: '../price.php',
        	success: function(tbl){
        		$("#table").ajaxComplete(function(){
        			$(this).html(tbl);
        		})
        	}
        });
			});
			  });
</script>
cd;
echo $html;
/* $("div.buttons a:first").addClass('active');
	$("div.buttons a").click(function(){
		$("div.buttons a").each(function(){
			if($(this).hasClass('active')){
				$(this).removeClass('active');
			}
	 	});
		$(this).addClass('active');
        
    });				 */
?>			

	