<?php
session_start();
include_once("tools.php");

?>

<body onload="total()">

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
    <title>
      Assignment 2
    </title>

  <!-- We will cover style later. Skip down to the body tag -->

  <link rel="stylesheet" type="text/css" href="home.css" />

<style>
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
      width: 90%;
     
  }
  
  li {
      float: left;
  }
  
  li a {
      display: block;
      color: black;
      text-align: center;
      padding: 14px 40px;
      text-decoration: none;
      width:230px;
      
  }
  
  li a:hover {
      background-color: 	#48D1CC;
  }
  img
  {
  vertical-align:text-top;
  text-align:center;
  width:1100;
  height: 500;
  }


body {

   margin:0 auto; 
   text-align:center; 

   }
</style>


    <div class="img">
        <img src='media/i1.PNG' width=1100 height=500 alt='headpic' >
    </div>
</head>

<body>
    <div class="navbar">
        <ul>
          <li><a  href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/index.php">Home</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/rates.php">Rates</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/accommodation.php">Accommodation</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/contact.php">Contact</a></li>
        </ul>
    </div>
 
   

 <script type="text/javascript">
                        function SetAid(aid) {
                            if(document.getElementById('aid') == aid){
                                document.getElementById('aid').value = "";
                            }
                            else{
                                document.getElementById('aid').value = aid;
                            }
                        }
                    </script>
</script>

	
    <main>
        <div id="site-options">

                  
                
            <button id="US" class="panel" onclick="SetAid('US')">
              <img src="media/bp.jpg" alt="US"/>
       
                <h3>Unpowered Small Camping Sites</h3>
                <p >
                AID:US<br>
               Per night:$35.25<br>
                add one adults:$10<br>
                add one child:$5
             </p>
            </button>
      
	 


	 


            <button id="UM" class="panel" onclick="SetAid('UM')">
                <img src="media/bpp.jpg" alt="UM"/>
               
                  <h3>Unpowered Medium Camping Sites</h3>
                  <p >
                  AID:UM<br>
                 Per night:$40.50<br>
                  add one adults:$10<br>
                  add one child:$5
               </p>
              </button>
          
              <button id="PS" class="panel" onclick="SetAid('PS')">
                  <img src="media/bppp.jpg" alt="PS"/>
                 
                    <h3>Powered Small Camping Sites</h3>
                    <p >
                    AID:PS<br>
                   Per night:$50.25<br>
                    add one adults:$10<br>
                    add one child:$5
                 </p>
                </button>

                <button id="PM" class="panel" onclick="SetAid('PM')">
                    <img src="media/cp4.jpg" alt="PM"/>
                   
                      <h3>Powered Medium Camping Sites</h3>
                      <p >
                      AID:PM<br>
                     Per night:$60.50<br>
                      add one adults:$10<br>
                      add one child:$5
                   </p>
                  </button>

             
                  <button id="C" class="panel" onclick="SetAid('C')">
                      <img src="media/cap1.jpg" alt="C"/>
                     
                        <h3>Caravan Sites</h3>
                        <p >
                        AID:C<br>
                       Per night:$100.00<br>
                        add one adults:FREE<br>
                        add one child:FREE
                     </p>
                    </button>
            


<!Form>
	   <div id="choice">
	 
     <form action="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/booking.php" method="post" onSubmit="return fun1();"> 
	 
	 <input type="hidden" name="aid" id="aid" value=""/>
	 
	 <table>  
  <tr>
   <td><label for="arrivalDate:">Arrival Date:</label></td>
	<td><input  type="date" name="date" min="2018-04-27" required style=margin-top:10px</td>
  </tr>


  
  <tr>
   
                         

                              
                             
                                 <td><br><label for="days:">Number of Days:</label><br></td>
                               
                        <td>    <select id="days" name="days"  required onchange="daypp();total() ">
                              <option value=""></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                            </select>
                           </td><br>
   </tr>
<script type="text/javascript">
 var dayNo = 0;
function daypp(){
    dayNo = document.getElementById("days").value;
}
</script> 
  <tr>
    <td><label for="adults:">Number of Adults:</label></td>

                            
                          <td>  <select id="adults" name="adults" required onchange="adultnooo();total()">
                              <option value=""></option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                            </select>
                               
                           </td><br>
  </tr>
<script type="text/javascript">
 var adultNo = 0;
function adultnooo(){
    adultNo = document.getElementById("adults").value;
}
</script> 
   <tr>
   <td><label for="children:">Number of Children:</label></td>

                           
                         <td>   <select id="children" name="children" required onchange="childrennooo();total()">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                            </select>
                           </td><br>
</tr>
<script type="text/javascript">
  var childrenNo = 0;
function childrennooo(){
    childrenNo = document.getElementById("children").value;
}
</script>    
 
 
 
 
 
 
 
 <center>
     <tr>
    <td><label for="max of people:">Max:</label><br></td>
	<td id="max">$</td>
  <tr/>
     
  <tr>
    <td><label for="total:">Total:    </label><br></td>
	<td id="total">$</td>
  <tr/>
  
  <tr>
    <td><label for="GST:">Includes GST:       </label></td>
	<td id="gst">$</td>
  <tr/>
</table>
  </center>
<script type="text/javascript">
	 var totalPrice;
	 function total(){
     var aidPrice;
     var gst;
     var tx='';
	 if(document.getElementById('aid').value == "US"){
	 aidPrice=35.25;
	  
	    if(adultNo>2){
		totalPrice=((aidPrice+10*(adultNo-2)+5*childrenNo)*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
        gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if((adultNo==1 && childrenNo==1)||(adultNo==2 && childrenNo==0)){
	    totalPrice=(aidPrice*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
	    gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if(adultNo==1 && childrenNo>1) {
	    totalPrice=((aidPrice+(childrenNo-1)*5)*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	 
	 }
	  else if(document.getElementById('aid').value == "UM"){
	  	 aidPrice=40.50;
	   if(adultNo>2){
		totalPrice=((aidPrice+10*(adultNo-2)+5*childrenNo)*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
	    gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if((adultNo==1 && childrenNo==1)||(adultNo==2 && childrenNo==0)){
	    totalPrice=(aidPrice*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if(adultNo==1 && childrenNo>1) {
	    totalPrice=((aidPrice+(childrenNo-1)*5)*dayNo).toFixed();
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	  }
	 
	  else if(document.getElementById('aid').value == "PS"){
	 	 aidPrice=50.25;
	   if(adultNo>2){
		totalPrice=((aidPrice+10*(adultNo-2)+5*childrenNo)*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if((adultNo==1 && childrenNo==1)||(adultNo==2 && childrenNo==0)){
	    totalPrice=(aidPrice*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if(adultNo==1 && childrenNo>1) {
	    totalPrice=((aidPrice+(childrenNo-1)*5)*dayNo).toFixed();
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	 }
	 else if(document.getElementById('aid').value == "PM"){
	 	 aidPrice=60.50;
	   if(adultNo>2){
		totalPrice=((aidPrice+10*(adultNo-2)+5*childrenNo)*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if((adultNo==1 && childrenNo==1)||(adultNo==2 && childrenNo==0)){
	    totalPrice=(aidPrice*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	   else if(adultNo==1 && childrenNo>1) {
	    totalPrice=((aidPrice+(childrenNo-1)*5)*dayNo).toFixed(2);
		document.getElementById("total").innerText="$"+totalPrice;
		gst=(totalPrice/11).toFixed(2);
        document.getElementById("gst").innerText="$"+gst;
	   }
	 }
	 else if(document.getElementById('aid').value == "C"){
	 	 aidPrice=100;
		 totalPrice=(aidPrice*dayNo).toFixed(2);
		 document.getElementById("total").innerText="$"+totalPrice;	
		 gst=(totalPrice/11).toFixed(2);
         document.getElementById("gst").innerText="$"+gst;
	 	 
	 }
	 
}
</script>

  


<center><input type="submit" value="Book" "></center>

<script type="text/javascript">
function fun1(){
  if(document.getElementById('aid').value ==""){
   alert("please choose one kind of site");
   return false;
  }
  else{
   return true;
  }
}

</script>	
	
	</form>
	</div>
  <!Form>
  
  
  </div>
</div>
</main>

<?php
footer();

?>
