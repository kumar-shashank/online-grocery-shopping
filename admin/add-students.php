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
<h2 class="inner-tittle"></h2>
<div class="graph">
<div class="block-page">
<p>
<h3 class="inner-tittle two">ADD NEW DATA</h3>
<div class="grid-1">
<div class="form-body">
<form class="form-horizontal" action="add_Students_data.php" method="post"> 

<div class="form-group">
<label for="name" id="nameerror" class="col-sm-2 control-label">Student Name</label> 
<div class="col-sm-9"> 
<input type="text" class="form-control" id="name" name='name' placeholder="Student Name"> 
</div>
</div>
<div class="form-group">
<label for="mobile" id="mobileerror" class="col-sm-2 control-label">Mobile Number</label> 
<div class="col-sm-9"> 
<input type="text" class="form-control" id="mobile" name='mobile' placeholder="Mobile Number"> 
</div>
</div>
<div class="form-group"> 
<label for="city" id="cityerror" class="col-sm-2 control-label">City</label> 
<div class="col-sm-9">
<input type="text" class="form-control" id="city" name="city" placeholder="City"> 
</div> 
</div>

<div class="col-sm-offset-2"> 
<input type="submit" class="btn btn-default" name="add_Student" id="add_Student" value="add Student"> </div> </form> 
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
$("#add_Student").click(function(){
	
var valid=true;
var name=$.trim($("#name").val());

var mobile=$.trim($("#mobile").val());
var city=$.trim($("#city").val());

if(name.length<2)
{
$("#nameerror").html('Invalid Name');
$("#nameerror").css("color","red");
$("#name").css("border-color","red");
valid=false;
}
else
{
$("#nameerror").html('Name');
$("#nameerror").css("color","black");
$("#name").css("border-color","#ddd");
}
if(mobile.length!=10)
{
$("#mobileerror").html('Invalid Mobile');
$("#mobileerror").css("color","red");
$("#mobile").css("border-color","red");
valid=false;
}
else
{
$("#mobileerror").html('Mobile');
$("#mobileerror").css("color","black");
$("#mobile").css("border-color","#ddd");
}

if(city.length<3)
{
$("#cityerror").html('Invalid City');
$("#cityerror").css("color","red");
$("#city").css("border-color","red");
valid=false;
}
else
{
$("#cityerror").html('City');
$("#cityerror").css("color","black");
$("#city").css("border-color","#ddd");
}
if(!valid)
{
	return false;
}

var mymethod="post";
var myurl="add_students_data.php";
var mydata="name="+name+"&mobile="+mobile+"&city="+city+"&add_student=yes";
alert(mydata);
$.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	
	{
		alert(result);
		if(result==1)
		{
	        alert("students data added");
			window.location="show_students_data.php";
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