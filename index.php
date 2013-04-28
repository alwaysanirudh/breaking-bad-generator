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
          <input type="text" name="name" placeholder="Type your name here..."/>
          <input class="btn" type="submit" name="Submit" value="Break Bad" />
        </form>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>How To Use</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus diam a lacus dignissim volutpat. Quisque a turpis vitae augue commodo facilisis accumsan eu purus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
          <a href="https://twitter.com/share" class="twitter-share-button" data-via="kevin_howbrook" data-size="large" data-hashtags="breakmebad">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          <div class="fb-like" data-href="http://localhost:8888/apps/breaking-bad-generator/index.php" data-send="true" data-width="300" data-show-faces="true"></div>
        </div>
        <div class="span4">
          <h2>About The Show</h2>
          <p>Breaking Bad follows protagonist Walter White, a chemistry teacher who lives in New Mexico with his wife and teenage son (RJ Mitte) who has cerebral palsy. White is diagnosed with Stage III cancer and given a prognosis of two years to live. With a new sense of fearlessness, and a desire to secure his family's financial security, White chooses to enter a dangerous world of drugs and crime, where he ascends to power. The series explores how a fatal diagnosis, such as White's, releases a typcial man from the daily concerns of normal society and follows his transformation from mild family man to kingpin of the drug trade.</p>
          <p><a class="btn" href="http://www.amctv.com/shows/breaking-bad/new-to-show" target="_blank">More about Breaking Bad &raquo;</a></p>
        </div>  
        <div class="span4">
          <script>


     
          </script>
        

          <div class="ad">
            <div class="ad-choices"><a href="http://www.youradchoices.com/" target="-blank"><img src="images/AdChoices.jpg"></a></div>
            <div class="ad-image"><img src="images/pollos.png"></div>
            <div class="ad-text">
              <h2>Los Pollos Hermanos</h2>
              <p class="ad-tag">Albuquerque's finest chicken</p>
              <p class="ad-address"> 4257 Isleta Blvd. SW, Albuquerque, NM</p>
              <a class="btn" href="http://maps.google.co.uk/maps?hl=en&espv=2&es_sm=91&q=4257+Isleta+Blvd.+SW,+Albuquerque,+NM&bav=on.2,or.&biw=1280&bih=623&um=1&ie=UTF-8&sa=X&ei=agx9UdelMYa50QXd3oHwAQ&ved=0CAgQ_AUoAg" target="_blank" >Order Online &raquo;</a>
            </div>
          </div><!--/ ad -->

          <div class="ad">
            <div class="ad-choices"><a href="http://www.youradchoices.com/" target="-blank"><img src="images/AdChoices.jpg"></a></div>
            <div class="ad-image-2"><img src="images/saul.jpg"></div>
            <div class="ad-text-2">
              <h2>Saul Goodman</h2>
              <p class="ad-tag">Attorney at law</p>
              <p class="ad-address"> 3884 Isleta Blvd. SW, Albuquerque, NM</p>
              <a class="btn" href="http://www.yellowpages.com/albuquerque-nm/attorneys" target="_blank" >Call Saul! &raquo;</a>
            </div>
          </div><!--/ ad -->


          <div class="ad">
            <div class="ad-choices"><a href="http://www.youradchoices.com/" target="-blank"><img src="images/AdChoices.jpg"></a></div>
            <div class="ad-image-3"><img src="images/tub.png"></div>
            <div class="ad-text">
              <h2>Polyethylene Tubs</h2>
              <p class="ad-tag">For all your disposal needs</p>
              <p class="ad-address">1100 San Mateo Blvd NE Albuquerque, NM 87110</p>
              <a class="btn" href="http://www.acehardware.com/mystore/index.jsp;jsessionid=CQBHR9LXRGJSd21RkH7X1QLpyVKPn0bRfLDT5Ty8GmnG2hPhGrqz!114054844?store=14867" target="_blank" >Buy Online &raquo;</a>
            </div>
          </div><!--/ ad -->


          <div class="ad">
            <div class="ad-choices"><a href="http://www.youradchoices.com/" target="-blank"><img src="images/AdChoices.jpg"></a></div>
            <div class="ad-image-2"><img src="images/savewalter.png"></div>
            <div class="ad-text-2">
              <p class="ad-tag">www.savewalterwhite.com</p>
              <p class="ad-address">What a wonderful dad I have, But he is in trouble. It's Lung Cancer. He needs an operation. Now!</p>
              <a class="btn" href="http://www.savewalterwhite.com/" target="_blank" >Donate Now &raquo;</a>
            </div>
          </div><!--/ ad -->

        <a class="twitter-timeline" href="https://twitter.com/BreakingBad_AMC" data-widget-id="328549486173503488">Tweets by @BreakingBad_AMC</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        </div>

      </div><!-- /row -->

      
  </div> <!-- /container -->

<!-- footer scripts -->
<?php require_once 'footer.php'; ?>
