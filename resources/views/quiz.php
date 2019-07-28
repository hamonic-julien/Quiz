<div>
    <h2> <?= $quiz->title ;?> | <span><?= $quiz->questions->count();?> questions</span></h2>
</div>

<div>
    <h4><?= $quiz->description ;?></h4>
</div>

<div class="row">
    <?php foreach ($quiz->tags as $tag): ;?>
    <div class="col-2 mt-2 ml-3 btn btn-outline-secondary font-weight-bold"><?= $tag->name;?></div>
    <?php endforeach;?>
</div>

<?php if(!\App\Utils\UserSession::isConnected()): ;?>
    <div>
        <h4 class="p-2 mt-4 text-center alert alert-danger" role="alert">Veuillez vous <a class="alert-link" href="<?= route('signin');?>">connecter</a> pour répondre au quiz </h4>
    </div>
<?php endif;?>

<div>
    <p class="text-right mb-4 font-italic">by <?= $quiz->authors->firstname . ' ' . $quiz->authors->lastname?></p>
</div>

<?php if(isset($score)): ;?>
    <p class="alert alert-<?= count($correct) > count($wrong) ? 'success' : 'danger';?>" role="alert">Score : <?= count($correct).'/'.$score ;?>
<?php endif ;?>



<form action="<?= route('quizPost');?>" method="post">
    <div class="row justify-content-around">
        <?php foreach ($quiz->questions as $question): ?>
            <div class="col-3 question <?php
                    if($question->levels->name == 'Débutant') {echo 'question-beginner';}
                    elseif($question->levels->name == 'Confirmé') {echo 'question-medium';}
                    else {echo 'question-expert';} ?>">
                <span class="level <?php
                    if($question->levels->name == 'Débutant') {echo 'level--beginner';}
                    elseif($question->levels->name == 'Confirmé') {echo 'level--medium';}
                    else {echo 'level--expert';} ?>">
                <?= $question->levels->name;?>
                </span>
                <div class="question__question">
                    <?= $question->question ;?>
                </div>
                <div class="question__choices">
                    <!-- $question->answers pour utiliser la relation définie entre Question & Answer grace a hasMany() -->
                <?php foreach ($question->answers->sortBy('description') as $answer): ?>
                    <?php if(\App\Utils\UserSession::isConnected()): ;?>
                        <div class="response <?php
                        if(isset($result)) {
                            if($question->answers_id == $answer->id){
                                if($question->answers_id == $result[$question->id]) {
                                    echo 'correct';
                                }
                            }
                            elseif($answer->id == $result[$question->id]){
                                echo 'wrong';
                            }
                        }  ;?>">
                            <label for="answer#<?=$answer->id?>">
                            <input required type="radio" name="<?=$question->id?>" id="answer#<?=$answer->id?>" value="<?=$answer->id?>" <?= isset($result) ? 'disabled' : '';?> >
                            <?= $answer->description;?>
                            </label>
                        </div>
                    <?php endif;?>
                <?php endforeach;?>

                </div>
            </div>
        <?php endforeach;?>
    </div>
    <?php if(\App\Utils\UserSession::isConnected()): ;?>
        <div>
            <input class="btn btn-success btn-block font-weight-bold <?= isset($score) ? 'd-none' : '' ;?>" type="submit" value="Validez votre Quiz" />
        </div>
    <?php endif;?>

</form>

