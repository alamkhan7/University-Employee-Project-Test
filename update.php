<?php
include './script/checkLogin.php' ;

// If not loggedin then redirect him to login page
if (!loggedin())
  header("Location: ./login_page.php");


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

  <div class="container" style="margin-top: 2%;">
    <div class="col-md-4 col-md-offset-4">     
      <div class="row">
        <div id="logo" class="text-center">
          <h3>Search Employee</h3>
        </div>

      <form role="form" id="form-buscar">
        <div class="form-group">
          <div class="input-group">
              <input id="1" class="form-control" type="text" name="search" placeholder="EMP ID" required/>
              <span class="input-group-btn">
                <button class="btn btn-info" type="submit">
                  <i class="glyphicon glyphicon-search" aria-hidden="true"></i> Search
                </button>
              </span>
          </div>
        </div>
      </form>
      </div>            
    </div>
  </div>

  <div class="container">
  <form class="form-horizontal">
      <div class="row">

        <div class="col-md-12">
          
          <div class="form-group">
            <label class="col-sm-2 col-md-2 control-label" for="empname">Employee Name:</label>  
            <div class="col-sm-3 col-md-2">
              <input id="empname" name="empname" placeholder="Alam Khan" class="form-control input-md" type="text" maxlength="50">
            </div>

            <label class="col-sm-2 col-md-2 control-label" for="empcode">Employee Code:</label>  
            <div class="col-sm-3 col-md-2">
              <input id="empcode" name="empcode" placeholder="1234" class="form-control input-md" type="text" disabled>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-md-2 control-label" for="designation">Desig:</label>
            <div class="col-sm-2 col-md-2">
            <select id="designation" name="designation" class="form-control">
              <option value="none">None</option>
              <option value="a">A</option>
              <option value="b">B</option>
            </select>
            </div>
          

          
            <label class="col-sm-2 col-md-2 control-label" for="dprt">Dept:</label>
            <div class="col-sm-2 col-md-2">
            <select id="dprt" name="dprt" class="form-control">
              <option value="none">None</option>
              <option value="recuring">Recuring</option>
              <option value="bannu">Bannu</option>
              <option value="abottabad">Abottabad</option>
              <option value="sic">SIC</option>
            </select>
            </div>

            <label class="col-sm-2 col-md-2 control-label" for="dprtno">Dept No:</label>
            <div class="col-sm-2 col-md-2">
            <select id="dprt" name="dprt" class="form-control">
              <option value="none">None</option>
              <option value="2">2(Mardan)</option>
              <option value="3">3(Bannu)</option>
              <option value="4">4(Abottabad)</option>
              <option value="5">5(SIC)</option>
            </select>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-sm-2 col-md-2 control-label" for="accno">A/C No:</label>  
            <div class="col-sm-2 col-md-2">
            <input id="accno" name="accno" placeholder="123456789123456" class="form-control input-md" type="text" maxlength="20">
            </div>

            <label class="col-sm-2 col-md-2 control-label" for="bps">BPS:</label>  
            <div class="col-sm-2 col-md-2">
            <input id="bps" name="bps" placeholder="17" class="form-control input-md" type="number" min="0" maxlength="2">
            </div>

            <label class="col-sm-2 col-md-2 control-label" for="fix">Fixed:</label>  
            <div class="col-sm-2 col-md-2">
            <select id="fix" name="fix" class="form-control">
              <option value="r">R</option>
              <option value="f">F</option>
              <option value="n" selected>N</option>
            </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 col-md-2 control-label" for="jvcode">JV Code:</label>  
            <div class="col-sm-2 col-md-2">
            <select id="jvcode" name="jvcode" class="form-control">
              <option value="1">1(Admin Officers)</option>
              <option value="2">2(Admin Others)</option>
              <option value="3" selected>3(Teacher Officers)</option>
              <option value="4" selected>4(Teacher Others)</option>
            </select>
            </div>

            <label class="col-sm-2 col-md-2 control-label" for="month">Month:</label>  
            <div class="col-sm-2 col-md-2">
            <select id="month" name="month" class="form-control">
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3" selected>March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
            </div>

            <label class="col-sm-2 col-md-2 control-label" for="year">Year:</label>  
            <div class="col-sm-2 col-md-2">
            <input id="year" name="year" placeholder="2017" class="form-control input-md" type="number" min="2000" maxlength="4">
            </div>
          </div>

        </div>
        <!-- End Of Column-->
      </div>
      <!-- End of 1st Row -->

      <div class="row">
        <div class="col-md-12">
          <h4 class="">Pay and Allowances</h4>
          <div style="border-bottom: 1px solid black"></div>
          <br>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="bpay">Basic Pay:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="bpay" name="bpay" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="fpay">Fixed Pay:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="fpay" name="fpay" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="ppay">Personal Pay:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="ppay" name="ppay" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="hreall">Hrent1 All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="hreall" name="hreall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            

            <label class="col-sm-4 col-md-1 control-label" for="hresuball">Hrent Sub All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="hresuball" name="hresuball" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="conall">Convence All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="conall" name="conall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="adhrel">Adhoc Rel 15%:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="adhrel" name="adhrel" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="compall">Computer All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="compall" name="compall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="priall">Private All:</label>
            <div class="col-sm-6 col-md-2">
            <input id="priall" name="priall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="extall">Extrall/D All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="extall" name="extall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="deaall">15% Dearnes All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="deaall" name="deaall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="senall">Senior:P All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="senall" name="senall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="medall">Med All:</label>
            <div class="col-sm-6 col-md-2">
            <input id="medall" name="medall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="entall">Ent All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="entall" name="entall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="deanall">Dean All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="deanall" name="deanall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="integ">Integrated:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="integ" name="integ" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="specadd">Spec/Add All:</label>
            <div class="col-sm-6 col-md-2">
            <input id="specadd" name="specadd" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="qual">Qual All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="qual" name="qual" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="tech">Teach All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="tech" name="tech" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="ordall">Orderly All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="ordall" name="ordall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="specrealf">Spec/relf 15%:</label>
            <div class="col-sm-6 col-md-2">
            <input id="specrealf" name="specrealf" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="othall">Oth All:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="othall" name="othall" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>
        </div>
          <!-- End of 1st Column -->


        <div class="col-md-12">
          <h4 class="">Deductions</h4>
          <div style="border-bottom: 1px solid black"></div>
          <br>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="hrentt">Hrent:T Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="hrentt" name="hrentt" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="hrent0">Hrent:O Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="hrent0" name="hrent0" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="elecded">Elec:T Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="elecded" name="elecded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="elec0ded">Elec:O Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="elec0ded" name="elec0ded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="gasded">Sui gas Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="gasded" name="gasded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="waterded">Water T Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="waterded" name="waterded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="endded">End Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="endded" name="endded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="bfundded">Bfund Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="bfundded" name="bfundded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="convded">Conv Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="convded" name="convded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="gpfrded">Gpf: R Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="gpfrded" name="gpfrded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="gpfaded">Gpf:A Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="gpfaded" name="gpfaded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="eidded">Eid Advance Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="eidded" name="eidded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="ufundtded">Ufund T/Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="ufundtded" name="ufundtded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="ufundoded">Ufund O/Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="ufundoded" name="ufundoded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="vehded">Vehicle/O Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="vehded" name="vehded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="upkeepded">Upkeep Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="upkeepded" name="upkeepded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="tvehded">T/vehicle Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="tvehded" name="tvehded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="leavded">R/leav Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="leavded" name="leavded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="recovded">Recov:gap/conv Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="recovded" name="recovded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="itexded">Itax Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="itexded" name="itexded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>

          <div class="form-group" style="font-size: 12px;">
            <label class="col-sm-4 col-md-1 control-label" for="ginsded">Gins Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="ginsded" name="ginsded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
            
            <label class="col-sm-4 col-md-1 control-label" for="ptax">P/Tax:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="ptax" name="ptax" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>

            <label class="col-sm-4 col-md-1 control-label" for="oth1ded">Oth/Ded:</label>  
            <div class="col-sm-6 col-md-2">
            <input id="oth1ded" name="oth1ded" placeholder="00.00" class="form-control input-md" type="number" min="0">
            </div>
          </div>
        </div>
        <!-- End of 2nd Column -->
      </div>
      <!-- End of 2nd Row -->


  
        <!-- Button -->
        <br>
        <div class="form-group">
          <label class="col-sm-4 col-md-4 control-label" for="update"></label>
          <div class="col-md-4">
            <button id="update" name="update" class="block-centre btn btn-lg btn-success btn-primary btn-block">Update</button>
          </div>
        </div>

  </form>

  </div>
<br><br><br>




<!-- jQuery library -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Custome JScript File -->
  <script src="js/script.js"></script>
</body>
</html>