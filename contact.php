<?php
session_start();
include_once("tools.php");






$contact=array(
'name'=>$_POST['name'],
'phone'=>$_POST['phone'],
'e-mail'=>$_POST['e-mail'],

);


$fp = fopen('mailing.txt','w+');   
fwrite($fp,var_export($times,true));   
fclose($fp);  


$_SESSION["contact"] = $contact;
?>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Assignment 2</title>
  <script type="text/javascript">
 function remember_onload() {
                if (typeof(Storage) !== "undefined") {
                    if (localStorage.getItem("rem") == "true") {
                        document.getElementById("name").value = localStorage.getItem("name");
                        
                        document.getElementById("phone").value = localStorage.getItem("phone");
                        document.getElementById("e-mail").value = localStorage.getItem("e-mail");
                        document.getElementById("message").value = localStorage.getItem("message");
                        document.getElementById("rem").checked = true;
                    }
                }
            }
            function remember() {
                if (typeof(Storage) !== "undefined") {
                    if (document.getElementById("rem").checked) {
                        localStorage.setItem("name", document.getElementById("name").value);
                        
                        localStorage.setItem("phone", document.getElementById("phone").value);
                        localStorage.setItem("e-mail", document.getElementById("e-mail").value);
                        localStorage.setItem("message", document.getElementById("message").value);
                        localStorage.setItem("rem", true);
                    } else {
                        localStorage.removeItem("name");
                        
                        localStorage.removeItem("phone");
                        localStorage.removeItem("e-mail");
                        localStorage.removeItem("message");
                        localStorage.removeItem("rem");
                    }
                }
            }
        </script>







  <!-- We will cover style later. Skip down to the body tag -->
 
</head>

<body>

  <header> 
   
  </header>
  <div  style="text-align: center; width: 500px; border: green solid 1px;"></div>
  <img src='media/10.PNG' width=1100 height=500 alt='headpic' style="display: inline-block;" >
</div>
  <style>

.user{
 width:  70%;
 height: 200%;
  border-width: 10px;
  background-color: #48D1CC;
  border-style: solid;
  margin: 10px;
  padding: 40px;
  display:inline-block;
 border-color: #FFDEAD;
 
}

.bb{
  width: 60%;
  border-width: 10px;
  background-color: #48D1CC;
  border-style: solid;
  margin: 11px;
  padding: 5px;
  display:inline-block;
 border-color: #48D1CC;
 float:right;
}
p.double {border-style: double;
   border-width: 0;
  float: left;
  
}

img
  {
  vertical-align:text-top;
  text-align:center;
  
  }
section{
  width:120%px;
  height: 1000px;
  border: 5px;
}

body {

   margin:0 auto; 
   text-align:center; 

   }
   .box
   {
     margin:0 auto;
    width:100%;
    }
    .navbar {
    text-align:center;
}
.navbar ul {
    display:inline-block;
}
.navbar li {
    float:left;
}
.navbar li + li {
    margin-left:20px;
}
 body {background-color: 	#FFB6C1}
    ul {
      list-style-type: none;
      margin: 100;
      padding: 0;
      overflow: hidden;
      background-color: #FFDEAD;
      width: 73%;
     
  }
  
  li {
      float: left;
  }
  
  li a {
      display: block;
        color: black;
       text-align: center;
        padding: 5px 16px;
       text-decoration: none;
        width:230px;
      
  }
  
  li a:hover {
      background-color: 	#48D1CC;
  }

#denglu *{ 
 vertical-align:middle; 
 font-size:14px; 
} 

.row{
  height: 90px;
  width: 73%;
  background-color: tomato;
  border-radius: 9px;
  display: flex;
    float:center;
     margin-left:205px;
  
}
.row3{
   flex:1;
   border-left: 1px solid #FFB6C1;
}
.bas{
display: flex;
 flex-direction: column;

}
.bas a{
  flex: 10;
  font-size: 40px;
  color: black;
  text-align: center;
  line-height: 45px;
  text-decoration: none;
  
}
.bas a:first-child{
  border-bottom: 1px solid #FFB6C1;
}
.bas a:hover {
      background-color: 	#48D1CC;
  }


.headd{
font-size: 40px;
font-style: normal;
color: black;
font-weight:900;
}

#box {
  width: 70px;
  margin: 10px;
  padding: 5px;
}
photo {float: left; width: 50%;}


#firstname{
    border-width: 1px;
    border-style: solid;
}
#lastname{
    border-width: 1px;
    border-style: solid;
}
#phone{
    border-width: 1px;
    border-style: solid;
}
#e-mail{
    border-width: 1px;
    border-style: solid;
}

    
#message{
    border-width: 1px;
    border-style: solid;
    width: 60%;
    height: 40%;
    top:100px;
    left:300px;
    padding: 40px;
    
}
div{line-height: 40px;text-align: right;}

input{width: 200px;height: 20px;}


.ll{
  width: 40%;
  border-width: 10px;
  background-color: #48D1CC;
  border-style: solid;
  margin: 8px;
  padding: 5px;
  display:inline-block;
 border-color: #48D1CC;
  float:left;
  text-align: left;
  font-size: 15px;
  

}
  </style>
  </head>
  <body onload="remember-onload()">
    <form action="" method=post>
    　<div class="navbar">
  <ul>
            <li><a  href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/index.php">Home</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/rates.php">Rates</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/accommodation.php">Accommodation</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/contact.php">Contact</a></li>
  </ul>
      </div>








<div class="user">
    
    


<div>


  <div class="ll">
Contact us with our phone:  +61 123876123<br />
Contact us with our email:  polpark@gamil.com<br /><br /><br />
If you have a hearing or vision impairment, call (877) 204–3930 for direct access to our company representatives who are trained in providing support using accessibility services.
  </div>

  <br /><br /><br /><br />
                name：
                <input type="text" id="name" name="name" pattern="[a-zA-Z][a-zA-Z .,'-]*" required>
                <br /><br />
                
                phone number：
                <input type="tel"  id="phone" name="phone" pattern="^0[0-8]\d{8}$" required>
                <br /><br />
                e-mail：
                <input type="email" id="e-mail" name=" e-mail" required><br /><br />
                message：
                <input type="message" id="message"  name="message"><br /><br />

                <p>Sign up with Mailing list <input type="checkbox" name="mailing" id="mailing"
                onchange="remember()">
                
                <p>Remember Me <input type="checkbox" name="rem" id="rem"
                  onchange="remember()">
                </p>
                <p><input type="submit" value="Submit"></p>
                
</div>
</div>
</form>



  




</body>

</html>
<?php
footer();

?>
