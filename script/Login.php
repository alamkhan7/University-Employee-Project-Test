<?php
require './Connection.php' ;

ob_start();
session_start();


$login_error = "" ;
$going_back = "../login_page.php"; 

if(isset($_POST['submit']) )
{
  if(isset($_POST['username']) || isset($_POST['password']) )
  {
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;

    if(!empty($username) && !empty($password))
    {
      // To protect against sql injection we use mysql_real_escape_string() function
      // Which adds escape character and this function can only be used when open valid sql connection 
      // establish or when are connected to mysql database 
      
      $query = "SELECT Username FROM User WHERE Username= '" . mysqli_real_escape_string($conn,$username) . "' AND Password='" .mysqli_real_escape_string($conn,$password) ."' " ;

      if($query_result = mysqli_query($conn,$query))
      {
        $query_num = mysqli_num_rows($query_result) ;
        if ($query_num > 0 )
        {
          $record = mysqli_fetch_assoc($query_result) ;
          $user_name = $record['Username'] ;

          // store user_id in session when they login
          $_SESSION['Username'] = $user_name ;

        }
        else
          $login_error = "Invalid Username/Password";
      }
      else
        $login_error = "You Must Supply Username/Password";
    }
    else
      $login_error = "Please fill Username/Password";
  }
  
 
}

// return back to index page if error 
// encode string for url
header('Location: '.$going_back.'?error='. urlencode($login_error));

?>