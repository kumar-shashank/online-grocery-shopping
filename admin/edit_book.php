<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{

	
}
else
{
	header("location:login.php");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<?php include"head.php";?> 
<script type="text/javascript" src="js/nicEdit-latest.js"></script>
<script type="text/javascript">

  bkLib.onDomLoaded(function() {
        
        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
  });

  </script>
  </head>
<body>
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.html">Home</a></li>
<li class="active">Update project</li>
</ol>
</div>
<div class="graph-visual tables-main">
<h2 class="inner-tittle">Update Project</h2>
<div class="graph" style="height:1000px">
<div class="block-page">
<p>
<h3 class="inner-tittle two">Project</h3>

<div class="form-body">
<form class="form-horizontal" action="myphp.php" method="post" enctype="multipart/form-data"> 
<?php
$result=select("select * from books where bookid='".$_REQUEST['id']."'");
while($r=mysqli_fetch_array($result))
{extract($r);
?>
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">ISBN</label> 
<div class="col-xs-6"> 
<input type="hidden" value="<?=$bookid?>" class="form-control"  name='uid' placeholder="Title"> 
<input type="text" value="<?=$isbn?>" class="form-control"  name='uisbn' placeholder="Title"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errortitle" class="col-sm-2 control-label">Title</label> 
<div class="col-xs-6"> 
<input type="text" value="<?=$Title?>" class="form-control"  name='utitle' placeholder="Title"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errormetakey" class="col-sm-2 control-label">Author</label> 
<div class="col-xs-6"> 
<input type="text" value="<?=$Author?>" class="form-control" name='uauthor' placeholder="Keyword"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="errormetakey" class="col-sm-2 control-label">Rating</label> 
<div class="col-xs-6"> 
<input type="text" value="<?=$book_rating?>" class="form-control" name='urating' placeholder="Rating"> 
</div>
</div>
<div class="form-group"> 
<label for="inputEmail3" id="errormetadis" class="col-sm-2 control-label">Publisher</label> 
<div class="col-xs-6">
<input type="text" value="<?=$publisher?>" class="form-control"  name="upublisher" placeholder="discription"> 
</div> 
</div>
<div class="form-group"> 
<label for="inputEmail3" id="image" class="col-sm-2 control-label">Cover Image</label> 
<div class="col-xs-6">
<input type="file" class="form-control col-xs-4"  name="uimage" > 
</div> 
</div>

<div class="form-group"> 
<label for="inputEmail3" id="image" class="col-sm-2 control-label">Price</label> 
<div class="col-xs-6">
<input type="text" class="form-control col-xs-4"  value="<?=$price?> " name="uprice" > 
</div> 
</div>



<div class="form-group"> 
<label for="inputEmail3" id="cpassworderror" class="col-sm-2 control-label">Project discription</label> 
<div class="col-xs-6">
<textarea name="udiscription" class="form-control col-xs-4">
<?=$discription?>
</textarea>
 </div>
 </div>
<div class="col-sm-6"> 
<center><input type="submit" class="btn btn-info" name="Update_book" id="project_submit" value="Update_book"></center> </div> </form> 
</div>
<?php

}
?>

</p>
</div>

</div>

</div>
</div>
<?php include"footer.php";?>

</div>
</div>
<?php include"side_bar.php";?>
</div>
<?php include"footer_script.php";?>
<!--<script>

$(document).ready(function(){
	
$("#project_submit").click(function(){
	
var valid=true;
var title=$.trim($("#title").val());
var metakey=$.trim($("#metakey").val());
var metadis=$.trim($("#metadis").val());

if(title.length<6)
{
$("#errortitle").html('Invalid title');
$("#errortitle").css("color","red");
$("#title").css("border-color","red");
valid=false;
}
else
{
$("#errortitle").html('Title');
$("#errortitle").css("color","black");
$("#title").css("border-color","#ddd");
}
if(metakey.length<6)
{
$("#newpassworderror").html('Invalid New Password');
$("#newpassworderror").css("color","red");
$("#newpassword").css("border-color","red");
valid=false;
}
else
{
$("#newpassworderror").html('New Password');
$("#newpassworderror").css("color","black");
$("#newpassword").css("border-color","#ddd");
}
if(metadis.length<6)
{
$("#newpassworderror").html('Invalid New Password');
$("#newpassworderror").css("color","red");
$("#newpassword").css("border-color","red");
valid=false;
}
else
{
$("#newpassworderror").html('New Password');
$("#newpassworderror").css("color","black");
$("#newpassword").css("border-color","#ddd");
}



var mymethod="post";
var myurl="myphp.php";
var mydata="oldpassword="+oldpassword+"&newpassword="+newpassword+"&cpassword="+cpassword+"&change=yes";

$.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
	        alert("Password Changed Successfully");
			$("#oldpassword").val("");
			$("#newpassword").val("");
			$("#cpassword").val("");
		}
		else
		{
			alert(result);
		}
			
		
	}
});	






return false;
});
});














</script>-->
























</body>
</html>