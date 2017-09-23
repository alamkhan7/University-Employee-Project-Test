<!DOCTYPE html>
<html>
<head>
	<title>Auto Complete</title>
	 <link rel="stylesheet" href="./css/jquery-ui.min.css">
</head>
<body>

  <h1>Hello</h1>

    <div class = "ui-widget">
        
        <label for="skills">Skills: </label>
        <input id="skills">
     
    </div>

  <h2>END</h2>


<!-- jQuery library -->
  <script src="./js/jquery-2.1.4.min.js"></script>
  <script src="./js/jquery-ui.min.js"></script>
  

  <script>
    
    $(function() {
      $( "#skills" ).autocomplete({
        source: 'a2.php'
      });
    });

  </script>
</body>
</html>