<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo "$titlePage"; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/livre.jpg"/>
    <link href="./css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/cssBody.css" rel="stylesheet">
    <link href="./css/cssHeader.css" rel="stylesheet">
    <link href="./css/cssMiddlePage.css" rel="stylesheet">
    <link href="./css/cssFooter.css" rel="stylesheet">
  </head>

  <body class="row">
    <div class="col- container-fluid">
        <header class="row">
            <nav class="navHeader navbar navbar-inverse">
                <div class="col-lg-3 navbar-header logo">
                    <span>Jean FORTEROCHE</span>
                </div>
                <ul class="col-lg-6 nav navbar-nav pull-right">
                    <li class="col-lg-1.5">
                        <a href="./index.php?callPage=home&stateChapter=1&colorButtonNavHome=0">
                            <span class="<?php
                            if ($_GET['callPage'] == "home")
                                { echo 'colorButtonNav';} else { echo '';}?>">Accueil</span>
                        </a>
                    </li>
                    <li class="col-lg-2">
                        <a href="./index.php?callPage=chapterDisplayListChapter&stateChapter=1&colorButtonNavChapter=0">
                            <span class="<?php
                            if (($_GET['callPage'] == "chapterDisplayListChapter") or
                                ($_GET['callPage'] == "chapterDisplayOneChapter"))
                                { echo 'colorButtonNav';} else { echo '';}?>">Chapitres</span>
                        </a>
                    </li>
                    <li class="col-lg-1.5">
                        <a href="./index.php?callPage=about&colorButtonNavAbout=0">
                            <span class="<?php
                            if ($_GET['callPage'] == "about")
                                { echo 'colorButtonNav';} else { echo '';}?>">A propos</span>
                        </a>
                    </li>
                    <li class="col-lg-1.5">
                        <a href="./index.php?callPage=contact&colorButtonNavContact=0">
                            <span class="<?php
                            if ($_GET['callPage'] == "contact")
                                { echo 'colorButtonNav';} else { echo '';}?>">Contact</span>
                        </a>
                    </li>
                    <?php
                    if ((isset($_SESSION['jf']['admin'])) and ($_SESSION['jf']['admin'] == "jeanForteroche"))
                    {
                        ?>
                        <li class="col-lg-1.5">
                            <a href="./index.php?callPage=dashboardDisplayListLineChapter&stateChapter=1&colorButtonNavDashboard=0">
                                <span class="<?php
                                if (($_GET['callPage'] == "dashboardDisplayListLineChapter") or
                                    ($_GET['callPage'] == "dashboardDisplayEditChapter") or
                                    ($_GET['callPage'] == "dashboardDisplayOneChapter") or
                                    ($_GET['callPage'] == "dashboardDisplayListLineComment") or
                                    ($_GET['callPage'] == "dashboardDisplayOneComment") or
                                    ($_GET['callPage'] == "dashboardDisplayListLineMessage") or
                                    ($_GET['callPage'] == "dashboardDisplayOneMessage"))
                                    { echo 'colorButtonNav';} else { echo '';}?>" >Outils</span>
                            </a>
                        </li>
                        <li class="col-lg-3 pull-right">
                            <a href="./index.php?callPage=logoutUser">
                                <span>Déconnexion</span>
                            </a>
                        </li>
                        <?php
                    }
                    else
                    {
                        echo"";
                    }
                    ?>
                </ul>
            </nav>
        </header>
      <section class="row"><br/><br/>
          <?php
          if ( isset($_SESSION['messageFlash']) && !empty($_SESSION['messageFlash']) )
          {
              $msg = new controllerSession();
              $msg = $msg->deleteMessage();
              foreach ($msg as $k => $v): ?>
              <div class="col-lg-11 <?= $k ?>">
                  <em><strong> <?= $v ?> </strong></em>
              </div>
              <?php
              endforeach;
          } ?>
        <div class="col-lg-12">
          <?php echo"$content"; ?>
        </div>
      </section>

      <footer class="row">
        <div class="col-lg-12 footer">
          <div class="col-lg-3 footerShopNetwork">
            <p>Liens shopping</p>
            <a href="#"><img src="./images/wattpad.jpg" class="pictureFooter"></a>
            <a href="#"><img src="./images/kindle.png" class="pictureFooter"></a>
          </div>
          <div class="col-lg-5 footerSocialNetwork">
            <p>Liens réseaux sociaux</p>
            <a href="#"><img src="./images/facebook.png" class="pictureFooter"></a>
            <a href="#"><img src="./images/instagram.png" class="pictureFooter"></a>
            <a href="#"><img src="./images/twitter.png" class="pictureFooter"></a>
            <a href="#"><img src="./images/pinterest.png" class="pictureFooter"></a>
          </div>
          <div class="col-lg-4 footerLink">
            <p>Liens utiles</p>
            <p class="linkFooter"><a href="./index.php?callPage=loginUser">- Administrateur</a></p>
            <p class="linkFooter"><a href="./index.php?callPage=cgu">- Conditions générales d'utilisations et RGPD</a></p>
          </div>
        </div>
      </footer>

    </div>
    <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.7/tinymce.min.js"></script>
  </body>
</html>
