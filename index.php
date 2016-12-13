
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; St. Andrew's Church, Ferring</title>
  <meta name="description" content="Welcome to the St Andrew's Church, Ferring, website, we hope that this site will be of interest to you. If you live or are visiting the area of Ferring, you will find a very warm welcome at our church.">
  <meta name="keywords" content="andrew, anglican, church, coast, england, ferring, parish, saint, south, st, sussex, west, worthing, village, communion, family, pets, services, sunday">
  <meta name="author" content="St. Andrew's Church, Ferring">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="css/style.css?v=2"><!--my additions-->

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

  
  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>

<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--Container for ALL content, everything inside this--><div class="container">

    <!--Row begins--><div class="row">

      <!--Start of top information area--><div class="twelve columns" id="top">
        <ul class="nostyle">
          <li><a href="sitemap">Sitemap</a></li>
          <li><a href="docs/AEDnotice.pdf"><img src="images/aed.jpg" /></a></li>
        </ul>
      </div><!--End of top information area-->

    </div><!--Row ends-->


    <!--Row begins--><div class="row">

      <!--Header begin--><div class="twelve columns" id="header">

        <div class="twelve columns">
          <h1 id="header-title">The New Montessori Pre-school</h1>
        </div>

      </div><!--Header ends-->

    </div><!--Row ends-->


    <!--Row begins--><div id="row">

      <!--Navigation area begins--><div class="twelve columns" id="nav">
        <!--Taglines at bottom of header--><div class="seven columns">
          <p id="left">In the Anglican Diocese of Chichester, and Worthing Deanery</p>
        </div>
        <div class="five columns">
          <p id="right">Church Lane, Ferring, West Sussex, BN12 5HN</p>
        </div>
        <div class="twelve columns" id="navbuttons">
          <div id="home"><a href="home">Home</a></div>
          <div id="about">About Us</div>
          <div id="dates">Fees &amp; Dates</div>
          <div id="child">My Montessori Child</div>
          <div id="contact">Contact Us</div>
          <div id="facebook">Facebook</div>
        </div>
      </div><!--Navigation area ends-->

    </div><!--Row ends-->

    <!--Row begins--><div class="row">



      <!--Content begins #content--><div class="twelve columns nomargin" id="content">

        <p>Welcome to the St Andrew's Church, Ferring, website, we hope that this site will be of interest to you.</p>

        <p>If you live or are visiting the area of Ferring, you will find a very warm welcome at our church. We are a friendly village
        church on the sunny South Coast. It's a bit of a squeeze on a Sunday morning, but there is room for you.</p>

        <p>Try the 9:30 on Sundays for the Parish Communion.</p>

        <p>On the first Sunday of each month there is a Family Service in the Church at 9:30, in place of the Parish Communion.
        Our Uniformed Organisations attend this service.</p>

        <p>Seasonal Services will be shown on the Weekly Pew sheets, on the Notice boards, in the Parish Magazine, and on this website.</p>

        <p>See the <a href="services">Services page</a> for details of all services, and notification of any changes.</p>

        <br /><br />


      </div><!--Content ends-->

    </div><!--Row ends-->

    <!--Row begins--><div class="row">

      <!--Footer begins #footer--><div class="twelve columns" id="footer">
        <p><strong>&copy; 2016 St. Andrew's Church, Ferring | Designed by Paul Robinson</strong></p>
        <a href="http://www.facebook.com/standrewsferring"><img src="images/facebook.png" alt="St. Andrew's Church Ferring Facebook" /></a>

        <a href=""><img src="images/diocese.png" /></a>

        <br />

        <ul>
          <li><a href="">Home</a></li>
          <li><a href="contacts">Contacts</a></li>
          <li><a href="about">Who's Who</a></li>
          <li><a href="https://goo.gl/maps/NSJ76SqrDo32">Where to find St. Andrew's</a></li>
          <li><a href="about/history">History</a></li>
          <li><a href="services">Services &amp; Dates</a></li>
          <li><a href="clubs">Clubs &amp; Activities</a></li>
          <li><a href="clubs/#social">Social Life at St. Andrew's</a></li>
          <li><a href="clubs/#transport">Church Transport</a></li>
          <li><a href="photos">Photo Gallery</a></li>
          <li><a href="stewardship">Stewardship</a></li>
          <li><a href="links">Links</a></li>
        </ul>

      </div><!--Footer ends-->

    </div><!--Row ends-->

  </div><!--Container ends-->

  <script>
    // Script to make content and sidebar same height no matter what!
    // placing objects inside variables

    //#added the below if statement to make sure this doesn't run on mobile

    if ($(window).width() > 550){
      var content = $('#contentBox');
      var sidebar = $('#sidebarBox');
      var count = 0;
      var myTimer;

      function setEqualContainer() {
        // get content and sidebar height in variables
        var getContentHeight = content.outerHeight();
        var getSidebarHeight = sidebar.outerHeight();

        // check if content height is bigger than sidebar
        if ( getContentHeight > getSidebarHeight ) {
          sidebar.css('min-height', getContentHeight);
        }

        // check if sidebar height is bigger than content
        if ( getSidebarHeight > getContentHeight ) {
          content.css('min-height', getSidebarHeight);
        }
      }

      // creating the timer which will run every 500 milliseconds
      // and will stop after the container will be loaded
      // ...or after 15 seconds to not eat a lot of memory
      myTimer = setInterval( function() {
        count++;

        if ( $('.testContainer').length == 0 ) {
          setEqualContainer();
        } else {
          setEqualContainer();
          clearInterval(myTimer);
        }

        if ( count == 15) {
          clearInterval(myTimer);
        }
      }, 500);
    }
  </script>

  
<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
