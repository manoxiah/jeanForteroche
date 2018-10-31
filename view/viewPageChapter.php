<?php
ob_start(); ?>

    <div class="col-lg-12 sectionChapter"><br/><br/><br/>
        <?php
        if ((isset($_GET['action'])) and ($_GET['action'] == 'listSmallChapter')) {
            $titlePage = "Jean vous propose sa liste de chapitres";
            require_once("./view/chapter/viewListSmallChapter.php");
        }
        else if ((isset($_GET['action'])) and ($_GET['action'] == 'fullChapter')) {
            $titlePage = "Jean vous souhaite une bonne lecture de son chapitre";
            require_once("./view/chapter/viewDisplayOneChapter.php");
            require_once('./view/form/viewFormSendComment.php');
            require_once('./controller/controllerComment.php');
            $chemin = "./view/comment/viewListFullComment.php";
            listFullComment($chemin);

        }
        ?>
    </div>
<?php $content = ob_get_clean(); ?>

<?php require_once('./view/templateHTML.php');