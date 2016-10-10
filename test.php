
<?php

if ($_post["submit"]) {
  
  $result="Form submitted";
  
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Joe Pedersen | My small business web developer portfolio and other personal about me.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
  <!-- Bootstrap css-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Customized css-->
  <link rel="stylesheet" href="../css/style.css">
  <!--Google font library-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="icon" href="../images/favicon.png">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <![endif]-->
    
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Joe Pedersen | My portfolio and other information about me." />
  <meta property="og:description" content="Joe Pedersen's portfolio of projects and other current information." />
  <meta property="og:url" content="http://www.joepedersen.com" />
  <meta property="og:site_name" content="Joe Pedersen" />

<!--         _____
            |     \
            |  ()  )
            |   __/
       __   |  |    
      (  \__|  |
       \______/   Joe Pedersen Web Development.  Copyright 2016.
-->

</head>

<body>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
        <?php echo $result; ?>

  <div class="row">
    <div class="col-sm-5 img-responsive">
      <p>Contact us and we'll get back to you within 2 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Minneapolis, MN</p>
      <p><span class="glyphicon glyphicon-phone"></span> (612) 584-1644</p>
      <p><span class="glyphicon glyphicon-envelope"></span> joe@joepedersen.com</p>
      <div class="social center-block" id="margin">
        <a href="mailto:joe@joepedersen.com" target="blank"><img src="images/Email-Icon.png" alt="email icon"></a>
        <a href="https://www.linkedin.com/in/joepedersen" target="blank"><img src="images/Linkedin-Icon.png" alt="linkedin icon"></a>
        <a href="https://twitter.com/jpeder01" target="blank"><img src="images/Twitter-Icon.png" alt="twitter icon"></a>
        <a href="https://www.facebook.com/joe.pedersen.56?" target="blank"><img src="images/Facebook-Icon.png" alt="facebook icon"></a>
        <a href="https://www.youtube.com/user/jpeder09" target="blank"><img src="images/Youtube-Icon.png" alt="youtube icon"></a>
      </div>
    </div>
    <div class="col-sm-7">
    <form method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input name="submit" class="btn btn-default pull-right" type="submit" value="Send">
        </div>
      </div>
    </form>  
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(45.182188, -93.876118);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:9,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Website design & development by Joe Pedersen &copy 2016 | <a href="http://www.joepedersen.com" title="Visit w3schools"> 
  www.joepedersen.com</a></p>
</footer>

<!-- jQuery (Bootstrap JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<!-- Container end div -->
</div>

</body>

</html>






    <div class="col-sm-7 slideanim">
    <form method="post">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comment" name="comment" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <input name="submit" class="btn btn-default pull-right" type="submit" value="Send">
        </div>
        <?php echo $result; ?>
      </div>
    </form>  
    </div>