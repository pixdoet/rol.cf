<?php
//gbasic
// for slow computers
// basically removes everything
// beta release, other boards will be added soon -ian
// forking this to new ROL
// skeleton ha-ha

?>
<html>
 <head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta http-equiv="Cache-Control" content="no-cache" />
  <link
   rel="apple-touch-icon-precomposed"
   href="//www.google.com/images/icons/apps/calendar-ios_114.png"
  />
  <link
   href="https://fonts.googleapis.com/css?family=Google+Sans:400,500"
   rel="stylesheet"
  />
  <title>SubRocks Mobile</title>
  <meta
   name="viewport"
   content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
  />
  <link
  rel="stylesheet"
  href="style.css"
  />
  <script
   src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.g8agzr_oroM.O/m=client/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCP6z3gW3iZ5SpDBmGgDQznnZEz5gQ/cb=gapi.loaded_0?le=ili"
   nonce="52lpIZBbg5fghU37dnbjtg"
   async=""
  ></script>
  <script
   src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.g8agzr_oroM.O/m=client/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCP6z3gW3iZ5SpDBmGgDQznnZEz5gQ/cb=gapi.loaded_0"
   nonce="52lpIZBbg5fghU37dnbjtg"
   async=""
  ></script>
  <script
   src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.en.g8agzr_oroM.O/m=client/rt=j/sv=1/d=1/ed=1/am=AQ/rs=AGLTcCP6z3gW3iZ5SpDBmGgDQznnZEz5gQ/cb=gapi.loaded_0"
   nonce="52lpIZBbg5fghU37dnbjtg"
   async=""
  ></script>
 </head>
 <body class="enableviewlinks">
  <!-- Wrapper for the GP user-interface, used to control interstitial promo accessibility.-->
  <div id="gpbody">
   <!-- Logo -->
   <div id="navbar" class="nb-top ci-bg-ws">
    <div style="">
     <div class="nb-left">
      <img
       src="https://cdn.discordapp.com/attachments/858231245660749834/858509788630351902/unknown.png"
       alt="SubRocks Logo"
       width="44px"
       height="44px"
      />
     </div>
     <div class="nb-right">
      <span id="nb-refresh" class="ci-btn ci-btn-reg ci-btn-icn nb-rfrsh"
       ><div class="ci-icn-reload">&nbsp;</div></span
      >
     </div>
     <div class="nb-middle">
      <span id="nb-day" class="ci-btn ci-btn-left ci-btn-on">Read</span
      ><span id="nb-month" class="ci-btn ci-btn-right">Rant</span>
     </div>
    </div>
    <div style="display: none;">
     <div class="nb-left">
      <span id="nb-cancel" class="ci-btn ci-btn-reg">Cancel</span>
     </div>
     <div class="nb-right">
      <span id="nb-save" class="ci-btn ci-btn-reg">Save</span>
     </div>
     <div class="nb-middle"><div class="nb-title"></div></div>
    </div>
    <div style="display: none;">
     <div class="nb-left">
      <span id="nb-back" class="ci-btn ci-btn-back">Back</span>
     </div>
     <div class="nb-right">
      <span id="nb-edit" class="ci-btn ci-btn-reg">Edit</span
      ><span id="nb-delete" class="ci-btn ci-btn-reg">Delete</span>
     </div>
     <div class="nb-middle"></div>
    </div>
   </div>
   <div id="page-sizer" style="min-height: 728px;">
    <div style="height:0">&nbsp;</div>
    <div id="page">
     <div>
      <div class="busymonthwidget">
       <div class="mw-nav">
        <span class="mw-prev ci-btn ci-btn-left ci-btn-icn"
         ><div class="ci-icn-left-ip">&nbsp;</div></span
        ><span class="mw-next ci-btn ci-btn-right ci-btn-icn"
         ><div class="ci-icn-right-ip">&nbsp;</div></span
        >
       </div>
       <div class="busymonthwidget-titlebar">
        <span class="mw-title">Current post: 1293</span>
       </div>
       <div>
        <table class="mw-gridtable">
         <tbody>
         <?php
                // LOOK IAN IM DOING IT!!! - nycrite
                $conn = new mysqli("localhost","root","","testrants");
 
                if (isset($_GET['page'])) {
                    $pageno = $_GET['page'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 6;
                $offset = ($pageno-1) * $no_of_records_per_page;

                $conn=mysqli_connect("localhost","root","","affc");
                // Check connection
                if (mysqli_connect_errno()){
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    die();
                }

                $total_pages_sql = "SELECT COUNT(*) FROM testrants";
                $result = mysqli_query($conn,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                // did the statements for ya -ian
                $sql = $conn->prepare("SELECT * FROM testrants ORDER BY id DESC LIMIT ?,?");
                $sql->bind_param("ii",$offset,$no_of_records_per_page); //ii means integers -ian
                $sql->execute();
                
                $res_data = $sql->get_result();
                while($row = $res_data->fetch_assoc()){
                    // do your output code here -ian
                    // tHIS IS NOT SEX............................... yet - nycrite
                    ?>
                     <tr>
                        <td class="mw-date mw-not-selectable mw-bs mw-rs">
                            #<?php echo $row['id'];?> From <?php echo htmlspecialchars($row['name']);?> on <?php echo htmlspecialchars($row['postedon']);?>:<br />
                            <p style="font-size:24px;color:grey;"><?php echo htmlspecialchars($row['context']);?></p>
                            <p style="color:grey;">Post URL: <?php echo htmlspecialchars($row['url']);?></p>
                            <br />
                        </td>
                    </tr>
               <?php }?>
          <tr></tr>
         </tbody>
        </table>
       </div>
      </div>
      <div></div>
     </div>
    </div>
    <div style="height:0">&nbsp;</div>
   </div>
   <noscript>Oops! ROL 3 won't work because Javascript is disabled in your web
    browser. You can still use <a href="/rant/old">old ROL</a>
   </noscript>
   <div id="footer" class="footer">
    <div class="footbar cm-txt-trunc ci-bg-ws">
     <div>
      <a
       class="ci-btn ci-btn-reg footbuttons-right"
       href="rolfock.php?page<?php echo $_GET['page']-1;?>"
       >Previous page</a
      >
     </div>
     <div>
      <a
       id="signout"
       target="_top"
       class="ci-btn ci-btn-reg footbuttons-left"
       href="rolfork.php?page=<?php echo $_GET['page'] + 1;?>"
       >Next page</a
      >
     </div>
     <div class="row cm-txt-trunc" id="email">New ROL!</div>
    </div>
    <div class="footrow">
     <table class="row">
      <tbody>
       <tr>
        <td>
         <a
          id="helpterm"
          target="_top"
          href="tos.php"
          >Terms of service</a
         >
        </td>
       </tr>
      </tbody>
     </table>
    </div>
    <div class="viewlinks row">
     <span>View:</span> <span><b>ROL 3 Beta</b></span> <span>|</span>
     <span
      ><a
       id="desktop"
       target="_top"
       href="index.php"
       >ROL 2</a
      >
     </span>
    </div>
    <div class="row"><span>©2021 Hiew Jun Ian</span></div>
   </div>
  </div>
  <footer>
   <script
    type="text/javascript"
    src="https://apis.google.com/js/client.js?onload=_CAL_gapiClientLoaded"
    nonce="52lpIZBbg5fghU37dnbjtg"
    gapi_processed="true"
   ></script>
   <script type="text/javascript" nonce="52lpIZBbg5fghU37dnbjtg">
    // <!--
    _CAL_load();
    // -->
   </script>
   <script type="text/javascript" nonce="52lpIZBbg5fghU37dnbjtg">
    // <!--
    _CAL_responseFinished();
    // -->
   </script>
  </footer>
  <iframe
   id="apiproxy5babd62b4db4f76bef04b0840f95e3adebbcac240.3152796899"
   name="apiproxy5babd62b4db4f76bef04b0840f95e3adebbcac240.3152796899"
   style="width: 1px; height: 1px; position: absolute; top: -100px; display: none;"
   src="https://clients6.google.com/static/proxy.html?usegapi=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.g8agzr_oroM.O%2Fam%3DAQ%2Fd%3D1%2Frs%3DAGLTcCP6z3gW3iZ5SpDBmGgDQznnZEz5gQ%2Fm%3D__features__#parent=https%3A%2F%2Fcalendar.google.com&amp;rpctoken=1086557447"
   tabindex="-1"
   aria-hidden="true"
  ></iframe>
 </body>
</html>
