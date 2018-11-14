<?php
ob_start(); ?>

    <div class="col-lg-12 sectionChapter"><br/><br/><br/>
        <?php
        $titlePage = "Jean vous souhaite une bonne lecture de son chapitre";
        require_once("./view/chapter/viewDisplayOneChapter.php");
        require_once('./view/form/viewFormSendComment.php');
        require_once('./view/comment/viewDisplayListCommentForOneChapter.php');
        ?>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require_once('./view/template/viewTemplateHtml.php');