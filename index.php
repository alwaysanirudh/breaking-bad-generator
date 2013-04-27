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
          <h2><i class="icon-twitter share"></i><i class="icon-facebook share"></i></h2>

          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div><!-- /row -->
      <hr>
    <footer>
      <p>&copy; Company 2013</p>
    </footer>
  </div> <!-- /container -->

<!-- footer scripts -->
<?php require_once 'footer.php'; ?>
