<html>
<head>
	<title> Online PHP Compiler </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" type="text/css" href="css/css1.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/hoverable_button.css">
  <link rel="stylesheet" type="text/css" href="css/navbar_css.css">
  <script type="text/javascript" src='js/javascript1.js'></script>
  <script type="text/javascript" src='js/bootstrap.min.js'></script>
  <script type="text/javascript" src='js/jquery.min.js'></script>
  <script type="text/javascript">
    function show_Message() { 
        msg = "//Write Your Program Here";
          i=0;
          var showQuote = setInterval(function() {
                user_program.placeholder += msg[i];
                i++;
                if (i==msg.length) {
                  clearInterval(showQuote);
                }
          },250);
    }
  </script>
  <style type="text/css">
  .bck_img{
    background-image: url('PBTF1NEBCG.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
<style type="text/css">
    .navbar-fixed-top{
      z-index: 5;
    }
    .navbar{
      background-color:#400;
      border-color: #400; 
      border-radius: 0;   
    }
    .navbar >li >a {
      padding-top: 20px;
    }
</style>



</head>
<body style="font-family:'arial';" class="bck_img image-responsive" onload="show_Message()"> 
  <div class="container-fluid">
    <div class="page-header">
        <h1 class="h1_css"><strong style="color: white;">Online PHP Compiler</strong></h1>
    </div>
  </div>

<nav class="navbar navbar-inverse" id="abc_navbar" style="red;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="font-size: 17px;">
        <li><a href="index.php" style="color: white;" onmouseover="this.style='color:white; background-color:red;'" onmouseout="this.style+='background-color:#400; color:white;'"> HOME </a></li>
        <li><a href="compile.php" style="color: white;" onmouseover="this.style='color:white; background-color:red;'" onmouseout="this.style+='background-color:#400; color:white;'"> COMPILE </a></li>
        <li><a href="about_us.php" style="color: white;" onmouseover="this.style='color:white; background-color:red;'" onmouseout="this.style+='background-color:#400; color:white;'"> ABOUT US </a></li>
    </div>
  </div>
</nav>

<div class="well" style="border-color: rgba(0,0,0,0); background: rgba(0, 0, 0, 0);">
<div class="well col-sm-5" style="background: rgba(0, 0, 0, 0.8); ">
  <textarea id="user_program" class="textarea_css" style="width:100%; box-sizing: border-box; background: rgba(0, 0, 0, 0);border-color: rgba(0,0,0,0);" placeholder=""></textarea>
</div>
<div class="col-sm-2 compile_button_css well " style="text-align: center; vertical-align: middle; border-color: rgba(0,0,0,0); background: rgba(0, 0, 0, 0);">
<button class="button1 button2" onclick="submit_user_program_to_compile()"> COMPILE </button>
<button class="button1 button2" onclick="submit_user_program_to_run()"> RUN </button>
<button class="button1 button2" onclick="reset_whole_system()"> RESET </button>

</div>

<div class="well col-sm-5" style="background: rgba(0, 0, 0, 0.8); ">
  <div id="user_output" class="textarea_css" style="overflow-y:auto; display: inline-block; width:100%; box-sizing: border-box; background: rgba(0, 0, 0, 0);border-color: rgba(0,0,0,0);" readonly>//Compiler Output</div>
</div>
</div>      

</body>
</html>