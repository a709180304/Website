<?php
session_start();
include_once("tools.php");






$booking=array(
'aid'=>$_POST['aid'],
'date'=>$_POST['date'],
'day'=>$_POST['days'],
'adult'=>$_POST['adults'],
'children'=>$_POST['children'],
);
$_SESSION["booking"] = $booking;

$total;
$gst;

if($booking['aid']=="US"){
   $aidPrice=35.25;
   if($booking['adult']>2){
    $total=($aidPrice+10*($booking['adult']-2)+5*$booking['children'])*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);
   }
   else if(($booking['adult']==1&&$booking['children']==1)||($booking['adult']==2&&$booking['children']==0)){
    $total=$aidPrice+$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);  
   }
   else if($booking['adult']==1 && $booking['children']>1){
    $total=($aidPrice+($booking['children']-1)*5)*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);    
   }
}
else if($booking['aid']=="UM"){
    $aidPrice=40.50;
   if($booking['adult']>2){
    $total=($aidPrice+10*($booking['adult']-2)+5*$booking['children'])*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);
   }
   else if(($booking['adult']==1&&$booking['children']==1)||($booking['adult']==2&&$booking['children']==0)){
    $total=$aidPrice+$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);  
   }
   else if($booking['adult']==1 && $booking['children']>1){
    $total=($aidPrice+($booking['children']-1)*5)*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);    
   }   
}
else if($booking['aid']=="PS"){
       $aidPrice=50.25;
   if($booking['adult']>2){
    $total=($aidPrice+10*($booking['adult']-2)+5*$booking['children'])*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);
   }
   else if(($booking['adult']==1&&$booking['children']==1)||($booking['adult']==2&&$booking['children']==0)){
    $total=$aidPrice+$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);  
   }
   else if($booking['adult']==1 && $booking['children']>1){
    $total=($aidPrice+($booking['children']-1)*5)*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);    
   }
}
else if($booking['aid']=="PM"){
    $aidPrice=60.50;
   if($booking['adult']>2){
    $total=($aidPrice+10*($booking['adult']-2)+5*$booking['children'])*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);
   }
   else if(($booking['adult']==1&&$booking['children']==1)||($booking['adult']==2&&$booking['children']==0)){
    $total=$aidPrice+$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);  
   }
   else if($booking['adult']==1 && $booking['children']>1){
    $total=($aidPrice+($booking['children']-1)*5)*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2);    
   }
}
else if($booking['aid']=="C"){
    $aidPrice=100.00;
    $total=$aidPrice*$booking['day'];
    $total=number_format($total, 2);
    $gst=$total/11;
    $gst=number_format($gst, 2); 
}



?>


<body>
    


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
        <img src='../media/i1.PNG' width=1100 height=500 alt='headpic' >
    </div>


<body>
    <div class="navbar">
        <ul>
            <li><a  href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/index.php">Home</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/rates.php">Rates</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/accommodation.php">Accommodation</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/contact.php">Contact</a></li>
        </ul>
    </div>

					<form id="checkout-form" action="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/receipt.php" method="POST">
  
  <h1>Booking Information</h1>

    
       <p>Accommodation Type:<?= $booking['aid'];?></p>
      
       <p>Arrival Date:<?= $booking['date'];?></p>
       
       <p>Number of Days:<?= $booking['day'];?></p>
       
       <p>Number of Adults:<?= $booking['adult'];?></p>
       
       <p>Number of Children:<?= $booking['children'];?></p>
       
       <p>Total Price:$<?= $total?></p>
       
       <p>Includes GST:$<?= $gst;?></p>
   <?php
   print_r($booking);
   
   
   ?>
  
  
  	<body>
	

				<div class="container">
			
					<div class="clear"></div>
					<div id="content">

						<form id="checkout-form" action="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/receipt.php" method="POST">
							<fieldset>
							   <h1>Customer Detail</h1>
					
							
									<thead>
									 <center>
										<tr>
											<th>Name</th>
											<td><input type="text" name="name" pattern="[a-zA-Z][a-zA-Z .,'-]*" required/></td>
											<th>Email</th>
														<td><input type="email" name="email" required/></td>
											<th>Phone</th>
												<td><input type="text" name="phone" pattern="^0[0-8]\d{8}$" required/></td>
										</tr>
									</thead>
									<tbody>
				
										</center>
									</tbody>
						</form>
							</fieldset>
							<br />



      
  <input name="Submit" type="submit" value=" Confirm " >


<?php
$fp = fopen('booking.txt','w+'); 
fwrite($fp,var_export($booking,true)); 
fclose($fp);


?>
<?php
if(isset($_POST['Submit'])){
    print_r($booking);
     $fp=fopen("bookings.txt",'w');
 foreach($_SESSION["booking"] as $key=>$value){
    fwrite($fp,$_SESSION["booking"]["aid"]);
     print_r($_SESSION["booking"]["aid"]);
    fwrite($fp,$_SESSION["booking"]["date"]);
    fwrite($fp,$_SESSION["booking"]["day"]);
    fwrite($fp,$_SESSION["booking"]["adult"]);
    fwrite($fp,$_SESSION["booking"]["children"]);
    fwrite($fp,$total);
    
    if (is_resource($fp)) {
    fclose($fp);
}
   // fclose($fp);
    
     }
    //header("Location: receipt.php");
}
?>




</form>





  <form name="form1" method="post" action="https://titan.csit.rmit.edu.au/~s3611072/wp/a3/accommodation.php">
      
  <input name="Submit1" type="submit" value=" Cancle ">

<?php
if(isset($_POST['Submit1'])){
        unset($_SESSION['booking']); 
        header("Location: accommodation.php");
}
?>

</form>

  
</div>
</div>

<?php
footer();

?>

