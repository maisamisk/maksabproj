<?php
session_start();
ob_start();
require_once('admin/includes/connection.php');



 if (!isset($_SESSION['crt'])) {
     $_SESSION['crt'] = array();

 }
 if (!isset($_SESSION['logg'])) {
  header("location: user_login.php");
  $user = "";
}
else {
  $user = $_SESSION['logg'];
 $query= "SELECT * FROM customer ";
$result = mysqli_query($conn,$query);
   
    while($cus = mysqli_fetch_assoc($result)){
      $user = $cus['cus_id'];
    }

}
 if (isset($_POST['addtocart'])) {
    
     array_push($_SESSION['crt'],$_GET['id']);
     
 }
 if (isset($_POST['removecart'])) {
     $id=$_POST['removecart'];
     unset($_SESSION['crt'][$id]);
     
 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> cart</title>
<link rel="stylesheet" href="style.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>


    <script src="js/main.js"></script>


  </head>
  <style type="text/css">

<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<style type="text/css">

.cart-page{
  margin: 80px auto; 
}
.account-wrap a{
  text-decoration: none;
  color: #000;
  padding-left: 500px;
}
#Menuitems {
  background-color: #f9f9ff;
  height: 100px;
}
#Menuitems li{
 display: inline-block;
 padding: 40px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}
#Menuitems li:hover {
  background-color: #f41068;
}
#Menuitems a{
  text-transform: uppercase;
  font-weight: 600;
  color: #000;
  padding: 20px;
  text-decoration: none;
}
.nav a {
  text-transform: uppercase;
  font-weight: 600;

  color: #000;
  padding: 30px;
}
.nav a:hover {
  color: #f41068;
}
table{
  width: 100%;
  border-collapse: collapse;
}
.cart-info{
  display: flex;
  flex-wrap: wrap;

}
th{
  text-align: left;
  padding: 5px;
  color: #fff;
  background:#0D1E9C ;
  font-weight: normal;
}
td{
  padding: 20px 10px;
}
td input{
  width: 40px;
  height: 30px;
  padding: 5px;
}
td a{
  color:#0D1E9C;
  font-size: 12px;
}
td img{
  margin-right: 30px;
}
.total-price{
  display: flex;
  justify-content: flex-end;
}
.total-price table{
  border-top: 3px solid #0D1E9C;
  width: 100%;
  max-width: 350px;

}

td:last-child{
  text-align: center;
}
th:last-child{
  text-align: center;
}
.btn{
  background-color: #00b300;
  color:black;
}













  </style>
</head>
<body>
<div class="header">

  <div class="conatiner">
    <div class="navbar">
       <div class="logo">
          <img src="img/logo.jpg" width="125px">
       </div>
       <div class="header-button">
                        
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> <?php
          if($user!=""){
            $query = "SELECT * FROM customer WHERE cus_id = {$_SESSION['logg']}";
                  $result = mysqli_query($conn,$query);
                while($cus = mysqli_fetch_assoc($result)){

                   echo 'Welcome '.$cus['name'] . '!';}
                  echo " </h5>";}
          ?></a>
                                      
                                                
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
       <nav>
            <ul id="Menuitems"> 
              <li><a href="index.php"> Home </a></li>
              
             
              
              <li><a href="cart.php"> Account </a></li>
              <li><a href="user_logout.php"> LogOut </a></li>
         
   <li><a href="#"><i style="font-size: 20px;" class="fa fa-shopping-cart" aria-hidden="true">

                  <?php

                  if(isset($_SESSION['crt'])){
                    $pro_count=count($_SESSION['crt']);
                    echo "<small>$pro_count</small>" ."&nbsp&nbsp". "Service Booked"; 
                  }
                  else
                  {
                    echo "<small>0</small>" ."&nbsp&nbsp". "Service Booked";
                  }
                  ?>
                </i></a></li>
   </ul>

       </nav>
    </div>
 </div>
</div>
 

       
<!-- cart detalis--->

 <div class='small-contanier cart-page'>
   <?php
                               echo "<table>";
     echo "<tr>";
        echo "<th>Service</th>";
        echo "<th>Total</th>";
    echo  "</tr>";
   
                      if (isset($_SESSION['crt'])) {
                        $total = 0;
                        foreach ($_SESSION['crt'] as $key => $value) {
                            $query1 = "SELECT * FROM provider WHERE prov_id = $value";
                            
                            $result1 = mysqli_query($conn , $query1);
                            
                            $m = mysqli_fetch_assoc($result1);
                            
                            $total = $total +$m['price'];
                            $tot_tax= $total + 10 ;


     echo "<tr>";
     $quer2="SELECT subcat_img,subcat_name FROM subcat INNER JOIN provider ON subcat.subcat_id = {$m['subcat_id']}";
     $result2 = mysqli_query($conn , $quer2);
     $s = mysqli_fetch_assoc($result2);
       echo "<td>";
         echo "<div class='cart-info'>";
           echo "<img src='admin/img/{$s['subcat_img']}' width= '250 px' height= '250 px' >";
           //{$m['product_price']}
           echo "<div>";
           
           echo "<p>Service: &nbsp &nbsp{$s['subcat_name']}</p>";
           //{$m['product_price']}
           
            echo" <p>Provider: &nbsp &nbsp{$m['prov_name']}</p>";
             echo "<small>price: &nbsp &nbsp{$m['price']}</small>";
             echo "<br>";
             echo "<form method= 'post'>";
             echo "<button type='submit' name='removecart' value='$key' class='product-remove' <a href= 'cart.php?{$m['prov_id']}'>remove</a></button>";
             echo "</form>";
           echo "</div>";
         echo "</div>";
       echo "</td>";
       echo "<td>{$m['price']}</td>";
     echo "</tr>";}}
     
     //echo "<tr>";

   echo "</table>";
   echo "</div>";

echo "<div class='total-price'>
  <table>
    <tr>
      <td>Total price</td>
      <td>$total</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>10 JD</td>
    </tr>
    <tr>
      <td>Total</td>
      <td>$tot_tax</td>
    </tr>
  </table>
</div>";


?>



 </div>
<?php
$query = "SELECT * FROM customer";
                 $result = mysqli_query($conn ,$query);
                 $cus = mysqli_fetch_assoc($result);

                  echo "<center>     <h4><a href='order.php?id={$cus['cus_id']}' class='btn'> check the order</a>
                    </center>";
                 
                  ?>





<!-- single product detalis--->
<!-----footer----->
<br><br><br>
<br><br><br>
<br><br><br><br><br><br>
<a href="index.php" class="btn">Back</a>

<?php include_once('include/footer.php') ?>
</body>
</html>