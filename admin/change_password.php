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
<?php include"head.php";?> 
<body>
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.html">Home</a></li>
<li class="active">Blank Page</li>
</ol>
</div>
<div class="graph-visual tables-main">
<h2 class="inner-tittle">Change Password</h2>
<div class="graph">
<div class="block-page">
<p>
<h3 class="inner-tittle two">change password </h3>
<div class="grid-1">
<div class="form-body">
<form class="form-horizontal" action="myphp.php" method="post"> 

<div class="form-group">
<label for="inputPassword3" id="oldpassworderror" class="col-sm-2 control-label">Old Password</label> 
<div class="col-sm-9"> 
<input type="password" class="form-control" id="oldpassword" name='oldpassword' placeholder="old Password"> 
</div>
</div>
<div class="form-group">
<label for="inputPassword3" id="newpassworderror" class="col-sm-2 control-label">New Password</label> 
<div class="col-sm-9"> 
<input type="password" class="form-control" id="newpassword" name='newpassword' placeholder="NewPassword"> 
</div>
</div>
<div class="form-group"> 
<label for="inputEmail3" id="cpassworderror" class="col-sm-2 control-label">Confirm-password</label> 
<div class="col-sm-9">
<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm-password"> 
</div> 
</div>

<div class="col-sm-offset-2"> 
<input type="submit" class="btn btn-default" name="change_password" id="change_password" value="Change Password"> </div> </form> 
</div>

</div>
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
<script>

$(document).ready(function(){
$("#change_password").click(function(){
	
var valid=true;
var oldpassword=$.trim($("#oldpassword").val());

var newpassword=$.trim($("#newpassword").val());
var cpassword=$.trim($("#cpassword").val());

if(oldpassword.length<6)
{
$("#oldpassworderror").html('Invalid Old Password');
$("#oldpassworderror").css("color","red");
$("#oldpassword").css("border-color","red");
valid=false;
}
else
{
$("#oldpassworderror").html('Old Password');
$("#oldpassworderror").css("color","black");
$("#oldpassword").css("border-color","#ddd");
}
if(newpassword.length<6)
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

if(cpassword!=newpassword)
{
$("#cpassworderror").html('Invalid Confirm Password');
$("#cpassworderror").css("color","red");
$("#cpassword").css("border-color","red");
valid=false;
}
else
{
$("#cpassworderror").html('Confirm Password');
$("#cpassworderror").css("color","black");
$("#cpassword").css("border-color","#ddd");
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














</script>
























</body>
</html>