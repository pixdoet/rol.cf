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

  <head>
    <meta charset="utf-8">
    <title>Ranter++</title>
    <meta name="description" content="Rant Out Loud.cf is your go-to site for ranting on ANYTHING!" <="" meta="">

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="styles/style2.css">
    <link rel="stylesheet" href="styles/style3.css">
    <link rel="stylesheet" href="styles/style4.css">
    <link rel="stylesheet" href="styles/style5.css">
    <link rel="stylesheet" href="styles/style6.css">
  </head>
</head>

<body>
  <div class="wrapper">
    <div class="main content clearfix">
      <div class="sign-in">
        <div class="signin-box">
          <h2>Rant!</h2>
          <form action="post.php" method="post">
            <div class="email-div">
              <label for="Username"><strong class="email-label">Username</strong></label>
              <input type="text" name="rant_name" class="name" invalid-feedback="there has no feedback  .........">
            </div>
            <div class="passwd-div">
              <label for="context"><strong class="passwd-label">Your Rant</strong></label>
              <input type="text" name="rant_context" class="context" />
            </div>
            <div class="url-div">
              <label for="url"><strong class="url-label">URL(Leave empty if none)</strong></label>
              <input type="text" name="rant_url" class="url" />
            </div>
            <input type="submit" class="g-button g-button-submit" name="signIn" id="signIn" value="Rant!" />
            <p><a href="readerpp.php">Read posts</a></p>
          </form>
          <ul>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="product-info oz">
        <div class="product-headers">
          <p>Current post:<?php echo $large; ?></p>
          <a href=""><button class="g-button g-button-submit">
              ROL revamp! A new, more refreshing look of ROL is coming soon!
            </button></a>
          <h1 class="redtext"><span dir="ltr">Ranter++</span></h1>
          <h2>Rant more with Ranter++</h2>
        </div>
        <p>
          Ranter++ is the new poster for RANT OUT LOUD.cf. &nbsp;A new redesigned
          interface makes everything look cleaner.&nbsp;
        </p>
        <p>Rant about:</p>

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
          <!--
      <li>
       <a href="old/" target="_blank"><b>Go to old ROL</b></a>
      </li>
      -->
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
                  logos[i].src = 'images/logo_ret.png';
                }
              }
            }
          }
          gaia_swapHiResLogo();
        </script>
      </div>
    </div>
  </div>
</body>

</html>