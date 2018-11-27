
<?php

    $dateFr = date("d/m/Y", strtotime($displayOneMessage['publicationDate']));
?>
    <div class="col-lg-12 sectionMessage">
        <h4><strong><?= $displayOneMessage['email'] ?></strong></h4>
        <div class="comment"><?= $displayOneMessage['contentMessage'] ?></div><br />
        <em class="autor">Envoyé par <strong><?= $displayOneMessage['name'] ?></strong> le <?= $dateFr ?></em><br/><br/><br/>
        <?php
        if ( $_GET['stateMessage'] == 0)
        { ?>
            <form action="./index.php?callPage=updateMessage" method="post">
                <input type="hidden" class="form-control" id="stateMessage" name="stateMessage" value="1" required >
                <input type="hidden" class="form-control" id="idMessage" name="idMessage" value="<?= $displayOneMessage['id'] ?>" required >
                <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Lu</button>
            </form>
            <?php
        }
        else
        {
            ?>
            <div id="boutonEditChapter">
                <button data-toggle="modal" data-backdrop="true" href="#formulaire" class="btn btn-primary col-lg-1">Répondre</button>
            </div>

            <?php
        }
        ?>

    </div>

<div class="modal fade bd-example-modal-lg" id="formulaire">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body">
                <form action="./index.php?callPage=replyMessage" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="idMessage" name="idMessage" value="<?= $displayOneMessage['id'] ?>" required >
                        <input type="hidden" class="form-control" id="email" name="email" value="<?= $displayOneMessage['email'] ?>" required >
                        <input type="hidden" class="form-control" id="stateMessage" name="stateMessage" value="2" required >
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required >
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" name="contentReplyMessage" id="message" placeholder="Message" rows="7" required ></textarea>
                    </div><br/>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right col-lg-2">Répondre</button><br/><br/>
                </form>
            </div>
        </div>
    </div>
</div>

