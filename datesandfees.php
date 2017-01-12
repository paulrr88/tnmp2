

<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Home &mdash; The New Montessori Pre-school</title>
  <meta name="description" content="nil TBD">
  <meta name="keywords" content="active, activity, "all day care", care, charity, childcare, children, daycare, development, educate, education, evening, flexible, infant, junior, kids, learning, maria, "Maria Montessori", method, montessori, nursery, pre-school, preschool, school, sussex, tarring, toddler, west, worthing, TBD">
  <meta name="author" content="The New Montessori Pre-school">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS & JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="../css/normalize.css"><!-- reset file do not change -->
  <link rel="stylesheet" href="../css/skeleton.css"><!-- framework CSS -->
  <link rel="stylesheet" href="../css/style.css"><!--my additions-->

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="../images/favicon.png">

</head>

<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!--Container for ALL content, everything inside this--><div class="container">

    <!--Row begins--><div class="row">

      <!--Start of top information area--><div class="twelve columns" id="top">
        <ul class="nostyle">
          <li class="vertical-top"><a href="../sitemap">Sitemap</a></li>
          <li><a href="http://ratings.food.gov.uk/business/en-GB/781921/The-New-Montessori-Pre-School-Worthing"><img src="../images/food.jpg" width="100" alt="Link to our food hygiene rating" /></a></li>
          <li><img src="../images/accredited.jpg" width="70" alt="This school is Montessori MEAB Accredited" /></a></li>

        </ul>
      </div><!--End of top information area-->

    </div><!--Row ends-->


    <!--Row begins--><div class="row">

      <!--top link for bookmarks on long pages--><a name="top"></a>

      <!--Header begin--><div class="twelve columns" id="header">

        <div class="twelve columns">
          <div id="header-logo"></div>

          <div id="header-title-container">
            <h1 id="header-title">
              <span id="header-the">The</span>
              <span id="header-new">New</span>
              <span id="header-montessori">Montessori</span>
              <span id="header-preschool">Pre-school</span>
            </h1>
          </div>
        </div>

      </div><!--Header ends-->

    </div><!--Row ends-->


    <!--Row begins--><div id="row">

      <!--Navigation area begins--><div class="twelve columns" id="nav">
        <!--Taglines at bottom of header-->

        <div class="three columns" id="tagline-phone">
          <p>01903 535412</p>
        </div>
        <div class="six columns" id="tagline-email">
          <p>info@thenewmontessoripreschool.org.uk</p>
        </div>
        <div class="three columns" id="tagline-phone-mobile">
          <p>07939 264728</p>
        </div>
        <div class="twelve columns" id="tagline-email">
          <p>The Methodist Church, Tarring Road, Worthing, BN11 4ET</p>
        </div>

        <!--<div class="seven columns">
          <p id="left">In the Anglican Diocese of Chichester, and Worthing Deanery</p>
        </div>
        <div class="five columns">
          <p id="right">Church Lane, Ferring, West Sussex, BN12 5HN</p>
        </div>-->
        <div class="twelve columns" id="navbuttons">
          <div id="navbuttons-aligner">
            <div id="home"><a href="home">Home</a></div>
            <div id="about">About Us</div>
            <div id="dates">Dates &amp; Fees</div>
            <div id="child">My Montessori Child</div>
            <div id="contact">Contact Us</div>
            <div id="facebook">Facebook</div>
          </div>
        </div>
      </div><!--Navigation area ends-->

    </div><!--Row ends-->


    <!--Row begins--><div class="row">



      <!--Content decoration, top of box begins--><div id="content-bg-top">
        <div id="content-bg-top-l"></div>
        <div id="content-bg-top-mid"></div>
        <div id="content-bg-top-r"></div>
      </div><!--Content decoration ends-->

      <!--Content begins #content--><div class="twelve columns nomargin" id="content">

        <h1>Dates &amp; Fees</h1>

        <ul class="contents">
          <li><a href="#fees">Fees &amp; Opening Hours</a></li>
          <li><?php perch_content('Link to term dates'); ?></li>
          <li><a href="#reg">Register Your Child</a></li>
          <li><a href="#pay">Payments &amp; Information on Free Entitlement</a></li>
        </ul>


        <a name="fees"></a>

        <h2>Fees &amp; Opening Hours</h2>

        <p>School fees are <strong><?php perch_content('Hourly fees'); ?></strong>.</p>

        <p>There is a <strong><?php perch_content('Registration fee'); ?></strong>, payable when you enrol your child at the school.</p>

        <p>Our pre-school has <strong>places for 52 children a session from 2- 8 years of age</strong>. We are open every weekday during the school terms including half-term holidays, but we do not open on bank holidays. <strong>Full day-care is available</strong>, or children can attend one morning or afternoon session each day, either with or without Lunch Club. Times can always be arranged to suit the parent's/child's needs.</p>

        <br />

        <table id="table" summary="Table of opening hours">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Morning Sessions</th>
              <th scope="col">Lunch Club</th>
              <th scope="col">Afternoon Sessions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td scope="row"><strong>Early Birds</strong> <?php perch_content('Early birds time'); ?> (* **)</td>
            </tr>
            <tr>
              <td scope="row"><strong>Hall Class:</strong></td>
              <td scope="row"><?php perch_content('Hall class morning time'); ?></td>
              <td scope="row"><?php perch_content('Hall class lunch time'); ?></td>
              <td scope="row">--</td>
            </tr>
            <tr>
              <td scope="row"><strong>Chapel Class:</strong></td>
              <td scope="row"><?php perch_content('Chapel class morning time'); ?></td>
              <td scope="row"><?php perch_content('Chapel class lunch time'); ?></td>
              <td scope="row"><?php perch_content('Chapel class afternoon time'); ?></td>
            </tr>
            <tr>
              <td scope="row"><strong>Night Owls</strong> <?php perch_content('Night owls time'); ?> (**)</td>
            </tr>
          </tbody>
        </table>

        <br />

        <ul class="compact">
          <li>* by prior arrangement with the School Manager.</li>
          <li>** Charged at 30 minute intervals.</li>
          <li>With 24 hours notice your child is more than welcome to do additional hours.</li>
          <li><strong>Staff ratios</strong>: 1:6 for 3 &amp; 4 year-olds, 1:3 for 2 year-olds</li>
          <li><strong>Lunch Club</strong>: Children bring their own packed lunches to eat at Lunch Club, under the supervision of one member of staff for every six children. All lunches are stored in a cooler. Healthy eating and good manners are further encouraged!</li>
          <li><strong>After School Club</strong>: Our pre-school is registered with OFSTED to be able to take children up until they are eight years old. Should you have any requests to access this provision of after school or half term attendance please put them in writing.</li>
        </ul>

        <p class="backtotop"><a href="#top">Back to top</a></p>

        <hr />



        <a name="reg"></a>

        <h2 class="title">Register Your Child</h2>

        <p><strong>Please <?php perch_content('Link to registration form'); ?>, or <a href="../contact/">get in contact with us</a> about registering your child</strong>. Once our pre-school receives your child registration form we offer our parents:</p>

        <ul class="compact">
          <li>Four free sessions at Heuristic Play prior to your child starting</li>
          <li>Four free settling in visits for your child to ensure the transition goes smoothly</li>
          <li>Six free parenting classes to scaffold our parents through parenting</li>
        </ul>

        <p><strong>You can also <?php perch_content('Link to standing order form'); ?> if you require it</strong> (this includes our bank details). Please send this to either <a href="mailto:info@thenewmontessoripreschool.org.uk">info@thenewmontessoripreschool.org.uk</a> or bring it in to the school.</p>

        <p>See below for more details of how to make payments and any government funding you may be entitled to.</p>

        <p class="backtotop"><a href="#top">Back to top</a></p>

        <hr />



        <a name="pay"></a>

        <h2 class="title">Payments &amp; Information on Free Entitlement</h2>

        <p>Fees are payable in advance and may be paid weekly, monthly or termly. All sick days and absent days, including holidays taken in term time, must be paid for and cannot be exchanged for other days.</p>

        <p><strong>You can make payments by cash, cheque or bank standing order</strong>. If you would like to set up a standing order, please ask the classroom manager for the school's bank details. We regret that we cannot accept payment by credit/debit card or by Direct Debit at present.</p>

        <p>If your employer offers Childcare Vouchers as part of a salary sacrifice scheme, you can use these to pay your fees. We are registered with various voucher schemes so please discuss your requirements with the the School Manager. You can find more information about voucher schemes and how they work with <a href="<?php perch_content('Link to Child Tax Credits gov website'); ?>">Tax Credits on the web site of HM Revenue and Customs</a>.</p>

        <p><strong>West Sussex County Council (WSCC) will fund up to fifteen hours per week</strong> for children over three years of age as part of the government's Free Entitlement scheme, but we charge you directly for the additional cost of the Montessori education. <a href="../about/policies/">Our policies</a> do permit parents to take just the free entitlement if sufficient spaces are available, but prioritises those who want the Montessori education. However, WSCC funds a maximum of 38 weeks of the year, whereas we open for 43 including half-term holidays. Any sessions over and above those funded by WSCC must be paid for in full by you.</p>

        <p>To apply for your Free Entitlement you must complete an application to the West Sussex Early Years Partnership, available from us, and show us your child's birth certificate as proof of age. The grant payments are made directly to the school. <?php perch_content('Link to EYPP document'); ?>.</p>

        <p class="backtotop"><a href="#top">Back to top</a></p>


      </div><!--Content ends-->



    </div><!--Row ends-->

    <div class="row">



    </div>



    <!--Row begins--><div class="row">

      <!--Footer begins #footer--><div class="twelve columns" id="footer">

        <!--Content decoration, top of box begins--><div id="content-bg-bottom">
          <div id="content-bg-bottom-l"></div>
          <div id="content-bg-bottom-r"></div>
        </div><!--Content decoration ends-->

        <br />

        <ul>
          <li><a href="../">Home</a></li>
          <li><a href="../contacts">Contacts</a></li>
          <li><a href="../about">Who's Who</a></li>
          <li><a href="https://goo.gl/maps/NSJ76SqrDo32">Where to find St. Andrew's</a></li>
          <li><a href="../about/history">History</a></li>
          <li><a href="../services">Services &amp; Dates</a></li>
          <li><a href="../clubs">Clubs &amp; Activities</a></li>
          <li><a href="../clubs/#social">Social Life at St. Andrew's</a></li>
          <li><a href="../clubs/#transport">Church Transport</a></li>
          <li><a href="../photos">Photo Gallery</a></li>
          <li><a href="../stewardship">Stewardship</a></li>
          <li><a href="../links">Links</a></li>
        </ul>

        <p><strong>&copy; <?php echo date('Y'); ?> The New Montessori Pre-school | Designed by Paul Robinson</strong></p>
        <p>Registered charity no. 1086853<br />
        Company Number 3908382</p>

        <p><a href="../perch/">Perch Login</a></p>

      </div><!--Footer ends-->

    </div><!--Row ends-->

  </div><!--Container ends-->

  <script>
    // fix for mobile table layout from http://sitesforprofit.com/responsive-tables-in-wordpress

    var headertext = [];
    var headers = document.querySelectorAll("thead");
    var tablebody = document.querySelectorAll("tbody");

    for (var i = 0; i < headers.length; i++) {
      headertext[i]=[];
      for (var j = 0, headrow; headrow = headers[i].rows[0].cells[j]; j++) {
        var current = headrow;
        headertext[i].push(current.textContent);
        }
    }

    for (var h = 0, tbody; tbody = tablebody[h]; h++) {
      for (var i = 0, row; row = tbody.rows[i]; i++) {
        for (var j = 0, col; col = row.cells[j]; j++) {
          col.setAttribute("data-th", headertext[h][j]);
        }
      }
    }
  </script>

<!-- End Document
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
