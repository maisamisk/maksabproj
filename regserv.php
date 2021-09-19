<?php
ob_start();
require('admin/includes/connection.php');

if(isset($_POST['submit'])){
   $fname =  $_POST['first_name'];
   $email    =  $_POST['email'];
   $phone    =  $_POST['phone'];
   $location =  $_POST['loc'];
   $price =  $_POST['prc'];
   $cat   =  $_POST['job'];
   $ss    =$_POST['sub'];
   
$qur = "INSERT INTO provider (prov_name,email,phone,location,price,cat_id,subcat_id)
         values('$fname','$email','$phone','$location','$price','$cat','$ss')";
         mysqli_query($conn,$qur);

         header("Location: regserv.php");
}

 




  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maksab</title>
</head>
<style type="text/css">
	/* @extend display-flex; */
display-flex, .signup-content, .form-row, .label-flex, .form-radio-group {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli, ul {
  list-style-type: none;
  margin: 0;
  padding: 0; }


a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }



img {
  max-width: 100%;
  height: auto; }

figure {
  margin: 0; }

p {
  margin: 0px;
  font-weight: 600;
  color: #fff; }

h2 {
  line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: 900;
  color: #fff;
  font-family: 'Poppins';
  font-size: 26px;
  text-transform: uppercase;
  margin-bottom: 10px; }

.clear {
  clear: both; }

body {
  font-size: 14px;
  line-height: 1.8;
  color: #222;
  font-weight: 500;
  font-family: 'Poppins';
  margin: 0px;
  background: #282828;
  padding: 50px 0; }

.main {
  position: relative; }

.container {
  width: 1400px;
  margin: 0 auto;
  background: #fff; }

.signup-img {
  position: relative;
  width: 385px;
  margin-bottom: -8px; }

.signup-form {
  width: 1015px;
  margin-top: -2px; }

.signup-img-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  width: 100%; }

.register-form {
  padding: 93px 115px 90px 80px;
  margin-bottom: -8px; }

.form-row {
  margin: 0 -30px; }
  .form-row .form-group {
    width: 50%;
    padding: 0 30px; }

.form-input, .form-select, .form-radio {
  margin-bottom: 23px; }

label, input, select {
  display: block;
  width: 100%; }

label {
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 7px; }

label.required {
  position: relative; }
  label.required:after {
    content: '*';
    margin-left: 2px;
    color: #b90000; }

input ,select {
  box-sizing: border-box;
  border: 1px solid #ebebeb;
  padding: 14px 20px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  font-size: 14px;
  font-family: 'Poppins'; }
  input:focus {
    border: 1px solid #329e5e; }

.label-flex{
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between; }
  .label-flex label {
    width: auto; }

.form-link {
  font-size: 12px;
  color: #222;
  text-decoration: none;
  position: relative; }
  .form-link:after {
    position: absolute;
    content: "";
    width: 100%;
    height: 2px;
    background: #d7d7d7;
    left: 0;
    bottom: 12px; }







.form-submit {
  text-align: right; }

.submit {
  width: 150px;
  height: 50px;
  display: inline-block;
  font-family: 'Poppins';
  font-weight: bold;
  font-size: 14px;
  padding: 10px;
  border: none;
  cursor: pointer;
  text-transform: uppercase;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px; }

#reset {
  background: #fff;
  color: #999;
  border: 2px solid #ebebeb; }
  #reset:hover {
    border: 2px solid #329e5e;
    background: #329e5e;
    color: #fff; }

#submit {
  background: #655E7A;
  color: #fff;
  margin-right: 25px; }
  #submit:hover {
    background-color: #329e5e; }

.form-input {
  position: relative; }

label.error {
  display: block;
  position: absolute;
  top: 0px;
  right: 0; }
  label.error:after {
    font-family: 'Material-Design-Iconic-Font';
    position: absolute;
    content: '\f1f8';
    right: 20px;
    top: 37px;
    font-size: 23px;
    color: #c70000; }

input.error {
  border: 1px solid #c70000; }


.list-item {
  position: absolute;
  width: 100%;
  z-index: 99; }



  #submit {
    margin-bottom: 20px;
    margin-right: 0px; }
optgroup{
  font-weight: 50px;
  font-size: 15px;
}

</style>
<body>
    <header style="background-color: white;">

          <nav >
            <a class="navbar-brand" href="index.php">
                  <img src="logo.jpg" alt="Logo" style="width: 250px;" >
                </a>
 
            </nav>
         
    </header>
 
    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="img/form-img.jpg" alt="" style="border-top-right-radius: 2%">
                    <div class="signup-img-content">
                        <h2>Service Provider </h2>
                        <p>Enter your data !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Full Name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                     <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                               
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone" id="phone" />
                                </div>
                                <!--<div class="form-input">
                                    <label for="job" class="required">Job</label>
   
                                    <select type="text" name="job" id="job">
    <?php
    if (isset($_GET['id'])) {


  $query = " SELECT * from provider where prov_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$prov = mysqli_fetch_assoc($result);
}

                                                    $q= "SELECT * from category where cat_id = {$prov['cat_id']}";
                                                    $rs = mysqli_query($conn,$q);
                                                    $r= mysqli_fetch_assoc($rs);
                                                    echo "<option>";
                                                    echo $r['cat_name'];
                                                    echo "</option>";
                                                    $query2 = "SELECT *from category";
                                                    $result2 = mysqli_query($conn,$query2);
                                                    while ($pr = mysqli_fetch_assoc($result2)) {
                                                    if ($prov['cat_name']!=$r['cat_name']) {
                                                        echo "<option>".$prov['cat_name']."</option>";
                                                    }
                                                    
                                                    
                                                     echo"<option value='$pr[cat_id]'>$pr[cat_name]</option>";
                                                    
                                                 }
                                                 ?>
                                               </select>
                                             </div>-->

                                             <!--<div class="form-input">
                                    <label for="job" class="required">sub</label>
   
                                    <select type="text" name="sub" id="job">
    <?php
      if (isset($_GET['id'])) {


  $query = " SELECT * from provider where prov_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$prov = mysqli_fetch_assoc($result);
}
 
                                                    $qu= "SELECT * from subcat where subcat_id = {$prov['subcat_id']}";
                                                    $rss = mysqli_query($conn,$qu);
                                                    $rrr= mysqli_fetch_assoc($rss);
                                                    echo "<option>";
                                                    echo $rrr['subcat_name'];
                                                    echo "</option>";
                                                    $query3 = "SELECT *from subcat";
                                                    $result3 = mysqli_query($conn,$query3);
                                                    while ($prr = mysqli_fetch_assoc($result3)) {
                                                    if ($prov['subcat_name']!=$rrr['subcat_name']) {
                                                        echo "<option>".$prov['subcat_name']."</option>";
                                                    }
                                                    
                                                    
                                                     echo"<option value='$prr[subcat_id]'>$prr[subcat_name]</option>";
                                                    
                                                 }
                                               
                                                 ?>
                                               </select>
                                             </div>-->

                                             <div class="form-input">
                                    <label for="job" class="required">Service</label>
   
                                    <select type="text" name="sub" id="job">
    <?php

      if (isset($_GET['id'])) {


  $query = " SELECT * from provider where prov_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$prov = mysqli_fetch_assoc($result);
}
                                                
                                               
                                                    $qu= "SELECT * from subcat where cat_id = 1  ";
                                                    $rss = mysqli_query($conn,$qu);
                                                    
                                                     
                                                    while($rrr= mysqli_fetch_assoc($rss)){
                                                    echo"<optgroup class:'obt' label='Education'>";
                                                    echo "<option value='$rrr[subcat_id]'>";
                                                    echo $rrr['subcat_name'];
                                                    echo "</option>";
                                                    echo"</optgroup";}
                                                    $query3 = "SELECT *from subcat";
                                                    $result3 = mysqli_query($conn,$query3);
                                                   $prr = mysqli_fetch_assoc($result3);
                                                    if ($prov['subcat_name']!=$rrr['subcat_name']) {

                                                     
                                                        echo "<option>".$prov['subcat_name']."</option>";
                                                        
                                                    }

                                                    $qu= "SELECT * from subcat where cat_id = 2  ";
                                                    $rss = mysqli_query($conn,$qu);
                                                    
                                                     
                                                    while($rrr= mysqli_fetch_assoc($rss)){
                                                    echo"<optgroup label='Medicine'>";
                                                    echo "<option value='$rrr[subcat_id]'>";
                                                    echo $rrr['subcat_name'];
                                                    echo "</option>";
                                                    echo"</optgroup";}
                                                    $query3 = "SELECT *from subcat";
                                                    $result3 = mysqli_query($conn,$query3);
                                                   $prr = mysqli_fetch_assoc($result3);
                                                    if ($prov['subcat_name']!=$rrr['subcat_name']) {

                                                     
                                                        echo "<option>".$prov['subcat_name']."</option>";
                                                        
                                                    }
                                                    
                                                    $qu= "SELECT * from subcat where cat_id = 3  ";
                                                    $rss = mysqli_query($conn,$qu);
                                                    
                                                     
                                                    while($rrr= mysqli_fetch_assoc($rss)){
                                                    echo"<optgroup label='Cosmetic'>";
                                                    echo "<option value='$rrr[subcat_id]'>";
                                                    echo $rrr['subcat_name'];
                                                    echo "</option>";
                                                    echo"</optgroup";}
                                                    $query3 = "SELECT *from subcat";
                                                    $result3 = mysqli_query($conn,$query3);
                                                   $prr = mysqli_fetch_assoc($result3);
                                                    if ($prov['subcat_name']!=$rrr['subcat_name']) {

                                                     
                                                        echo "<option>".$prov['subcat_name']."</option>";
                                                        
                                                    }
                                                     
                                                     
                                                    $qu= "SELECT * from subcat where cat_id = 4  ";
                                                    $rss = mysqli_query($conn,$qu);
                                                    
                                                     
                                                    while($rrr= mysqli_fetch_assoc($rss)){
                                                    echo"<optgroup label='Crafts'>";
                                                    echo "<option value='$rrr[subcat_id]'>";
                                                    echo $rrr['subcat_name'];
                                                    echo "</option>";
                                                    echo"</optgroup";}
                                                    $query3 = "SELECT *from subcat";
                                                    $result3 = mysqli_query($conn,$query3);
                                                   $prr = mysqli_fetch_assoc($result3);
                                                    if ($prov['subcat_name']!=$rrr['subcat_name']) {

                                                     
                                                        echo "<option>".$prov['subcat_name']."</option>";
                                                        
                                                    }


                                                    $qu= "SELECT * from subcat where cat_id = 5  ";
                                                    $rss = mysqli_query($conn,$qu);
                                                    
                                                     
                                                    while($rrr= mysqli_fetch_assoc($rss)){
                                                    echo"<optgroup label='Home Service'>";
                                                    echo "<option value='$rrr[subcat_id]'>";
                                                    echo $rrr['subcat_name'];
                                                    echo "</option>";
                                                    echo"</optgroup";}
                                                    $query3 = "SELECT *from subcat";
                                                    $result3 = mysqli_query($conn,$query3);
                                                   $prr = mysqli_fetch_assoc($result3);
                                                    if ($prov['subcat_name']!=$rrr['subcat_name']) {

                                                     
                                                        echo "<option>".$prov['subcat_name']."</option>";
                                                        
                                                    }
                                                    
                                                 
                                               
                                                 ?>
                                               </select>
                                             </div>
    

<!--<div class="form-input">
                                    <label for="job" class="required">service</label>
                                  <select type="text" name="sub" id="job">
    
      <?php
      $q="SELECT * FROM subcat ";
      $r=mysqli_query($conn,$q);
      while($s=mysqli_fetch_assoc($r)){
        
 echo"<option value=''><a href='regserv.php?id={$s['subcat_id']}></a>{$s['subcat_name']}</option>";
      }
    
      ?>
      
    
    
  </select>
                                </div>-->
                                
  
                            <div class="form-input">
                                    <label for="loc" class="required">Location</label>
                                    <input type="text" name="loc" id="loc" />
                                </div>
                                 <div class="form-input">
                                    <label for="hour" class="required">Price per hour</label>
                                    <input type="number" name="prc" id="prc" />
                                </div>
                                
                            </div>
                           
                        </div>
                       <?php
                        echo"<div class='form-submit'>
                            <input type='submit' value='Submit' class='submit' id='submit' name='submit' />
                            <input type='submit' value='Reset' class='submit' id='reset' name='reset' />
                        </div>";?>
                    </form>
                </div>
            </div>
        </div>

    </div>
   
</body>
</html>

