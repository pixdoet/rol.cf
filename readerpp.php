<?php
$conn = new mysqli("localhost", "root", "", "testrants");
$getnewid = "SELECT MAX(id) as 'maxid' FROM testrants";
$result = $conn->query($getnewid);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $large = $row["maxid"];
  }
}
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Reader++</title>
  <meta name="description" content="Read posts on the number 1 ranting site!">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style3.css">
  <link rel="stylesheet" href="style4.css">
  <link rel="stylesheet" href="style5.css">
  <link rel="stylesheet" href="style6.css">
</head>

<body>
  <div class="wrapper">

    <div class="main content clearfix">
      <div class="sign-in">
        <div class="signin-box">
          <h2>Read rants!</h2>
          <form action="reader.php" method="get">

            <div class="email-div">
              <label for="name"><strong class="email-label">Search with post id:</strong></label>
              <input type="text" name="postid" class="name" invalid-feedback"="">
              <!--?php echo $username_err; ?-->
            </div>
            <input type="submit" class="g-button g-button-submit" name="signIn" id="signIn" value="Search!">


          </form>
          <ul>
            <li>


            </li>
          </ul>
        </div>
      </div>
      <div class="product-info oz">
        <div class="product-headers">
          <p>Current post: <?php echo $large; ?>
          <h1 class="redtext"><span dir="ltr">Reader++</span></h1>
          <h2>Read more with Reader++</h2>
        </div>
        <p>Reader++ is the new redesigned reader for RANT OUT LOUD.cf. This new reader has almost the same design as Ranter++</p>
        <p>Hope you like it!</p>
        <p>Read about:</p>

        <ul class="plus-features clearfix">
          <li class="circles">
            <h3>Circles that feel too small.</h3>
          </li>
          <li class="games">
            <h3>Games that you always die.</h3>
          </li>
          <li class="stream">
            <h3>Your home that smells.</h3>
          </li>
          <li class="hangouts">
            <h3>Hangouts with people you hate.</h3>
          </li>
          <li class="photo">
            <h3>Weird and ugly photos of you.</h3>
          </li>
          <li class="events">
            <h3>Events that you don't wanna go.</h3>
          </li>
        </ul>
        <p>and many more!</p>
      </div>
    </div>
    <div class="google-footer-bar">
      <div class="footer content clearfix">
        <ul>
          <li>© 2021 Hiew Jun Ian</li>
          <li><a href="old/" target="_blank"><b>Go to old ROL</b></a></li>
          <li><a href="tos.php" target="_blank">Terms of Service</a></li>
          <li><a href="privacy.php" target="_blank">Your privacy</a></li>
          <li><a href="../blog" target="_blank">DevBlog</a></li>
        </ul>
        <form></form>
        <script type="text/javascript">
          var gaia_hasInnerTextProperty =
            document.getElementsByTagName("body")[0].innerText != undefined ? true : false;
          var gaia_attachEvent = function(element, event, callback) {
            if (element.addEventListener) {
              element.addEventListener(event, callback, false);
            } else if (element.attachEvent) {
              element.attachEvent('on' + event, callback);
            }
          };
          var gaia_getElementsByClass = function(className) {
            if (document.getElementsByClassName) {
              return document.getElementsByClassName(className);
            } else if (document.querySelectorAll && document.querySelectorAll('.' + className)) {
              return document.querySelectorAll('.' + className);
            }
            return [];
          };
        </script>
        <script type="text/javascript">
          function gaia_parseFragment() {
            var hash = location.hash;
            var params = {};
            if (!hash) {
              return params;
            }
            var paramStrs = decodeURIComponent(hash.substring(1)).split('&');
            for (var i = 0; i < paramStrs.length; i++) {
              var param = paramStrs[i].split('=');
              params[param[0]] = param[1];
            }
            return params;
          }

          function gaia_prefillEmail() {
            var f = null;
            if (document.getElementById) {
              f = document.getElementById('gaia_loginform');
            }

            if (f && f.Email && (f.Email.value == null || f.Email.value == '') &&
              (f.Email.type != 'hidden')) {
              hashParams = gaia_parseFragment();
              if (hashParams['Email'] && hashParams['Email'] != '') {
                f.Email.value = hashParams['Email'];
              }
            }
          }


          try {
            gaia_prefillEmail();
          } catch (e) {}



          function gaia_setFocus() {

            var f = null;
            if (document.getElementById) {
              f = document.getElementById('gaia_loginform');
            }
            if (f) {
              if (f.Email && (f.Email.value == null || f.Email.value == '') &&
                (f.Email.type != 'hidden') && f.Email.focus) {
                f.Email.focus();
              } else if (f.Passwd) {
                f.Passwd.focus();
              }
            }

          }
          window.onload = gaia_setFocus;

          function gaia_onLoginSubmit() {


            if (window.gaiacb_onLoginSubmit) {
              return gaiacb_onLoginSubmit();
            } else {
              return true;
            }
          }
          document.getElementById('gaia_loginform').onsubmit = gaia_onLoginSubmit;
        </script>
        <script type="text/javascript">
          gaia_appendParam = function(url, name, value) {
            var param = encodeURIComponent(name) + '=' + encodeURIComponent(value);
            if (url.indexOf('?') >= 0) {
              return url + '&' + param;
            } else {
              return url + '?' + param;
            }
          };
          var langChooser = document.getElementById('lang-chooser');
          if (langChooser) {
            var langChooserParam = 'hl';
            var langChooserUrl = '\x2FServiceLogin?service=oz\x26continue=https%3A%2F%2Fplus.google.com%2F%3Fgpsrc%3Dgplp0\x26lp=1';
            langChooser.style.display = '';
            langChooser.onchange = function() {
              window.location.href =
                gaia_appendParam(langChooserUrl, langChooserParam, this.value);
            };
          }
        </script>
        <script type="text/javascript">
          var gaia_swapHiResLogo = function() {
            var devicePixelRatio =
              window.devicePixelRatio ? window.devicePixelRatio : 1;
            if (devicePixelRatio > 1) {
              var logos = gaia_getElementsByClass('logo');
              for (var i = 0; i < logos.length; i++) {
                if (logos[i].nodeName == 'IMG' &&
                  logos[i].src.search('google_logo_41.png') > 0) {
                  logos[i].width = 116;
                  logos[i].height = 41;
                  logos[i].src = '//web.archive.org/web/20120819002424/https://ssl.gstatic.com/images/logo_ret.png';
                }
              }
            }
          }
          gaia_swapHiResLogo();
        </script>
        <img src="https://web.archive.org/web/20120819002424im_/https://ad.doubleclick.net/activity;src=2542116;type=googl628;cat=googl945;ord=1;num=1" width="1" height="1" alt="">
      </div>


      <!--
     FILE ARCHIVED ON 00:24:24 Aug 19, 2012 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 06:34:31 Apr 20, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
-->
      <!--
playback timings (ms):
  RedisCDXSource: 1.824
  exclusion.robots: 0.425
  CDXLines.iter: 86.563 (3)
  exclusion.robots.policy: 0.387
  PetaboxLoader3.datanode: 192.043 (4)
  captures_list: 746.633
  LoadShardBlock: 160.874 (3)
  esindex: 0.015
  PetaboxLoader3.resolve: 50.803
  load_resource: 195.069
-->
</body>

</html>