<?php if(isset($errors)):
    foreach ($errors as $msg): ;?>
        <div class="mt-4 alert alert-danger">
            <?= $msg;?>
        </div>
<?php endforeach; endif;?>
<div id="signup" class="form col-4 mx-auto border border-dark rounded p-3">
    <h2 class="text-center">Inscription</h2>
    <form method="POST" action="<?= route('signupPost');?>">
        <div class="form-group mt-3">
            <label for="lastname">Nom</label>
            <input required type="text" class="form-control" id="lastname" name="lastname" value="<?= @$formValues['lastname'];?>" placeholder="Nom">
        </div>
        <div class="form-group mt-3">
            <label for="firstname">Prénom</label>
            <input required type="text" class="form-control" id="firstname" name="firstname" value="<?= @$formValues['firstname'];?>" placeholder="Prénom">
        </div>
        <div class="form-group mt-3">
            <label for="email-up">Email</label>
            <input required type="email" class="form-control" id="email-up" name="email" value="<?= @$formValues['email'];?>" placeholder="Email">
        </div>
        <div class="form-group mt-3">
            <label for="password-up">Mot de passe</label>
            <input required type="password" class="form-control" id="password-up" name="password" value="" placeholder="Mot de passe">
        </div>
        <div class="form-group mt-3">
            <label for="password-check">Vérification mot de passe</label>
            <input required type="password" class="form-control" id="password-check" name="password-check" value="" placeholder="Mot de passe">
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>
<div class="col-4 mx-auto text-center mb-4">
    <p>Déjà inscrit ? Connectez-vous: </p>
    <a href="<?= route('signin');?>" class="btn btn-success pr-3 pl-3">Connexion</a>
</div>
