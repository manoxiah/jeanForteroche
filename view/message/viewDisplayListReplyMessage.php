

<div class="principalTitleSection"><strong>-- Les réponses --</strong></div>
<div class="col-lg-12">
    <?php

    foreach ($displayListReplyMessage as $donneesDisplayListReplyMessage)
    {
        $dateFr = date("d/m/Y", strtotime($donneesDisplayListReplyMessage['replyDate']));

        ?>
        <div class="col-lg-12 sectionComment">
            <h4><strong><?= $donneesDisplayListReplyMessage['subject'] ?></strong></h4>
            <div class="comment"><?= $donneesDisplayListReplyMessage['contentReplyMessage'] ?></div><br/>
            <em class="autor">Réponse envoyé le <?= $dateFr ?></em>
        </div>
        <?php
    }

    ?>
</div>
