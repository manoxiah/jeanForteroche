

    </div><div class="principalTitleSection"><strong>-- Les commentaires --</strong></div><br/>
<?php
foreach ($displayListCommentForOneChapterPageChapter as $donneesDisplayListCommentForOneChapter)
    {
    $publicationDateFr = date("d/m/Y", strtotime($donneesDisplayListCommentForOneChapter['publicationDate']));

      if ($donneesDisplayListCommentForOneChapter['stateComment']  == 0)
      { ?>
        <div class="col-lg-12 sectionComment">
            <h4><strong><?= $donneesDisplayListCommentForOneChapter['pseudo'] ?></strong></h4>
            <div class="comment"><?= $donneesDisplayListCommentForOneChapter['contentComment'] ?></div><br/>
            <form action="./index.php?callPage=updateCommentChapterPageChapter" method="post">
                <input type="hidden" class="form-control" name ="stateComment" id="stateComment" value="1">
                <input type="hidden" class="form-control" name ="idChapter" id="idChapter" value="<?= $donneesDisplayListCommentForOneChapter['idChapter'] ?>">
                <input type="hidden" class="form-control" name ="idComment" id="idComment" value="<?= $donneesDisplayListCommentForOneChapter['id'] ?>">
              <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right col-lg-1">Signaler</button>
            </form><br/>
            <em class="autor">Publié le <?= $publicationDateFr ?></em>
        </div>
    <?php
      }
      elseif ($donneesDisplayListCommentForOneChapter['stateComment'] == 1)
        {
        ?>
        <div class="col-lg-12 sectionComment">
            <h4><strong><?= $donneesDisplayListCommentForOneChapter['pseudo'] ?></strong></h4>
            <div class="comment"><?= $donneesDisplayListCommentForOneChapter['contentComment'] ?></div><br/>
            <em class="autor">Publié le <?= $publicationDateFr ?></em>
            <h6 class="col-lg-2 pull-right" >Ce message est en court de vérification suite à un signalement.</h6>
        </div>
    <?php
      }
      elseif ($donneesDisplayListCommentForOneChapter['stateComment'] == 2)
    {
        ?>
        <div class="col-lg-12 sectionComment">
            <h4><strong><?= $donneesDisplayListCommentForOneChapter['pseudo'] ?></strong></h4>
            <div class="comment"><?= $donneesDisplayListCommentForOneChapter['contentComment'] ?></div><br/>
            <em class="autor">Publié le <?= $publicationDateFr ?></em>
            <h6 class="col-lg-2 pull-right" >Ce message à déjà été signalé, mais a été considéré comme valide à la charte du site par notre service administratif.</h6>
        </div>
      <?php
      }
      else { echo""; }
    }

