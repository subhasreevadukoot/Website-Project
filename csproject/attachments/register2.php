<html>
   
   <head>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="selectmenu.css">
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
   <br><br>  Tell us few more details about you so that we can know you better 
      
     	     <center>
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
		 <section class="container">
            <tr>
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
<a href="#" class="next round">&#8250;</a> 	
      </form>
   
	 
	
   	
   </body>
</html>