<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $error;
      $count = mysqli_num_rows($result);
      
     	
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
      <title>Login Page</title>
      
      <style type = "text/css">
      
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
		.container {
 width: 30%;
  height: 300px;
  border: 1px solid #c3c3c3;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-align-content: right;
  align-content: right;
  float:right;
}
body{
 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width:device-width;
 
    background-image: url(bglogin.png);
    min-height: 100%;
    background-position: center;
    background-size: cover;
	font-family:Raleway;
}
input[type=submit] {
  background-color: #7D3C98;
  color: white;
  font-size:15px;
  font-family:Raleway
}

      </style>
      
   </head>
   
   <body >
	<br><Br><Br><Br><Br><br>
      <div class= "container" align = "center">
         <div style = "width:700px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#D2B4DE  ; color:#FFFFFF; padding:5px;"><b>&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;LOGIN</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
			   <br><br><br>
                  <label>UserName  :&emsp;&emsp;</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :&emsp;&emsp;&ensp;</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = "SUBMIT "/><br />
               </form>
                              <div style = "font-size:11px; color:#EBDEF0  ; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>