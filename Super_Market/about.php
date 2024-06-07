<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"super_market");
?>
<?php
include "header5.php";
include "connection.php";
?>
<div class="hero_area">
    <section class="slider_section">
      <div class="slider_container" style="color: black;">
            <div class="row">
                <div class="col-lg-6">
                    <br/>
                    <div class="left-image" style="margin-left: 80px;">
                        <img src="images/about.jpg" height="400" width="500">
                    </div><br/>
                </div>
                <div class="col-lg-6">
                    <div class="right-content" style="margin-right: 80px;">
                        <h3>About Us &amp; Our Skills</h3>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                        </div>
                        <p>Supermarket, large retail store operated on a self-service basis, selling groceries, fresh produce, food items and dairy products, and sometimes an assortment of nonfood goods. Supermarkets gained acceptance in the United States during the 1930s</p>
                       
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