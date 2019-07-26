<html>
   
   <head>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         .error {color: #FF0000;}
		 .btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}
body {
  font-family: Raleway;
 height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width:device-width;
   background-image:url("bg7.png");
    min-height: 100%;
  }

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}

h1 {
    color:#F0E68C ;
    font-family:Palatino ;
    font-size: 200%;
    text-align:left;
}
p  {
    color: black;
    font-family: Bookman;
    font-size: 160%;
    !border: 1px solid powderblue;
    text align:center;
    
}
body {
background-image:bck.gif;
 background-repeat: repeat-x;
 height: 20%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width:device-width;
 }
 .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
image{
	width:150px;
	height:150px;
	float:left;
}
p,h2{
	font-family:Raleway;
}
a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color:#D2B4DE  ;
  color: #7D3C98;
}

.next {
  background-color:#D2B4DE  ;
  color:#7D3C98;
}

.round {
  border-radius: 50%;
} 
      </style>
   </head>
   
   <body>
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
           if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
}
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["website"])) {
               $website = " ";
            }else {
               $website = test_input($_POST["website"]);
            }
   
if(!filter_var($website, FILTER_VALIDATE_URL)){
$websiteErr="";
}

            
            if (empty($_POST["comment"])) {
               $comment = "";
            }else {
               $comment = test_input($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      
      ?>

	<p> <h2><br><Center>JOIN NUCLI'S WORLD</h2></p></center>
	
 	  <p ><br><br> P.S. THIS IS A FUN FILLED PLACE.<BR> LEAVE BEHIND ALL YOUR WORRIES BEFORE YOU ENTER.</p>
<br><br>

     <center>
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
				  <br>
               </td>
            </tr>
           
            <tr>

               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
				  <br>
               </td>
            </tr>
           
            <tr>
               <td>Phone:</td>
               <td> <input type = "text" name = "website">
                  <span class = "error"><?php echo $websiteErr;?></span>
				  <br>
               </td>
            </tr>
            
            <tr>
               <td>Address:</td>
               <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
			 
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
			   <br><br>
            </tr>
				
            <td>  <br><br>
              <button class="button" style="vertical-align:middle"><span> Submit </span></button>
            </td>
				
         </table>
		 <a href="prog1.html" class="previous round">&#8249;</a>
<a href="http://localhost/csproject/attachments/register2.php" class="next round">&#8250;</a> 	
      </form>
   
	 
	
   	
   </body>
</html>