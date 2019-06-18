<?php
include_once 'header.php';
?>

 <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Sign Up</h3>
    <p>Fill out your details to sign up.</p>

      <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <input class="w3-input w3-border" type ="text" name="first" placeholder="Firstname">
          <input class="w3-input w3-section w3-border" type ="text" name="last" placeholder="Lastname">
          <input class="w3-input w3-section w3-border" type ="text" name="email" placeholder="E-mail">
          <input class="w3-input w3-section w3-border" type ="text" name="uid" placeholder="Username">
          <input class="w3-input w3-section w3-border" type ="password" name="pwd" placeholder="Password">
          <button class="w3-button w3-black w3-section" type="submit" name="submit"><i class="fa fa-paper-plane"></i>Sign up</button>
      </form>
 </div>

<?php
include_once 'footer.php';
?>

