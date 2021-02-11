<?php
require_once"dbconfig.php";
##################################################
if(isset($_REQUEST['signup']))
{
	$name=trim($_REQUEST['name']);
	$mobile=trim($_REQUEST['mobile']);
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	$query="insert into user (name,mobile,email,password)
	values
	('$name','$mobile','$email','$password')";
	if(checklength($name,2))
	{
		echo"invalid name";
		$valid=false;
	}
	if(!checkmobile($mobile))
	{
		echo"invalid mobile";
		$valid=false;
	}
	if(!checkemail($email))
	{
		echo"invalid email";
		$valid=false;
	}
	if(checklength($password, 6))
	{
		echo"invalid password";
		$valid=false;
	}
	if($password!=$cpassword)
	{
		echo"password not match";
		$valid=false;
	}
	if($valid)
	{
	$n=iud($query);
	if($n==1)
	{
		echo"1";
	}
	else
	{
		echo"something wrong";
	}
	}
	}
###########################################################
	if(isset($_REQUEST['login']))
	{
		
	$email=trim($_REQUEST['email']);
	$password=trim($_REQUEST['password']);
	
	$valid=true;
	$query="select * from admin where email='$email' and password='$password'";
	
	if(!checkemail($email))
	{
		echo"invalid email";
		$valid=false;
	}
	if(checklength($password, 6))
	{
		echo"invalid password";
		$valid=false;
	}
	
	if($valid)
	{
	$login_data=select($query);
	$n=mysqli_num_rows($login_data);
	if($n==1)
	{
		while($data=mysqli_fetch_array($login_data))
		{
		extract($data);
		
		}
		
		$_SESSION['adminid']=$id;
		$_SESSION['name']=$name;
		$_SESSION['image']=$image;
		$_SESSION['login']="yes";
		
		echo"1";
	}
	else
	{
		echo"email or password is incorrect";
	}
	}
		
	}

#############################################
if(isset($_REQUEST['change']))
	{
	$id=$_SESSION['adminid'];	
	$oldpassword=trim($_REQUEST['oldpassword']);
	$newpassword=trim($_REQUEST['newpassword']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	$query="update admin set password='$newpassword' where password='$oldpassword' and id='$id'";
	
	
	if(checklength($oldpassword, 6))
	{
		echo"invalid old password";
		$valid=false;
	}
	if(checklength($newpassword, 6))
	{
		echo"invalid New password";
		$valid=false;
	}
	if($cpassword!=$newpassword)
	{
		echo"both password not matched";
		$valid=false;
	}
	if($valid)
	{
	$n=iud($query);
	
	if($n==1)
	{		
       echo"1";
	}
	else
	{
		echo"something wrong";
	}
	}
		
	}

#######################################################
if(isset($_REQUEST['forget']))
	{
	$email=trim($_REQUEST['email']);

	$time=time();
	$otp=md5($email.$time);
	$valid=true;
	if(strlen($otp)!=32)
		{
			echo "invalid otp";
			$valid=false;
		}
		if(!checkemail($email))
	{
		echo"invalid email";
		$valid=false;
	}
	
	$query="update admin set otp='$otp' where email='$email' ";
	
if($valid){
	$n=iud($query);
if($n==1)
{
	echo"1";
}
else
{
	echo"invalid forget password";
}
}
}
	
################################################
if(isset($_REQUEST['reset']))
{
	$otp=trim($_REQUEST['otp']);
	$newpassword=trim($_REQUEST['newpassword']);
	$cpassword=trim($_REQUEST['cpassword']);
	$valid=true;
	if(strlen($otp)!=32)
	{
		echo"invalid otp";
		$valid=false;
	}
	if(checklength($newpassword, 6))
	{
		echo"invalid  New password";
		$valid=false;
	}
	if($cpassword!=$newpassword)
	{
		echo"Password and Confirm Password is not match";
		$valid=false;
	}
	$query="update user set password='$newpassword',otp='' where otp='$otp'";
	
	if($valid)
	{
		$n=iud($query);
	if($n==1)
	{
		echo"1";
	}
	else
	{
		echo "something wrong";
	}
	}
}
###########################################################################
if(isset($_REQUEST['upload']))
{
 
$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];
	$query="update admin set image='$name' where id='1'";

	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 $_SESSION['image']=$name;
		 echo"<script>alert('Image uploaded successfully');
		 window.location='change_image.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"image is not upload";
	}
	
	
	
	
	
}
##########################################################################
if(isset($_REQUEST['elect_submit']))
{
	extract($_REQUEST);
	$error=$_FILES["image"]["error"];

$name=$_FILES["image"]["name"];
$type=$_FILES["image"]["type"];
$size=$_FILES["image"]["size"];
$tmp_name=$_FILES["image"]["tmp_name"];

	
	echo $query="INSERT INTO  `items`( `Title`, `category`, `item_rating`, `image`, `discription`, `price`)
	VALUES ('$title','$category','$rating','$name','$discription','$price')";
	
	move_uploaded_file($tmp_name,"images/$name");
	
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert(' successful');
		 window.location='view_item_list.php';
		 </script>";
	 }
	 
	
	
	else
	{
		echo"Book is not upload";
	}
}
###################################################################################################
if(@$_REQUEST['delete']=='yes')
{
$bookid=$_REQUEST['id'];
$n=iud("DELETE FROM `books` WHERE bookid='$bookid'");
if($n==1)
{
	header("location:view_book_list.php");
}
else
{
	echo"<script>alert('Something Wrong');
		 window.location='view_book_list.php';
		 </script>";
}
}	
###############################################

	if(@$_REQUEST['edit']=='yes')
{
	$bookid=$_REQUEST['id'];
	header("location:edit_book.php?id=$bookid");
}
###################################################	
if(isset($_REQUEST['Update_book']))
{
	extract($_REQUEST);
	$error=$_FILES["uimage"]["error"];

$name=$_FILES["uimage"]["name"];
$type=$_FILES["uimage"]["type"];
$size=$_FILES["uimage"]["size"];
$tmp_name=$_FILES["uimage"]["tmp_name"];

echo $query="UPDATE `books` SET `isbn`='$uisbn',`Title`='$utitle',`Author`='$uauthor',`book_rating`='$urating',
`image`='$name',`discription`='$udiscription',`price`='$uprice',`publisher`='$upublisher' WHERE bookid='$uid'";
	
	if(move_uploaded_file($tmp_name,"images/$name"))
	{
	$n=iud($query);
	 if($n==1)
	 {
		 
		 echo"<script>alert('Book Updated successfully');
		 window.location='view_book_list.php';
		 </script>";
	 }
	
	}
	else
	{
		echo"<script>alert('Book is not Update ');
		 window.location='view_book_list.php';
		 </script>";
	}
}
	#####################################################################
	####################################################################
if(@$_REQUEST['dele']=='yes')
{
$id=$_REQUEST['id'];

		 
$n=iud("DELETE FROM `cart` WHERE cartid='$id'");
if($n==1)
{
	echo"<script>
	
	alert('Successful');
		 window.location='mycart.php';
		 </script>";
}
		 
else
{
	echo"<script>alert('Something Wrong');
		 window.location='mycart.php';
		 </script>";
}
}	
	
	
	
##########################################################################
	
	   
	
	
	










?>