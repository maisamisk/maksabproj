<?php

require('admin/includes/connection.php');
include_once('include/header.php');


?>

  
 <!-- Service Start -->
    <section id="types">
      <div class="container">
        <div class="row">
          <?php
          if(isset($_GET['id'])){
            $qqq="SELECT * FROM category WHERE cat_id ={$_GET['id']}";
            $rss=mysqli_query($conn,$qqq);
            $serv= mysqli_fetch_assoc($rss);
            echo"<div class='section-title'>
            <h2>{$serv['cat_name']}</h2>
            
          </div>";
          }
          ?>
          
        </div>
        <div class="row ">
          <?php 
            if(isset($_GET['id'])){
              $qrq= "SELECT * FROM subcat WHERE cat_id = {$_GET['id']}";
              $rsr= mysqli_query($conn,$qrq);
              while($out=mysqli_fetch_assoc($rsr)){
                echo"<div class='col-sm-4'>
            <div class='service-item'>";
              echo"<img src='admin/img/{$out['subcat_img']}' alt='Img' style='height: 300px ; width: 300px ; border-radius: 20px;'>";
              echo"<a href='singleserv.php?id={$out['subcat_id']}'><h2>{$out['subcat_name']}</h2></a>";
                        
            echo"</div>
          </div>";
              }
            }
          ?>
          
          
        </div>
     
      </div>
    </section>
<?php include_once('include/footer.php') ?>
