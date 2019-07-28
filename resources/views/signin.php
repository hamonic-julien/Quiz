<?php if(isset($errors)):
        foreach ($errors as $msg): ;?>
    <div class="alert alert-danger mt-4">
        <?= $msg;?>
    </div>
<?php endforeach; endif;?>
<div id="signin" class="col-4 form mx-auto border border-dark rounded p-3">
    <h2 class="text-center">Connexion</h2>
    <form method="POST" action="<?= route('signinPost');?>">
        <label class="mt-3" for="email-in">Adresse email</label>
        <input required class="form-control" type="email" id="email-in" name="email" value="<?= @$formValues['email'];?>" placeholder="votre nom adresse email">
        <label class="mt-3" for="password-in">Mot de passe</label>
        <input required class="form-control" id="password-in" type="password" name="password" value="">
        <button type="submit" class="btn btn-success mt-4">Connexion</button>
    </form>
</div>
<a href="#" class="d-block text-center">Mot de passe oublié?</a>
<div class="col-4 mx-auto text-center mb-4">
    <p>Pas encore inscrit ? Enregistrez-vous: </p>
    <a href="<?= route('signup');?>" class="btn btn-primary pr-4 pl-4">Inscription</a>
</div>
