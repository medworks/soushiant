<?php 
    include_once("../config.php");
    include_once("../classes/database.php");
	include_once("../classes/messages.php");	
	include_once("../classes/functions.php");
	include_once("../classes/login.php");
	include_once("../lib/persiandate.php");	
	$login = Login::GetLogin();
	if (!$login->IsLogged())
	{
		header("Location: ../index.php");
		die(); // solve a security bug
	}
	$db = Database::GetDatabase();
	$overall_error = false;
	if ($_GET['item']!="compmgr")	exit();
	if (!$overall_error && $_POST["mark"]=="savecomp")
	{	    
		$fields = array("`name`","`detail`");
		$_POST["detail"] = addslashes($_POST["detail"]);		
		$values = array("'{$_POST[name]}'","'{$_POST[detail]}'");
		if (!$db->InsertQuery('service',$fields,$values)) 
		{
			//$msgs = $msg->ShowError("ثبت اطلاعات با مشکل مواجه شد");
			header('location:?item=compmgr&act=new&msg=2');			
			//$_GET["item"] = "compmgr";
			//$_GET["act"] = "new";
			//$_GET["msg"] = 2;
		} 	
		else 
		{  										
			//$msgs = $msg->ShowSuccess("ثبت اطلاعات با مو??قیت انجام شد");			
			header('location:?item=compmgr&act=new&msg=1');		    
			//$_GET["item"] = "compmgr";
			//$_GET["act"] = "new";
			//$_GET["msg"] = 1;
		}  				 
	}
    else
	if (!$overall_error && $_POST["mark"]=="editcomp")
	{		
	    $_POST["detail"] = addslashes($_POST["detail"]);	    
		$values = array("`name`"=>"'{$_POST[name]}'",
			            "`detail`"=>"'{$_POST[detail]}'");
			
        $db->UpdateQuery("service",$values,array("id='{$_GET[cid]}'"));
		header('location:?item=compmgr&act=mgr');
		//$_GET["item"] = "compmgr";
		//$_GET["act"] = "act";			
	}
	if ($_GET['act']=="new")
	{
		$editorinsert = "
			<p>
				<input type='submit' id='submit' value='ذخیره' class='submit' />	 
				<input type='hidden' name='mark' value='savecomp' />";
	}
	if ($_GET['act']=="edit")
	{	
		$row=$db->Select("service","*","id='{$_GET["cid"]}'",NULL);
		$editorinsert = "
		<p>
			 <input type='submit' id='submit' value='ویرایش' class='submit' />	 
			 <input type='hidden' name='mark' value='editcomp' />";
	}
	if ($_GET['act']=="del")
	{
		$db->Delete("service"," id",$_GET["cid"]);
		if ($db->CountAll("service")%10==0) $_GET["pageNo"]-=1;		
		header("location:?item=compmgr&act=mgr&pageNo={$_GET[pageNo]}");
	}
	if ($_GET['act']=="do")
{
	$html=<<<ht
		<div class="title">
	      <ul>
	        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	        <li><span>مدیریت شرکت</span></li>
	      </ul>
	      <div class="badboy"></div>
	    </div>
		<div class="sub-menu" id="mainnav">
			<ul>
			  <li>		  
				<a href="?item=compmgr&act=new">درج شرکت جدید
					<span class="add-news"></span>
				</a>
			  </li>
			  <li>
				<a href="?item=compmgr&act=mgr" id="news" name="news">حذف/ویرایش شرکت
					<span class="edit-news"></span>
				</a>
			  </li>
			 </ul>
			 <div class="badboy"></div>
		</div>		 
ht;
}else
if ($_GET['act']=="new" or $_GET['act']=="edit")
{
$msgs = GetMessage($_GET['msg']);
$html=<<<cd
	<script type='text/javascript'>
		$(document).ready(function(){	   
			$("#frmcompanymgr").validationEngine();			
			});
    });
	</script>
  <div class="title">
      <ul>
        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
	    <li><span>مدیریت شرکت</span></li>
      </ul>
      <div class="badboy"></div>
  </div>
  <div class="mes" id="message">{$msgs}</div>
  <div class='content'>
	<form name="frmcompanymgr" id="frmcompanymgr" class="" action="" method="post" >
     <p class="note">پر کردن موارد مشخص شده با * الزامی می باشد</p>	 
       <div class="badboy"></div>
       <p>
         <label for="name">عنوان شرکت</label>
         <span>*</span>
       </p>    
       <input type="text" name="name" class="validate[required] subject" id="name" value='{$row[name]}'/>   	  
	   <div class="badboy"></div>
  	   <p>
         <label for="detail">توضیحات</label>
         <span>*</span>
       </p>
       <textarea cols="50" rows="10" name="detail" class="detail" id="detail" > {$row[detail]}</textarea>  	   
	   {$editorinsert}
      	 <input type="reset" value="پاک کردن" class='reset' />
       </p>  
	</form>
	<div class='badboy'></div>	
  </div>  
   
cd;
} else
if ($_GET['act']=="mgr")
{
	if ($_POST["mark"]=="srhnews")
	{	 			    
		$rows = $db->SelectAll(
				"service",
				"*",
				"{$_POST[cbsearch]} LIKE '%{$_POST[txtsrh]}%'",
				null,
				$_GET["pageNo"]*10,
				10);
			if (!$rows) 
			{					
				//$_GET['item'] = "compmgr";
				//$_GET['act'] = "mgr";
				//$_GET['msg'] = 6;				
				header("Location:?item=compmgr&act=mgr&msg=6");
			}
		
	}
	else
	{	
		$rows = $db->SelectAll(
				"service",
				"*",
				null,
				null,
				$_GET["pageNo"]*10,
				10);
    }
                $rowsClass = array();
                $colsClass = array();
                $rowCount =($_GET["rec"]=="all" or $_POST["mark"]!="srhnews")?$db->CountAll("service"):Count($rows);
                for($i = 0; $i < Count($rows); $i++)
                {						
					$rows[$i]["detail"] =(mb_strlen($rows[$i]["detail"])>50)?
					mb_substr(html_entity_decode(strip_tags($rows[$i]["detail"]), ENT_QUOTES, "UTF-8"), 0, 50,"UTF-8") . "..." :
					html_entity_decode(strip_tags($rows[$i]["detail"]), ENT_QUOTES, "UTF-8");						
					if ($i % 2==0)
					 {
							$rowsClass[] = "datagridevenrow";
					 }
					else
					{
							$rowsClass[] = "datagridoddrow";
					}					
					$rows[$i]["edit"] = "<a href='?item=compmgr&act=edit&cid={$rows[$i]["id"]}' class='edit-field'" .
							"style='text-decoration:none;'></a>";								
					$rows[$i]["delete"]=<<< del
					<a href="javascript:void(0)"
					onclick="DelMsg('{$rows[$i]['id']}',
						'از حذف این خبر اطمینان دارید؟',
					'?item=compmgr&act=del&pageNo={$_GET[pageNo]}&cid=');"
					 class='del-field' style='text-decoration:none;'></a>
del;
                }

    if (!$_GET["pageNo"] or $_GET["pageNo"]<=0) $_GET["pageNo"] = 0;
            if (Count($rows) > 0)
            {                    
                    $gridcode .= DataGrid(array( 
					        "name"=>"نام شرکت",
							"detail"=>"توضیحات",							
                            "edit"=>"ویرایش",
							"delete"=>"حذف",), $rows, $colsClass, $rowsClass, 10,
                            $_GET["pageNo"], "id", false, true, true, $rowCount,"item=compmgr&act=mgr");
                    
            }
$msgs = GetMessage($_GET['msg']);
$list = array("name"=>"نام شرکت",
              "detail"=>"توضیحات");
$combobox = SelectOptionTag("cbsearch",$list,"name");
$code=<<<edit
<script type='text/javascript'>
	$(document).ready(function(){	   			
		$('#srhsubmit').click(function(){	
			$('#frmsrh').submit();
			return false;
		});		
	});
</script>	   
					<div class="title">
				      <ul>
				        <li><a href="adminpanel.php?item=dashboard&act=do">پیشخوان</a></li>
					    <li><span>مدیریت شرکت</span></li>
				      </ul>
				      <div class="badboy"></div>
				  </div>
                    <div class="Top">                       
						<center>
							<form action="?item=compmgr&act=mgr" method="post" id="frmsrh" name="frmsrh">
								<p>جستجو بر اساس {$combobox}</p>
								<input type="text" id="txtsrh" name="txtsrh" class="search-form" value="جستجو..." onfocus="if (this.value == 'جستجو...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'جستجو...';}"  /> 
								<p class="search-form">									
									<a href="?item=compmgr&act=mgr" name="srhsubmit" id="srhsubmit" class="button"> جستجو</a>
									<a href="?item=compmgr&act=mgr&rec=all" name="retall" id="retall" class="button"> کلیه اطلاعات</a>
								</p>
								<input type="hidden" name="mark" value="srhnews" /> 
								{$msgs}
								{$gridcode} 
							</form>
					   </center>
					</div>

edit;
$html = $code;
}	
   
return $html;
?>