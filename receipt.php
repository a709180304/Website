<?php
session_start();
include_once("tools.php");
top_part('booking');

$booking=array(
'aid'=>$_POST['aid'],
'date'=>$_POST['date'],
'day'=>$_POST['days'],
'adult'=>$_POST['adults'],
'children'=>$_POST['children'],
'name' =>$_POST["name"],
'email'=>$_POST["email"],
'phone'=>$_POST["phone"]
);


?>

<body>
    
     <div class="img">
        <img src='../media/i1.PNG' width=1100 height=500 alt='headpic' >
    </div>


<body>
    <div class="navbar">
        <ul>
            <li><a  href="https://titan.csit.rmit.edu.au/~s3568521/wp/a2/index.html">Home</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3568521/wp/a2/rates.html">Rates</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3568521/wp/a2/accommodation.html">Accommodation</a></li>
            <li><a href="https://titan.csit.rmit.edu.au/~s3568521/wp/a2/contact.html">Contact</a></li>
        </ul>
    </div>
    
    <h1>Booking Information</h1>

    
       <p>Accommodation Type:<?= $booking['aid'];?></p>
      
       <p>Arrival Date:<?= $booking['date'];?></p>
       
       <p>Number of Days:<?= $booking['day'];?></p>
       
       <p>Number of Adults:<?= $booking['adult'];?></p>
       
       <p>Number of Children:<?= $booking['children'];?></p>
       
       <p>Total Price:$<?= $total?></p>
       
       <p>Includes GST:$<?= $gst;?></p><br>
       
        <h1>Booking Information</h1>
        
        <p>Name :<?= $booking["name"];?></p>
      
   
             <p>Email: <?= $booking['email'];?></p>
       <p>Phone: <?= $booking['phone'];?></p>

       
   <?php
   print_r($booking);
   
   
   ?>
</body>
<?php
footer();

?>
