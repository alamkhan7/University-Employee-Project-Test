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

<form id="testForm1" action="./t.php" method="POST">
First Name:
    <input type="text" data-rule-required="true" data-rule-minlength="2" title="buga" name="firstname" id="firstname">
    <br>
    <label id="errorFirstname" for="firstname" class="error">error for firstname</label>
    <br>
    <input type="text" data-rule-required="true" title="buga" name="lastname" id="lastname">
    <br>
    <input type="text" data-rule-required="true" title="something" name="something" id="something" value="something">
    <br>
    <input type="submit" name="submit" class="btn-md btn btn-success" value="Submit">
</form>

<!-- jQuery library -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/additional-methods.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Custome JScript File -->
  <script src="js/script.js"></script>
</body>
</html>