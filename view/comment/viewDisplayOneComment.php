<?php

    $dateFr = date("d/m/Y", strtotime($displayOneComment['publicationDate']));
?>
    <div class="col-lg-12 sectionComment"><h4><strong><?= $displayOneComment['pseudo'] ?></strong></h4>
      <div class="comment"><?= $displayOneComment['contentComment'] ?></div><br/>
      <em class="autor">Publié le <?= $dateFr ?></em><br/><br/>
<?php
      if (( $_GET['stateComment'] == 0) or ( $_GET['stateComment'] == 1) or ( $_GET['stateComment'] == 3))
      { ?>
          <form action="./index.php?callPage=updateCommentChapterPageDashboard&stateComment=2&idComment=<?= $displayOneComment['id'] ?>" method="post">
          <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Valider</button>
          </form>
<?php
      }
      else { echo""; }

    if (( $_GET['stateComment'] == 0) or ( $_GET['stateComment'] == 1) or ( $_GET['stateComment'] == 2))
    { ?>
        <form action="./index.php?callPage=updateCommentChapterPageDashboard&stateComment=3&idComment=<?= $displayOneComment['id'] ?>" method="post">
        <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Bloquer</button>
        </form>
<?php
    }
      else { echo ""; }
?>
    </div>