<?php
include_once 'header.php';
?>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

    
    <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p>
        EV SushiRestaurant is conveniently located next to quiet plazza full of plants and trees, 
        a few steps away from the central square in Nea Smyrni. It is a bright, 
        open, stylish and welcoming space with a kitchen that stretches from the entrance 
        to the first stairs that lead to the upper level. 
        In other words, a Japanese feast. Selected traditional dishes from the Japanese cuisine.

 You will find Sushi and some bestseller dishes of Japanese origin. 
 The dedication to the authenticity of the menu is one of 
the characteristics that make EV SushiRestaurant stand out.
    </p>
    </div>
</div>

  <!-- Reservation and Sign up Section -->
   <div class="w3-container w3-padding-32" id="reservation">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Reservation</h3>
     
     <?php
                            if(isset($_SESSION['u_id'])) {
                                echo '<p>Fill out the details of your reservation.</p>

                                <form class="signup-form" action="includes/reservation.inc.php" method="POST">
                                <input class="w3-input w3-border" type ="text" name="name" placeholder="Name of Reservation">
                                <input class="w3-input w3-section w3-border" type ="text" name="pax" placeholder="Number of People">
                                <input class="w3-input w3-section w3-border" type ="date" name="Date" placeholder="Day of Reservation">
                                <button class="w3-button w3-black w3-section" type="submit" name="submit"><i class="fa fa-paper-plane"></i>Reserve</button> OR <a href="viewres.php" class="w3-button w3-black w3-section" name="submit">View Reservation </a>
                                 </form>
                                 <form class="signup-form" action="includes/logout.inc.php" method="POST">
                                <button class="w3-button w3-black w3-section" type="submit" name="submit"><i class="fa fa-paper-plane"></i>Logout</button>
                                </form>'

                                ;

                            } else {
                                echo '<p>In order to make a reservation kindly log in.</p>
                                <form action = "includes/login.inc.php" method ="POST">
                                    <input class="w3-input w3-border" type="text" name="uid" placeholder="Username/e-mail">
                                    <input class="w3-input w3-section w3-border" type="password" name="pwd" placeholder="Password">
                                    <button class="w3-button w3-black w3-section" type="submit" name="submit"><i class="fa fa-paper-plane"></i>Login</button> OR <a href="signup.php" class="w3-button w3-black w3-section">Sign Up</a>
                                        </form>';
                            }

                        ?>     
   </div>

             
  <!-- Menu Section -->
  <div class="w3-container w3-padding-32" id="menu">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Menu</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Sake Hoso-Maki</div>
        <img src="images/sake_hoso_maki.jpg" alt="Sake Hoso Maki" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Kappa Hoso-Maki</div>
        <img src="images/kappa_hoso_maki.jpg" alt="Kappa Hoso-Maki" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Maguro Uramaki</div>
        <img src="images/maguro_uramaki.jpg" alt="Maguro Uramaki" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ebi Nigiri</div>
        <img src="images/ebi nigiri.jpg" alt="Ebi Nigiri" style="width:100%">
      </div>
    </div>
  </div>
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Unagi Nigiri</div>
        <img src="images/unagi_nigiri.jpg" alt="Unagi Nigiri" style="width:99%">
      </div>
    </div>
   </div>
  
<!-- End page content -->
</div>

<!-- Google Map -->
<div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div>

            
        
        <?php
include_once 'footer.php';
?>
