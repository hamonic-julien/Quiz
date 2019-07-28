<h2>Bonjour <?=\App\Utils\UserSession::getUser()->firstname . ' '. \App\Utils\UserSession::getUser()->lastname;?></h2>

<p>Comment vas tu ?!</p>

<h4>Membre <span class="font-italic">#<?=\App\Utils\UserSession::getUser()->id;?></span></h4>

<p>Votre mot de passe: <span class="font-weight-bold"><i class="fas fa-ellipsis-h"></i><i class="fas fa-ellipsis-h"></i></span><a href="#" class="btn btn-success ml-2">Modifier votre mot de passe</a></p>

<p>Votre e-mail: <span class="font-weight-bold"><?=\App\Utils\UserSession::getUser()->email;?></span> <a href="#" class="btn btn-success ml-2">Modifier votre e-mail</a></p>

<p>Votre date de création de profil: <span class="font-weight-bold"><?=\App\Utils\UserSession::getUser()->created_at;?></span></p>

<?php if(\App\Utils\UserSession::getUser()->updated_at): ;?>
    <p>Votre dernière mise à jour de profil: <span class="font-weight-bold"><?=\App\Utils\UserSession::getUser()->updated_at;?></span></p>
<?php endif;?>


