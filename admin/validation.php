<?php

function checkmobile($mobile)
{
	return (strlen($mobile)==10 and is_numeric($mobile) and $mobile[0]>5);
}

function checkemail($email)
{
	return filter_var($email,FILTER_VALIDATE_EMAIL);
}

function checklength($str, $length)
{
	 return strlen($str)<$length;
}








?>