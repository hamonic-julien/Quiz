<h2>Bonjour Mr <?=\App\Utils\UserSession::getUser()->firstname . ' '. \App\Utils\UserSession::getUser()->lastname;?>, Admin tout puissant !</h2>

<p>Comment allez-vous ?!</p>

<div class="col-10 mx-auto border rounded">
    <h4 class="font-weight-bold"><u>Vos actions:</u></h4>
    <div class="row justify-content-between">
        <div class="border rounded m-2">
            <p class="text-center font-weight-bold">Sur les quiz</p>
            <a href="<?= route('adminQuizAdd', ['admin' => 'add']);?>" class="btn btn-primary ml-1">Ajouter</a>
            <a href="<?= route('adminQuizUpdate');?>" class="btn btn-warning">Modifier</a>
            <a href="<?= route('adminQuizDelete');?>" class="btn btn-danger mr-1">Supprimer</a>
        </div>

        <div class="border rounded m-2">
            <p class="text-center font-weight-bold">Sur les sujets</p>
            <a href="<?= route('adminTagAdd');?>" class="btn btn-primary ml-1">Ajouter</a>
            <a href="<?= route('adminTagUpdate');?>" class="btn btn-warning">Modifier</a>
            <a href="<?= route('adminTagDelete');?>" class="btn btn-danger mr-1">Supprimer</a>
        </div>

        <div class="border rounded m-2">
            <p class="text-center font-weight-bold">Sur les questions</p>
            <a href="<?= route('adminQuestionAdd');?>" class="btn btn-primary ml-1">Ajouter</a>
            <a href="<?= route('adminQuestionUpdate');?>" class="btn btn-warning">Modifier</a>
            <a href="<?= route('adminQuestionDelete');?>" class="btn btn-danger mr-1">Supprimer</a>
        </div>


</div>







