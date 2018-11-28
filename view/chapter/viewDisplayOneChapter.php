
    <?php

    $dateFr = date("d/m/Y", strtotime($displayOneChapterPageChapter['publicationDate']));
    ?>
        <div class="chapterViewFullChapter">
        <div class="principalTitleSection"><strong>-- <?= $displayOneChapterPageChapter['numberChapter'] ?> --</strong></div>
        <h4><em><strong><?=  $displayOneChapterPageChapter['titleChapter'] ?></strong></em></h4><br/><br/>
        <div class="contentChapter"><?=  $displayOneChapterPageChapter['chapter'] ?></div><br/><br/>
        <em class="autor">Publié par Jean Forteroche le <?=  $dateFr ?></em>
        </div>
    <?php
    if ((isset($_GET['callPage'])) and ($_GET['callPage'] == 'dashboardDisplayOneChapter'))
    {
        if ((isset($_GET['stateChapter'])) and ($_GET['stateChapter'] == 0 ) or ($_GET['stateChapter'] == 2 ))
        {
            ?>
            <form action="./index.php?callPage=updateStateChapterPageDashboard" method="post">
                <input type="hidden" class="form-control" name ="stateChapter" id="stateChapter" value="1">
                <input type="hidden" class="form-control" name ="idChapter" id="idChapter" value="<?= $displayOneChapterPageChapter['id'] ?>">
                <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Publier</button>
            </form>
            <?php
        }
        else { echo"";}
        if ((isset($_GET['stateChapter'])) and ($_GET['stateChapter'] == 0 ) or ($_GET['stateChapter'] == 1 ) or ($_GET['stateChapter'] == 2 ))
        {
        ?>
            <div id="boutonEditChapter">
                <button data-toggle="modal" data-backdrop="true" href="#formulaire" class="btn btn-primary col-lg-1">Modifier</button>
            </div>

        <?php
        }
        else { echo"";}
        if ((isset($_GET['stateChapter'])) and ($_GET['stateChapter'] == 0 ) or ($_GET['stateChapter'] == 1 ))
        {
        ?>
            <form action="./index.php?callPage=updateStateChapterPageDashboard" method="post">
                <input type="hidden" class="form-control" name ="stateChapter" id="stateChapter" value="2">
                <input type="hidden" class="form-control" name ="idChapter" id="idChapter" value="<?= $displayOneChapterPageChapter['id'] ?>">
                <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Archiver</button>
            </form>
        <?php
        }
        else { echo"";}
        if ((isset($_GET['stateChapter'])) and ($_GET['stateChapter'] == 0 ) or ($_GET['stateChapter'] == 1 ) or ($_GET['stateChapter'] == 2 ))
        {
            ?>
            <form action="./index.php?callPage=deleteChapterPageDashboard" method="post">
                <input type="hidden" class="form-control" name ="idChapter" id="idChapter" value="<?= $displayOneChapterPageChapter['id'] ?>">
                <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right col-lg-1">Supprimer</button>
            </form>
            <?php
        }
        else { echo"";}
?>

    <div class="modal fade bd-example-modal-lg" id="formulaire">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <div class="principalTitleSection"><strong>-- <?= $displayOneChapterPageChapter['numberChapter'] ?> --</strong></div>
                </div>
                <div class="modal-body">
                    <form action="./index.php?callPage=updateChapterPageDashboard" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name ="stateChapter" id="stateChapter" value="0">
                            <input type="hidden" class="form-control" name ="idChapter" id="idChapter" value="<?= $displayOneChapterPageChapter['id'] ?>">
                            <label for="titleChapter">Titre du chapitre</label>
                            <input type="text" class="form-control" name ="titleChapter" id="titleChapter" value="<?=  $displayOneChapterPageChapter['titleChapter'] ?>">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="textarea" name="contentChapter" id="textareaEditChapter">
                                <?=  $displayOneChapterPageChapter['chapter'] ?>
                            </textarea>
                            <h6>Remplissez tous les champs</h6>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right col-lg-2">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <?php
    }

