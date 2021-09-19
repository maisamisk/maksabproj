 <?php
//require('admin/includes/connection.php');
include_once('include/header.php');

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #655E7A;
  border-radius: 10%;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #4CAF50;
}

/* Style the container/contact section */
#con {
  border-radius: 5px;
  background-color: #ffff;
  padding: 0;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.column img{
  height: 400px;
  border-radius: 10%;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container" id="con">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  
  </div>
  <div class="row">
    
    <div class="column">
      <form >
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fname" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
       <input type="submit" value="Submit">
      </form>
    </div>
    <div class="column">
      <img src="img/images1.png" style="width:500px">
    </div>
  </div>
</div>

</body>
</html>
<?php include_once('include/footer.php') ?>