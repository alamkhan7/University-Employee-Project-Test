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
  <!-- Custome CSS style -->
  <link rel="stylesheet" href="css/styles.css">
  <!-- fontawesome -->
  <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
  

  <title>::Employee Management</title>
</head>
<body style="background-color:#eaeae1">
<header>
  <ol class="breadcrumb">
    <li><a href="./index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li><a href="./add_emp.php"><span class="glyphicon glyphicon-user"></span> Add Employee</a></li>
    <li><a href="./update.php">Update</a></li>
    <li><a href="./script/Logout.php"><span class="glyphicon glyphicon-off"></span> Logout </a></li>
    <div class="pull-right"><a href="./operator.php">Operator</a></div>
  </ol>
</header>

<br><br>
<div class="container-fluid">
  <div class="row">
    
    <div id="logo" class="text-center">
      <h4>Add/Change Operator Account</h4>
    </div>

    <div class="col-md-6">

      <form role="form" id="form-buscar">
        <div class="form-group col-sm-6 col-md-offset-2 col-md-8">
          <div class="input-group">
              <input id="1" class="form-control" type="text" name="search" placeholder="Operator Username" required/>
              <span class="input-group-btn">
                <button class="btn btn-success" type="submit">
                  <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
                </button>
              </span>
          </div>
        </div>
      </form>


      <form class="form-horizontal col-sm-12 col-md-12" style="border-right: 1px solid black">
        <br>
        <fieldset>
           <!-- Text input -->
          <div class="form-group">
            <label class="col-sm-2 col-md-4 control-label" for="opusername">New Username:</label>
            <div class="col-sm-4 col-md-5">
              <input id="opusername" name="opusername" placeholder="admin" class="form-control input-md" type="text" maxlength="30" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-md-4 control-label" for="newpassword">New Password:</label>
            <div class="col-sm-4 col-md-5">
              <input id="newpassword" name="newpassword" placeholder="1234" class="form-control input-md" type="text" maxlength="30" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-md-4 control-label" for="confpassword">Confirm Password:</label>
            <div class="col-sm-4 col-md-5">
              <input id="confpassword" name="confpassword" placeholder="1234" class="form-control input-md" type="text" maxlength="30" required>
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-1 control-label" for="change"></label>
            <div class="col-md-4">
              <button id="change" name="change" class="btn btn-primary">Change</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
    <!-- End Of Column -->

    <div class="col-md-6">

      <form class="form-horizontal col-sm-12 col-md-12">
        <div id="logo" class="text-center">
          <h4>Admin Section</h4>
        </div>
        <br>
        <fieldset>
           <!-- Text input -->
          <div class="form-group">
            <label class="col-sm-2 col-md-4 control-label" for="oldpassword">Old Password:</label>
            <div class="col-sm-4 col-md-5">
              <input id="oldpassword" name="oldpassword" placeholder="Old Password" class="form-control input-md" type="text" maxlength="30" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-md-4 control-label" for="newpassword">New Password:</label>
            <div class="col-sm-4 col-md-5">
              <input id="newpassword" name="newpassword" placeholder="New Password" class="form-control input-md" type="text" maxlength="30" required>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-md-4 control-label" for="confpassword">Confirm Password:</label>
            <div class="col-sm-4 col-md-5">
              <input id="confpassword" name="confpassword" placeholder="New Password" class="form-control input-md" type="text" maxlength="30" required>
            </div>
          </div>

          <!-- Button -->
          <div class="form-group">
            <label class="col-md-1 control-label" for="change"></label>
            <div class="col-md-4">
              <button id="change" name="change" class="btn btn-primary">Change</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>


  </div>
</div>





<!-- jQuery library -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Custome JScript File -->
  <script src="js/script.js"></script>
</body>
</html>