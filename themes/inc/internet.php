<?php
	include_once("../../config.php");
    include_once("../../classes/database.php");
	include_once("../../classes/messages.php");	
	include_once("../../classes/functions.php");
	if ($_GET["item"]=="isp")
	{
		//$rows = $db->SelectAll("subservice","*","sid ={$_GET[id]}","id ASC");
		//for 
		$html="<table border='0' cellpadding='0' cellspacing='0'><tbody>";

$html.=<<<cd
		<tr>
			<td class="tdtitle" style="border-right: 1px solid transparent;">نام سرویس: ---</td>
			<td colspan="4" class="tdtitle" style="border-left:  1px solid transparent;">سرعت: 128/128 کیلو بیت بر ثانیه</td>
		</tr>
		<tr>
			<td class="tdbox" valign="baseline" width="*">مدت سرویس</td>
			<td class="tdbox align-c" valign="baseline" width="100">یک ماهه</td>
			<td class="tdbox align-c" valign="baseline" width="100">سه ماهه</td>
			<td class="tdbox align-c" valign="baseline" width="100">شش ماهه</td>
			<td class="tdbox lcol align-c" valign="baseline" width="100">یک ساله</td>
		</tr>
			<tr>
			<td class="tdbox" valign="baseline">میزان ترافیک/ گیگا بایت</td>
			<td class="tdbox align-c" valign="baseline">۳</td>
			<td class="tdbox align-c" valign="baseline">۶</td>
			<td class="tdbox align-c" valign="baseline">۱۰</td>
			<td class="tdbox lcol align-c" valign="baseline">۱۵</td>
		</tr>
		<tr>
			<td class="tdbox" valign="baseline">هزینه اشتراک/ تومان</td>
			<td class="tdbox align-c" valign="baseline"><a href="#">۱۳٫۹۰۰</a></td>
			<td class="tdbox align-c" valign="baseline"><a href="#">۲۹٫۹۰۰</a></td>
			<td class="tdbox align-c" valign="baseline"><a href="#">۵۲٫۹۰۰</a></td>
			<td class="tdbox lcol align-c" valign="baseline"><a href="#">۸۷٫۹۰۰</a></td>
		</tr>
		<tr>
			<td class="tdbox even" valign="baseline">متوسط هزینه هر ماه/ تومان</td>
			<td class="tdbox even align-c" valign="baseline">۱۳٫۹۰۰</td>
			<td class="tdbox even align-c" valign="baseline">۹٫۹۰۰</td>
			<td class="tdbox even align-c" valign="baseline">۸٫۸۰۰</td>
			<td class="tdbox lcol even align-c" valign="baseline">۷٫۳۰۰</td>
		</tr>
cd;

$html.=<<<cd
	</tbody></table>
cd;
echo $html;
	}
	
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
		$html.="<a href='#/internet/?item=isp&id={$val[id]}' class='mokhaberat' id='isp'>{$val[name]}</a>";
	}
	$html.=<<<cd
	<div class="table" id="table"></div>
		</div>
	</div>
</div>
<script type='text/javascript'>
		$(document).ready(function(){
		//alert("test");
		$("#isp").on("click",function(){
		 alert("test");
		 //$.ajax({
//        	type: 'POST',
        	//url: 'price.php',
        	//success: function(tbl){
        		//$("#table").ajaxComplete(function(){
        		//	$(this).html(tbl);
        		//})
        //	}
        //});
			return false;
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

	