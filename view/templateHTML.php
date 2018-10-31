<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title><?php echo "$titlePage"; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/Projet_3/images/livre.jpg"/>
    <link href="/Projet_3/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="/Projet_3/css/cssBody.css" rel="stylesheet">
    <link href="/Projet_3/css/cssHeader.css" rel="stylesheet">
    <link href="/Projet_3/css/cssMiddlePage.css" rel="stylesheet">
    <link href="/Projet_3/css/cssFooter.css" rel="stylesheet">
  </head><br/>

  <body class="row">
    <div class="col-lg-12 container-fluid">
      <header class="row">
        <div>
          <nav class="navHeader navbar navbar-inverse">
            <div class="col-lg-3 navbar-header logo">
              <span>Jean FORTEROCHE</span>
            </div>
            <ul class="col-lg-6 nav navbar-nav pull-right">
              <li class="col-lg-2"><a href="./index.php?callPage=home"><span class="buttonNavColor">Accueil</span></a></li>
              <li class="col-lg-3"> <a href="./index.php?callPage=chapterListSmallChapter">Les chapitres</a></li>
              <li class="col-lg-2"> <a href="./index.php?callPage=about">A propos</a></li>
              <li class="col-lg-2"> <a href="./index.php?callPage=contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>

      <section class="row"><br/><br/>
        <div class="col-lg-12 bodyPage">
          <?php echo"$content"; ?>
        </div>
      </section>

      <footer class="row">
        <div class="col-lg-12 footer">
          <div class="col-lg-3 footerShopNetwork">
            <p>Liens shopping</p>
            <a href="#"><img src="/Projet_3/images/wattpad.jpg" class="pictureFooter"></a>
            <a href="#"><img src="/Projet_3/images/kindle.png" class="pictureFooter"></a>
          </div>
          <div class="col-lg-5 footerSocialNetwork">
            <p>Liens réseaux sociaux</p>
            <a href="#"><img src="/Projet_3/images/facebook.png" class="pictureFooter"></a>
            <a href="#"><img src="/Projet_3/images/instagram.png" class="pictureFooter"></a>
            <a href="#"><img src="/Projet_3/images/twitter.png" class="pictureFooter"></a>
            <a href="#"><img src="/Projet_3/images/pinterest.png" class="pictureFooter"></a>
          </div>
          <div class="col-lg-4 footerLink">
            <p>Liens utiles</p>
            <p class="linkFooter"><a href="/Projet_3/index.php?callPage=login">- Administrateur</a></p>
            <p class="linkFooter"><a href="/Projet_3/index.php?callPage=cgu">- Conditions générales d'utilisations et RGPD</a></p>
          </div>
        </div>
      </footer>

    </div>
  </body>
</html>
