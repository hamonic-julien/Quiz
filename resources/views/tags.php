<h2>Tous les sujets</h2>
<div class="row justify-content-around mx-auto">
    <?php foreach($tags as $tag): ;?>
        <a href="<?= route('tagsQuiz', ['id' => $tag->id]);?>" class="col-3 m-3 btn btn-lg btn-info"><?= $tag->name;?></a>
    <?php endforeach;?>
</div>