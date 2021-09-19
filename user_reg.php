<?php
ob_start();
require('admin/includes/connection.php');
if(isset($_POST['submit'])){
   $fname =  $_POST['name'];
   $email    =  $_POST['email'];
   $phone    =  $_POST['phone'];
   $cardnum =  $_POST['num'];
   $pass =  $_POST['password'];
$qur = "INSERT INTO customer (name,email,phone,pass,card_num)
         values('$fname','$email','$phone','$pass','$cardnum')";
         mysqli_query($conn,$qur);
         header("Location: user_login.php");
}




  ?>
<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Register Page </title>  
<style>
  
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button,.btn {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #655E7A ;
  width: 100%;
  border: 0;
  padding: 15px;
  color:#FAFAFA ;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #042068 ;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #042068 ;
}
.container .info span {
  color: #042068 ;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #042068 ;
}
body {
  /* fallback for old browsers */
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}</style>
</head>    
<body> <br><br>
    <div class="container">
    <div class="logo">
          <img src="logo.jpg" width="250px" style="margin-left: 40px;">
       </div>
       <center> 
   <div class="login-page">
    <h3 style="color:#042068 ">welcome to our website!</h3>
  <div class="form">
   <!-- <form class="register-form">
      <input type="text" placeholder="name" name="email" />
      <input type="password" placeholder="password" name="password" />
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>-->
    <form class="login-form" method="post" >
      <input type="text" placeholder="Full Name" name="name" />
      <input type="text" placeholder="Email" name="email" />
      <input type="text" placeholder="Phone Number" name="phone" />
      <input type="number" placeholder="Credit card number" name="num" />
      <input type="password" placeholder="password" name="password" />
      <?php
      echo"<button name='submit'>Register</button>";
      ?>
     
    </form></center> 
   
  </div>
</div>  
</body>     
</html>  