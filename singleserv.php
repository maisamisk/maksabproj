 <?php
 
require('admin/includes/connection.php');
include_once('include/header.php');

$query = "SELECT * FROM provider";
 $result = mysqli_query($conn , $query);
 if (!isset($_SESSION['crt'])) {
     $_SESSION['crt'] = array();

 }
 if (isset($_POST['addtocart'])) {
    
     array_push($_SESSION['crt'],$_GET['id']);}
?>
<style type="text/css">
	#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding: 12px;
  text-align: left;
  background-color: #99ff99;
  color: black;
}
	</style>
	<div class="container">

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Email</th>
    <th>Service</th>
    <th>Location</th>
    
    <th>Price Per Hour</th>
    <th>Book Now</th>
    
  </tr>
  <?php

  if(isset($_GET['id'])){
    $qq="SELECT * FROM subcat WHERE subcat_id ={$_GET['id']}";
    $rr= mysqli_query($conn,$qq);
    $sub=mysqli_fetch_assoc($rr);
          $query  = "SELECT * FROM provider WHERE subcat_id ={$_GET['id']}";
           $result = mysqli_query($conn , $query);
                                         
                                        
                                         while($prov = mysqli_fetch_assoc($result)){
                                             

         /* $result = mysqli_query($conn,$query);
          $prov  = mysqli_fetch_assoc($result);*/
  echo"<tr>";
    echo"<td>{$prov['prov_name']}</td>";
    echo"<td>{$prov['phone']}</td>";
    echo"<td>{$prov['email']}</td>";
    echo"<td>{$sub['subcat_name']}</td>";
    echo"<td>{$prov['location']}</td>";
    echo"<td>{$prov['price']}</td>";
     echo "<td><form action='cart.php?id={$prov['prov_id']}' method='post'>
                                            <input type='submit' name='addtocart' value='Add to Cart' class='btn essence-btn'>
                                                </td></form>";
  echo"</tr>";
 }
}
  ?>
</table>
</div>
<br><br><br><br><br><br><br>
<?php include_once('include/footer.php') ?>