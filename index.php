<?php
session_start();
require_once('header.php');
?>
<!-- page style -->
<style type="text/css">
.sound-control{
  display:none;
}
</style>
 <div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <form action="print.php" method="post">
          <input type="text" name="name"/>
          <input class="btn" type="submit" name="Submit" value="Submit!" />
        </form>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>How To Use</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Magic Words</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <div class="ad">
            <div class="ad-image">
              <img src="images/pollos.png">
            </div>
            <div class="ad-text">
              <div class="ad-choices"><img src="images/AdChoices.jpg"></div>
              <h2>Los Pollos Hermanos</h2>
              <p class="ad-tag">Albuquerque's finest chicken shops</p>
              <p class="ad-address"> 4257 Isleta Blvd. SW, Albuquerque, NM</p>
              <a class="btn" href="http://breakingbad.wikia.com/wiki/Los_Pollos_Hermanos" target="_blank" >Order Online</a>
            </div>
          </div>
        </div>
      </div><!-- /row -->

      
      </div><!-- / row -->
      <hr>
    
  </div> <!-- /container -->

<!-- footer scripts -->
<?php require_once 'footer.php'; ?>
