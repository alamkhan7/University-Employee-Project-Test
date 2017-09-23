<?php
include './script/checkLogin.php' ;

// If user is not loggedin then redirect him to login Page
if (!loggedin())
  header("Location: ./login_page.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
  
  <!-- Custome CSS style -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- fontawesome -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  

  <title>::Employee Management</title>
</head>
<body style="background-color:#eaeae1">




<!-- jQuery library -->
  <script src="js/jquery-2.1.4.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
  
  <!-- Custome JScript File -->
  <script src="js/script.js"></script>
  <script >

  $("#fix").ready(function(){
    if ($(this).val()=="n"){
      $("#accno").hide(); 
      $("#fixamount").show();
    }
    else{
      $("#accno").show(); 
      $("#fixamount").hide();
    }
  });

  $("#fix").change(function(){
     if($(this).val()=="n")
     {    
         $("#accno").hide();
         $("#fixamount").show();
     }
     else
     {
          $("#accno").show(); 
          $("#fixamount").hide();
     }
  });

  $("#staff").change(function(){
     if($(this).val()=="teach")
     {    
         $("#qualification").show();
         $(".qualification").show();
     }
     else
     {
          $("#qualification").hide();
          $(".qualification").hide();
     }
     
  });

  $(".form_datetime").datetimepicker({
      format: "dd/mm/yyyy",
      minView: 2,
      autoclose: true,
      todayBtn: true,
      pickerPosition: "top-left",
    });

  
  </script>
</body>
</html>