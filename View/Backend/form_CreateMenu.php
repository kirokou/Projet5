<?php $title = 'Ajouter Menu'; ?>

<?php ob_start(); ?>

<div>
    <h1> Ajouter Un MENU</h1>

    <p> <a href="index.php?action=code4lioko"> RETOUR à ADMINISTRATION </a></p>

    <form  action="index.php?action=menu&&order=createMenu" method="POST" id="form_CreateCompetence">

        <p>
            <label for="title"> Titre </label>
            <input type="text" id="title" name="title">
        </p>

        <p>
            <input type="submit" value="Ajouter un menu">
        </p>
    </form>

</div>
<?php $content = ob_get_clean(); ?>

<?php require('../Projet5/View/FrontEnd/template.php'); ?>
