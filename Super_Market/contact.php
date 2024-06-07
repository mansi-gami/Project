<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header6.php";
include "connection.php";
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
            <div class="row">
                <div class="col-lg-6">
                    <br/>
                    <div class="left-image" style="margin-left: 100px;">
                         <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 500; height:900" allowfullscreen></iframe>

                    </div><br/>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <center><h4>Contact Details</h4></center>
                       <center> <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> Gb road 123 london Uk </span>
              </a><br/>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+01 12345678901</span>
              </a><br/>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> demo@gmail.com</span>
              </a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php
include"footer.php";
?>