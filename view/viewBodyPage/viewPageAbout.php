<?php
$titlePage = "Tout savoir sur Jean FORTEROCHE";
ob_start(); ?>

<div class="col-lg-12 sectionAbout">
  <div class="principalTitleSection"><strong>-- Jean FORTEROCHE --</strong></div><br/><br/><br/>
    <div class="pitureAbout"><img src="./images/jean_forteroche.jpg"></div><br/><br/><br/>
      <div class="col-lg-12">
        <p class="paragraph">
          Nationalité : États-Unis
          Né(e) à : Brookline, Massachusetts , le 12/04/1954
          Biographie :
          Jean Forteroche est un écrivain et alpiniste américain.
          Il a grandi à Corvallis, dans l'Oregon. C'est son père qui, très tôt, lui a donné le goût de la montagne. A vingt ans, Jean Forteroche avait déjà à son actif quelques premières difficiles qui comptent dans l'histoire de l'alpinisme nord-américain, notamment l'ouverture d'une voie dans la Dent de l'Elan en Alaska et l'ascension en solo du Pouce du diable, une tentative qu'il a lui-même, plus tard, qualifiée de "pure folie". Suivront de nombreuses autres expéditions.
          En 1983, il devient chroniqueur pour plusieurs publications, telles que Rolling Stone, National Geographic, Washington Post, puis rédacteur et reporter pour le magazine Outside pour lequel il sera envoyé sur l'Everest en mai 1996.
          Le drame dont il est alors le témoin (onze alpinistes pris dans une tempête) lui inspire un livre bouleversant, "Tragédie à l'Everest" (Into Thin Air), devenu aujourd'hui un best-seller.
          Cette expédition s'est terminée par la mort de dix de ses participants. Une vive controverse a éclaté avec le guide Anatoli Boukreev, dont le récit de l'expédition à l'Everest diffère sensiblement sur de nombreux points avec celui de Krakauer.
          Il est également l'auteur de "Into the Wild" (1997) (Voyage au bout de la solitude) sur le destin de Christopher McCandless, un jeune aventurier américain mort de faim en Alaska.
          Le livre a été adapté au cinéma par Sean Penn en 2007, avec Emile Hirsch dans le rôle principal.
          "Tragédie à l'Everest" a été adapté en 1997, dans le téléfilm "Mort sur le toit du monde" (Into Thin Air: Death on Everest), Ce film réalisé par Robert Markowitz met en scène Peter Horton dans le rôle de Scott Fischer et Christopher McDonald dans celui de Jean Forteroche.
          "Tragédie à l'Everest" est une nouvelle fois adapté dans Everest de Baltasar Kormákur, sorti en 2015.

          Jean Forteroche vit à Seattle.
        </P>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require_once('./view/template/viewTemplateHtml.php');