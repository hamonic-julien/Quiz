<h2>Liste des quiz pour le sujet <span class="text-uppercase"><?= $tags->name;?></span> :</h2>
<div class="row justify-content-around mx-auto">
    <?php foreach($tags->quizzes as $quiz): ;?>
        <div class="col-3 justify-content-around m-3 quiz">
            <a href="<?= route('quiz', ['id' => $quiz->id]);?>"><h3><?=$quiz->title;?></h3></a>
            <h5><?=$quiz->description?></h5>
            <p class="font-italic text-right">by <?= $quiz->authors->firstname.' '.$quiz->authors->lasname;?></p>
        </div>
    <?php endforeach ;?>
</div>
<div class="text-center mt-5">
    <a href="<?= route('tags')?>" class="text-center btn btn-primary">Retour à la liste des sujets</a>
</div>
