<?php
session_start();
function loggedin()
{
	if (isset($_SESSION['Username']) && !empty($_SESSION['Username']))
	{
		return true ;
	}
	else{
		return false ;
	}
}	

?>