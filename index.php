<?php 
$fileName = "info.txt";
$fileSizeResult = filesize($fileName);

$fileHandle = fopen($fileName, "r");
$fieldValues = fread($fileHandle, $fileSizeResult);
fclose($fileHandle);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>1 Little Sister </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <img src="background_wood.jpg" id="background-image" />
    <div class="background-card">
      <div class="nav-parent">
        <!-- <div id="burger-button"><a href="javaScript:void(0);" onclick="toggleNavBar()">&#10094;</a></div> -->
        <div id="nav" class="nav">
          <a href="#cafe"><div class="anchor-div">Cafe</div></a><a href="#about"><div class="anchor-div">About</div></a><a href="#contact"><div class="anchor-div">Contact</div></a><a href="#one-little-market"><div class="anchor-div">One Little Market</div></a>
        </div>  <!-- /nav -->
      </div> <!-- /nav-parent -->
    </div> <!-- /background-card -->
    <div class="string-lights">
      <img src="string_lights.png" />
      <div class="background-box  background-card"></div>
    </div>
    <div class="background-card">
      <div id="cafe" class="info-card-parent">
        <div class="info-card left-card-lrg no-padding">
          <img class="info-card-image-lrg" src="logo.png">
        </div> <!-- /info-card -->
        <div class="info-card right-card no-padding">
          <p>Open 7 Days</p>
          <h3>Menu</h3>
          <p><a href="www.google.com">Breakfast</a><p>
          <p><a href="www.google.com">Lunch</a><p>
          <p><a href="www.google.com">Dinner - Fri & Sat</a><p>
          <p><a href="www.google.com">Wood Oven Pizza</a><p>
          <p>Takeaway<p>
          <p>Handmade Gifts</p>
          <a href="www.facebook.com"><img class="social-media-image" src="facebook-logo.png" rel="facebook-logo" /></a>
          <a href="www.instagram.com"><img class="social-media-image" src="instagram-logo.png" rel="instagram-logo" /></a>
        </div> <!-- /info-card -->
      </div> <!-- /info-card-parent -->
      <div id="about" class="info-card-parent white-card">
        <h3 style="text-align: center;">Local Wholesome Organic | Family Cafe on the Fleuro Coast</h3>
      </div>
    </div>
    <!-- <div class="mySlides-bar" id="mySlides-parent">
      <img class="mySlides" src="cafe.jpg"><img class="mySlides" src="logo.png"><img class="mySlides" src="cafe.jpg"><img class="mySlides" src="test.jpg"><img class="mySlides" src="little_market_logo.jpg">
      <a href="javaScript:void(0);" class="mySlideButton left-slide-button" onclick="moveThroughSlides(-1)">&#10094;</a>
      <a href="javaScript:void(0);" class="mySlideButton right-slide-button" onclick="moveThroughSlides(1)">&#10095;</a>
      <div class="background-box  background-card"></div>
    </div> -->
    <div class="image-bar">
      <img src="image_bar.png" />
      <div class="background-box  background-card"></div>
    </div>
    <div class="background-card">    
      <div class="info-card-parent white-card">
        <div class="address"><p id="address"></p></div>
      </div> <!-- info-card-parent -->
      <div id="contact" class="info-card-parent">
        <div class="info-card left-card">
          <h3>Contact Us</h3>
          <p>Bookings: (08)8558 3759</p>
          <p>hello@onelittlesister.com.au</p>
          <br>
          <h3>Mailing List</h3>
          <form>
            <p>Name:<input type="text" name="Username" /></p>
            <p>Email:<input type="text" name="EmailAddress" /></p>
            <p><input type="submit" name="submit" /></p>
          </form>
        </div> <!-- /info-card -->
        <div class="info-card right-card" id="map" style="border: solid black 1px; padding: 0;"></div>
      </div> <!-- info-card-parent -->
      </div>

      <div class="string-lights">
        <img src="string_lights.png" />
        <div class="background-box  background-card"></div>
      </div>
      <div class="background-card">
      <div id="one-little-market" class="info-card-parent white-card">
        <div class="info-card left-card">
          <h3>One Little Market</h3>
          <p>Saturdays 5:00 - 9:00pm</p>
          <p>Summer Only</p>
          <p>rear of One Little Sister</p>
          <p><b>Enquiries?</b></p>
          <a href="www.facebook.com"><img class="social-media-image" src="facebook-logo.png" rel="facebook-logo" /></a>
          <a href="www.instagram.com"><img class="social-media-image" src="instagram-logo.png" rel="instagram-logo" /></a>
        </div> <!-- /info-card -->
        <div class="info-card right-card">
          <img class="info-card-image-med"  src="little_market_logo.jpg">
        </div> <!-- /info-card -->
      </div> <!-- /info-card-parent -->
    </div> <!-- /background-card -->
<script>

//Router
function handleNewHash() {
  var location = window.location.hash.replace(/^#\/?|\/$/g, '').split('/');
  switch (location[0])  {
  case '':

  	break;
  case 'contact':
    
    break;
  default:
    
    break;
  }
}

handleNewHash();
window.addEventListener('hashchange', handleNewHash, false);

function myMap() {
  var myCenter = new google.maps.LatLng(-35.4491366,138.3191941);
    var mapCanvas = document.getElementById("map");
    var mapOptions = {center: myCenter, zoom: 15};
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
}

var slideIndex = 0;

function updateSlideDisplay(displayValue, className) {
  var elms = document.getElementsByClassName(className);
  for(var i = 0; i < elms.length; ++i) {
    var elm = elms[i];
    elm.style.display = displayValue;
  }
}

function mediaQueryResponse (mq) {
  if (mq.matches) {
    updateSlideDisplay("none", "mySlides");
    updateSlideDisplay("block", "mySlideButton");
    moveThroughSlides(0);
    // document.getElementById("nav").style.display = "none";
  } else {
    updateSlideDisplay("inline-block", "mySlides");
    updateSlideDisplay("none", "mySlideButton");
    // document.getElementById("nav").style.display = "block";
  }  
}

var mq = window.matchMedia('screen and (max-width: 820px)');
mediaQueryResponse(mq);
mq.addListener(mediaQueryResponse);


function toggleNavBar() {
  var elm = document.getElementById("nav");
  if(elm.style.display === "none") {
    elm.style.display = "block";
  } else {
    elm.style.display = "none";    
  }
}

function moveThroughSlides(incrementValue) {
  var elms = document.getElementsByClassName("mySlides");

  slideIndex += incrementValue;
  if(slideIndex >= elms.length) {
    slideIndex = 0;
  }
  if(slideIndex < 0) {
    slideIndex = elms.length - 1;
  }
  
  for(var i = 0; i < elms.length; ++i) {
    var elm = elms[i];
    var displayValue = "none";
    if(i === slideIndex) {
      displayValue = "inline-block";
    }
    elm.style.display = displayValue;
  }
}

function cropImageBar() {
  var elms = document.getElementsByClassName("mySlides");
  var minHeight = 10000000;
  var smallestElement = null;
  for(var i = 0; i < elms.length; ++i) {
    var elm = elms[i];
    if(elm.height < minHeight) {
      minHeight = elm.height;
      smallestElement = elm;
    }
  }
  var slideBarElm = document.getElementById("mySlides-parent");
  var halfOldHeight = slideBarElm.style.height / 2;
  slideBarElm.style.height = minHeight + "px";
  for(var i = 0; i < elms.length; ++i) {
    var elm = elms[i];
    elm.style.top = -halfOldHeight + "px";
  }
}

function populateField(id, value) {
    document.getElementById(id).innerHTML = value;  
  }

  // cropImageBar();
  var jsonValues = <?php echo $fieldValues; ?>;
  // populateField("title", jsonValues.title);
  populateField("address", jsonValues.address);
  // populateField("about", jsonValues.about);
  // populateField("facebook", jsonValues.facebook);

</script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDNEz6dN0anEU1AVS1NNKYOXrrzTOhNb-Y&callback=myMap"></script>
</body>
</html>

