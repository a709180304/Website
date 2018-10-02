<?php
  function top_part($pageTitle) 
  {
    $output = <<<"TOPPART"
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Assignment 3</title>

  <!-- We will cover style later. Skip down to the body tag -->
  
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

<link rel="stylesheet" type="text/css" href="home.css" />

</head>
<body>
  
TOPPART;
    echo $output;
  }
  
  
function footer(){
  
  $sessionPrint=print_r($_SESSION,true);
  $postPrint=print_r($_POST,true);
  $output = <<< "FOOTERPART"
   <footer>
    <div>&copy;<script>
      document.write(new Date().getFullYear());
    </script>  Zhaofeng Guo s3568521   YANG JI s3611072 and A3 52 here.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div>Maintain links to your working <a href='../style-guide.php'>style guide</a>, your <a href='../products.txt'>products spreadsheet</a> and <a href='../orders.txt'>orders spreadsheet</a> here.</div>
  </footer>

</body>


<aside id='debug'>
  <details open>
    <summary>=Debug Show/Hide</summary>
    <pre>
      \$_SESSION contains:
      $sessionPrint
  
      \$_POST contains:
      $postPrint

    </pre>
  </details>
</aside> 
<?>


</html>
FOOTERPART;
  echo $output;
  
  
  
}
?>
<?php
footer();

?>


