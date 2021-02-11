<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Register :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).php();
                $(".dropdown dt a span").php(text);
                $(".dropdown dd ul").hide();
                $("#result").php("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").php();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
			
			
			
			$("#signup").click(function(){	
				var valid=true;
var name=$.trim($("#name").val());
var mobile=$.trim($("#mobile").val());
var mobile_r=/^[6-9][0-9]{9}$/;
var email=$.trim($("#email").val());
var email_r=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
var password=$.trim($("#password").val());
var cpassword=$.trim($("#cpassword").val());
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
if(!(mobile_r.test(mobile)))
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
if(!(email_r.test(email)))
{
$("#emailerror").html('Invalid Email');
$("#emailerror").css("color","red");
$("#email").css("border-color","red");
valid=false;
}
else
{
$("#emailerror").html('Email');
$("#emailerror").css("color","black");
$("#email").css("border-color","#ddd");
}
if(password.length<6)
{
$("#passworderror").html('Invalid Password');
$("#passworderror").css("color","red");
$("#password").css("border-color","red");
valid=false;
}
else
{
$("#passworderror").html('Password');
$("#passworderror").css("color","black");
$("#password").css("border-color","#ddd");
}
if(cpassword!=password)
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
var mydata="name="+name+"&mobile="+mobile+"&email="+email+"&password="+password+"&cpassword="+cpassword+"&signup=yes";

$.ajax({
	
	method:mymethod,
	url:myurl,
	data:mydata,
	success:function(result)
	{
		if(result==1)
		{
			alert('signup successful');
			$("#name").val("");
			$("#mobile").val("");
			$("#email").val("");
			$("#password").val("");
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
 </head>
<body>
	<?php include"navigation.php";?>
     <div class="main">
      <div class="shop_top">
	     <div class="container">
		 <div class="col-lg-4"></div>
		 <div class="col-lg-4">
		  <h3>Signup</h3>
	
		 <form class="form">
		 <div class="form-group">
		 <label class="label-control" id="nameerror">Name:-</label>
		 <input type="text" name="name" id="name" placeholder="Name" class="form-control">
		 </div>
		 <div class="form-group">
		 <label class="label-control" id="mobileerror"> Mobile:-</label>
		 <input type="text" name="mobile" id="mobile" placeholder="Mobile" class="form-control">
		 </div>
		 <div class="form-group">
		 <label class="label-control" id="emailerror">Email:-</label>
		 <input type="text" name="email" id="email" placeholder="Email" class="form-control">
		 </div>
		 <div class="form-group">
		 <label class="label-control" id="passworderror">Password:-</label>
		 <input type="password" name="password" id="password" placeholder="Password" class="form-control">
		 </div>
		 <div class="form-group">
		 <label class="label-control" id="cpassworderror"> Confirm Password:-</label>
		 <input type="password" name="cpassword" id="cpassword" placeholder="confirm Password" class="form-control">
		 </div>
		 <div class="form-group">
		 <input type="submit" name="signup" id="signup"  value="Signup" class="form-control success">
		 </div>
		 
		 
		 
		 		 
		 
		 </form>
		 
		 
		 
		 
		 
		 
		 
						        
					</div>
		   </div>
	  </div>
	  <?php include"footer.php";?>
</body>	
</html>