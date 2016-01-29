<!doctype html>
<html>
<head>
<title>Gaurav Grover</title>

  <!-- META -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"><!-- Force IE to use the latest rendering engine --> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"><!-- Optimize mobile viewport -->
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-capable" content="yes"> 

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<!-- google fonts -->
<link href='https://fonts.googleapis.com/css?family=Yesteryear|Aladin|Droid+Serif' rel='stylesheet' type='text/css'>

<!-- on-landing animations -->
<link rel="stylesheet" href = "css/animate1.css">


<!-- wow.js | on scroll animations -->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

        <!-- my includes -->
<link rel="shortcut icon" href="favicon.ico">



          <!-- W3 CSS -->

<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">




           <!-- hover.css -->
<link rel="stylesheet" href="css/hover.css">



          <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">



          <!-- Custom CSS -->
<link href="css/freelancer.css" rel="stylesheet">



          <!-- MY CSS -->
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!-- dropdown themes-->
<div class="w3-dropdown-hover" id="themes">
      
  <button class="w3-btn w3-red hvr-shutter-out-horizontal" style="font-family: 'Droid Serif', serif;">Themes</button>
  <div class="w3-dropdown-content w3-border">
    <a href="../app">Default</a>
    <a href="../app-blue">Blue</a>
    <a href="../app-brown">Brown</a>
  </div>
</div>



<!-- TOP NAV BAR -->
<div class="w3-topnav w3-card-8 w3-large w3-center nav">
  <!-- <a href="#">Home</a> -->
  <a class="scroll" href="#portfolio">Portfolio</a>
  <a class="scroll" href="#about">About</a>
  <!-- <a href="#">Gallery</a> -->
  <a class="scroll" href="#contact">Contact</a>
</div>


<!-- JUMBOTRON -->
<div class="w3-light-grey w3-container w3-padding-64 w3-margin-bottom w3-center jumbotron">
  <h2 style="font-family: 'Aladin', cursive" class = "shadow wow fadeInDown">Who am I?</h2>
  <img class="my-pic w3-card-16 wow rotateIn" src="http://i.imgur.com/VeJMKpN.jpg" id="dp">
  <br><br>
  <p class="animated fadeInUp shadow" style="font-size: 28px; font-family:'Aladin'">A Web Developer From <br> I.I.T. Roorkee</p>
</div>


<!-- PORTFOLIO -->
<div class="w3-container w3-center w3-margin-bottom w3-light-grey portfolio" id="portfolio">
  <h3 class = "wow bounceInLeft" id="work">portfolio</h3><br>
  <div class="w3-row-padding">
    

    <div class="w3-quarter hvr-grow">
      <h4>Mining Mario 25</h4>
      <a href="../game/" target="_blank"><img class="drop-shadow" src="http://rocketdock.com/images/screenshots/Mario-Icon.jpg" style="width:100%; z-index: 2" alt="Image">
    </div></a>

<!-- *****************SECOND*************** -->

    <div class="w3-quarter hvr-grow">
      <h4>Database Application</h4>
      <a href="../dbapp/" target="_blank"><img class="drop-shadow" src="icons/orange.jpg" style="width:100%; z-index: 2" alt="Image">
    </div></a>


<!-- ***************THIRD******************* -->


    <div class="w3-quarter hvr-grow">
      <h4>Database Access</h4>
      <a href="../commands/" target="_blank"><img class="drop-shadow" src="icons/master.png" style="width:100%; z-index: 2" alt="Image">
    </div></a>

    <div class="w3-quarter hvr-grow">
      <h4>CSS-SWITCH</h4>
      <a href="http://www.maxcool12345.cu.cc/css-switch" target="_blank"><img class="drop-shadow" src="icons/switch.png" style="width:100%" alt="Image"></a>
    </div>

  </div>
  <br>

  <div class="w3-row-padding">
    <div class="w3-quarter hvr-grow">
      <h4>FLOAT</h4>
      <a href="http://www.maxcool12345.cu.cc/float" target="_blank"><img class="drop-shadow" src="icons/float.png" style="width:100%; z-index: 2" alt="Image">
    </div></a>


  <!-- <div class="w3-row-padding"> -->
    <div class="w3-quarter hvr-grow">
      <h4>ANIMATE</h4>
      <a href="http://www.maxcool12345.cu.cc/gaurav/Open-Me.html" target="_blank"><img class="drop-shadow" src="icons/animate.png" style="width:100%; z-index: 2" alt="Image">
    </div></a>

<!-- *******************FIRST**************** -->

    <div class="w3-quarter hvr-grow">
      <h4>ANYONE CAN CODE</h4>
      <a href="http://www.maxcool12345.cu.cc/project" target="_blank"><img class="drop-shadow" src="icons/code.png" style="width:100%" height="130%" alt="Image"></a>
    </div>

<!-- ****************SECOND********************* -->

    <div class="w3-quarter hvr-grow">
      <h4>BOOT-SITE</h4>
      <a href="http://www.maxcool12345.cu.cc/boot-site" target="_blank"><img class="drop-shadow" src="icons/boot.jpg" style="width:100%" alt="Image"></a>
    </div>
<!-- ***************THIRD****************** -->
  <div class="w3-row-padding">
    <div class="w3-quarter hvr-grow">
      <h4>LOVE</h4>
      <a href="http://www.maxcool12345.cu.cc/love" target="_blank"><img class="drop-shadow" src="icons/love.png" style="width:100%" alt="Image"></a>
    </div>


<?php 
  
  if(isset($_GET["title"], $_GET["iurl"], $_GET["turl"])) {
  $title = $_GET["title"];
  $iurl = $_GET["iurl"];
  $turl = $_GET["turl"]; 
    echo '<div class="w3-quarter hvr-grow">
      <h4>' . $title . '</h4>
      <a href = ' . $turl . ' target="_blank"><img class="drop-shadow" src = "' . $iurl . '" style="width:100%; z-index: 2" alt="Image">
    </div></a>';
}
  // $name = "Gaurav";
  // echo "Hello " . "my " . "name " . "is " . $name;

?>

<!--     <div class="w3-quarter">
      <h4>MORE</h4>
      <img class="drop-shadow" src="http://i.imgur.com/SWMZQEI.jpg" style="width:100%; z-index: 2" alt="Image">
    </div>
 -->
    <br><br><br>
    <span style = "margin: 5px"><p class = "wow rotateIn">More content will be added soon..!!</p><p class = "wow rotateIn"> Don't Worry.. It's my site! <i class="fa fa-fw fa-smile-o"></i></a></p></span>
  </div>
</div>
</div>
<br><br>





<!-- OTHER JUMBOTRON -->
<div class="other-jumbotron w3-light-grey w3-container w3-padding-64 w3-margin-bottom w3-center jumbotron" id="about">

      <p class = "centered block wow fadeInUp" >Hello World! I am currently pursuing my B.Tech from Indian Institute of Technology Roorkee. I am in second year and a budding web developer. This is my first website and it is completely designed and developed by me. This site contains different projects made by me. I hope you liked it. Please feel free to contact me and to recommend me suggestions. My contat details are given below in <strong>Around The Web</strong> section</p>

      <!-- <p class = "centered block wow fadeInUp" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
</div>


<!-- some more info -->
<div class="some-more-info w3-container w3-center w3-margin-bottom w3-light-grey">
  <h3>Profile</h3><br>
  <div class="w3-row-padding">
  
      <div class = "w3-third"> 
            <h4 style="font-size: 22px">Front-End</h4>
      
<!-- 
      <p>From apartments and rooms to treehouses and boats: stay in unique spaces in 192 countries.</p>
      <p></p>
       -->

      <ul style = "text-align: left; list-style: none; font-size: 17px; margin-left: 22px;">
        <li>* HTML/CSS</li>
        <li>* bootstrap</li>
        <li>* JavaScript/Jquery</li>
        <li>* Jquery - Ajax</li>
        <li>* npm/bower/JSON</li>
      </ul>

      <a href="https://about.me/grovergaurav">Learn more about me</a>
      </div>


      <div class = "w3-third">
      <h4 style="font-size: 22px">Back-End</h4>

      <ul style = "text-align: left; list-style: none; font-size: 17px; margin-left: 22px;">
        <li>* php</li>
        <li>* Laravel</li>
        <li>* Authorization/Authentication</li>
        <li>* Apache</li>
        <li>* MySQL/phpMyAdmin</li>
      </ul>
      <a href="https://about.me/grovergaurav">Learn more about me</a>
      </div>
      

      <div class = "w3-third">
      <h4 style="font-size: 22px">Miscellaneous</h4>

      <ul style = "text-align: justify; list-style: none; font-size: 17px; margin-left: 22px;">
        <li>* C/C++/JAVA/Python</li>
        <li>* Unix CommandLine</li>
        <li>* Linux Friendly</li>
        <li>* Git/Github/Git-GUI</li>
        <li>* Chrome Applications</li>
      </ul>

        <a href="https://about.me/grovergaurav">Learn more about me</a>
      </div></div></div>
<br><br>
</div>

<!-- <div id="ajax" style="font-size: 32px; padding: 40px; border: 1px solid black"><p>write anything heree</p></div> -->

<!-- FOOTER -->
<footer class="text-center" id = "contact">
  <div class="footer-above">
    <div class="container">
      <div class="row">

<!-- Address With Map -->
        <div class="footer-col col-md-4">
                          <h3>Address</h3>

            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="220" height="150" src="https://maps.google.com/maps?hl=en&q=Ravindra Bhawan IIT Roorkee&ie=UTF8&t=roadmap&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">
                  embedgooglemaps.com
              </a></small></div><div><small><a href="googlemapsgenerator.com">googlemapsgenerator.com</a></small></div></iframe>

            <p>G-61 Ravindra Bhawan<br>IIT Roorkee, Uttrakhand</p>

        </div>
        

        <!-- Around the Web section -->
        <div class="footer-col col-md-4">
            <h3>Around the Web</h3>
            <p style="text-align: justify">You can also find me on various social networking sites and developer's portal such as Faccebook, Google+, Github and LinkedIn</p>
            <ul class="list-inline">
                <li>
                    <a href="https://www.facebook.com/iamgauravgrover" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://plus.google.com/u/0/106560981619954585071" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                </li>
                <li>
                    <a href="https://github.com/gauravgrover95/" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                </li>
                <li>
                    <a href="http://in.linkedin.com/in/gauravgrover" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                </li>
<!--                 <li>
                    <a href="" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                </li> -->
            </ul>

        </div>

        <div class="footer-col col-md-4">
            <h3>Contact</h3>
            <img src="dp.jpg" width="155px" height="150"><br>
            <p>gauravgrover95@gmail.com<br>Mobile: 7060334112</p>
        </div>

      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- The app -->
<script type="text/javascript">
  
  var clicks = 0;
  $("#dp").click(function() {
    clicks += 1;
    console.log(clicks);

    if(clicks >= 7) {

    alert("you have successfully reached 7 clicks");
    // $("#ajax p").load("test.txt");
    window.location.href = "form.html";
  }


  });


</script>



<!-- all animations on portfolio divs -->
<script type="text/javascript">

    $(".portfolio .w3-quarter").removeClass("hvr-grow")
                                .addClass("wow zoomIn hvr-sweep-to-bottom");
</script>


<!-- all animations on some-more-info columns -->
<script type="text/javascript">
    $(".some-more-info .w3-third").mouseover(function() {
      $(this).addClass(" w3-card-4");
    });


   $(".some-more-info .w3-third").mouseout(function(){
    $(this).removeClass("w3-card-4");
}); 


// appear animation and hover animation
    $(".some-more-info .w3-third").addClass("wow fadeInUp hvr-fade");
</script>


<!-- footer appear animations -->
<script type="text/javascript">
  
   $("footer div").addClass("wow fadeIn");

</script>

<!-- drop shadow -->
<script type="text/javascript">
 
    $(".drop-shadow").mouseover(function(){
    $(this).addClass("w3-card-8");
    $(".portfolio p").addClass("text-shadow");
});

   $(".drop-shadow").mouseout(function(){
    $(this).removeClass("w3-card-8");
}); 

</script>



<script src="js/jQuery.scrollSpeed.js"></script>

<!-- smooth scroll mousewheel -->

<script type="text/javascript">
  $(function() {  

    jQuery.scrollSpeed(120 /*UNITS*/, 500 /*TIME IN MS*/);
    
});
</script>

<script type="text/javascript">
  
      //This is the jQuery cody to be included for smooth scroll to an anchor link

    var hashTagActive = "";
    $(".scroll").click(function (event) {
        if(hashTagActive != this.hash) { //this will prevent if the user click several times the same link to freeze the scroll.
            event.preventDefault();
            //calculate destination place
            var dest = 0;
            if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
                dest = $(document).height() - $(window).height();
            } else {
                dest = $(this.hash).offset().top;
            }
            //go to destination
            $('html,body').animate({
                scrollTop: dest
            }, 2000, 'swing');
            hashTagActive = this.hash;
        }
    });

    //This is how to create an anchor for smooth scroll :-

    /* <a class="scroll" href="#destination1">Destination 1</a> */


</script>

</body>
</html> 
