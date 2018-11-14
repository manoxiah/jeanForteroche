
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
            <form action="./index.php?callPage=updateMessage&stateMessage=1&idMessage=<?= $displayOneMessage['id'] ?>" method="post">
                <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Lu</button>
            </form>
            <?php
        }
        else
        {
            ?>
            <form action="./index.php?callPage=replyMessage&stateMessage=2&idMessage=<?= $displayOneMessage['id'] ?>&email==<?= $displayOneMessage['email'] ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required >
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" name="contentReplyMessage" id="message" placeholder="Message" rows="7" required ></textarea>
                </div><br/>
                <button type="submit" id="submit" name="submit" class="btn btn-primary col-lg-1">Répondre</button>
            </form>
            <?php
        }
        ?>

    </div>   

