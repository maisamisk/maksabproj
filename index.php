 <?php
require('admin/includes/connection.php');
include_once('include/header.php');
$path = "../admin/img";
$query = "SELECT * FROM category";
$rss = mysqli_query($conn,$query);

?>
<style type="text/css">
  #sl{
    background: url('ss.jpg') no-repeat;
    background-size: cover;
     background-attachment: fixed;
  background-position: 10% 0%;
  padding: 200px 0 280px 0;
  position: relative;


  }
  #sl:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
 
}
#sl .block h1 {
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  font-size: 70px;
  line-height: 60px;
  letter-spacing: 10px;
  padding-bottom: 45px;
}
#sl .block p {
  font-size: 23px;
  line-height: 40px;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  letter-spacing: 3px;
}
</style>
<!-- Slider Start -->
    <section id="sl" >
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-2">
            <div class="block">
              <h1 class="animated fadeInUp" style="font-weight: 500; font-size: 70px;">Maksab Site</h1>
              <p class="animated fadeInUp"style="font-weight: 300; font-size: 30px;">A leading site in providing services to customers and finding a job for professionals and traders with more speed and ease of use.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Wrapper Start -->
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h2>Mission</h2>
                <p>We aspire to be one of the effective sites in attracting manpower and providing services at the lowest cost and fastest time and reducing unemployment rates.</p>
              </div>
              <div class="section-title">
                <h2>Vision</h2>
                <p>We strive for continuous and ambitious work to maintain our position at the national level and provide the best services to clients, and job opportunities for the workforce.</p>
              </div>
             
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="img/wrapper-img.gif" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>

  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-6">
          <h2>About Us</h2>
          <p>We are a Maksab site for your convenience.</p>
          <p> We have provided you with services at the lowest costs and job opportunities for all the workforce.</p>
          
          <a href="#service" class="btn btn-view-works">View Services</a>
        </div>
      </div>
    </div>
  </section>
 <!-- Service Start -->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Our Services</h2>
            
          </div>
        </div>

        <div class="row ">
          <?php
           $qrr="SELECT * FROM category";
           $res= mysqli_query($conn,$qrr);
           while($cat= mysqli_fetch_assoc($res)){
            echo " <div class='col-sm-6 col-md-4'>";
            echo"<div class='service-item'>";
            echo"<img src='admin/img/{$cat['cat_img']}' alt='Img' style='height: 200px ; width: 200px ; border-radius: 20px;'>";
            echo"<a href='service.php?id={$cat['cat_id']}'><h4>{$cat['cat_name']}</h4></a>";
            echo"  </div></div>";
           }
          ?>
            
              
              
          
          
         
         
         
        </div>
      </div>
    </section>
    <!-- Call to action Start -->
    <!--<section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="block">
              <h2>We design delightful digital experiences.</h2>
              <p>Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design.</p>
              <a class="btn btn-default btn-call-to-action" href="#" >Tell Us Your Story</a>
            </div>
          </div>
        </div>
      </div>
    </section>-->

<?php include_once('include/footer.php') ?>
