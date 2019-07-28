<!--Message pour l'ajout réalisé-->
<?php if (isset($add)): ;?>
<p class="alert alert-success">L'ajout à correctement été effectué</p>
<?php endif;?>

<?php if (isset($update)): ;?>
<p class="alert alert-success">Mise à jour correctement effectué</p>
<?php endif;?>

<?php if (isset($delete)): ;?>
<p class="alert alert-success">La suppression à correctement été effectué</p>
<?php endif;?>


<!--Traitement pour les QUIZ-->

<?php if($info == 'add-quiz'): ;?>
    <form method="post" action="<?= route('adminQuizAddPost');?>" id="quiz-add">
        <label for="new-quiz-title">Titre du nouveau quiz</label>
        <input required type="text" name="new-quiz-title" id="new-quiz-title">
        <label for="new-quiz-description">Description</label>
        <input required type="text" name="new-quiz-description" id="new-quiz-description">
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
<?php endif ;?>

<?php if($info == 'delete-quiz'): ;?>
    <form method="post" action="<?= route('adminQuizDeletePost');?>" id="quiz-delete">
        <select form="quiz-delete" name="delete">
            <option disabled selected value="">Choisir un quiz à supprimer</option>
            <?php foreach($quizzes as $quiz): ;?>
                <option value="<?=$quiz->id;?>"><?=$quiz->title;?></option>
            <?php endforeach ;?>
        </select>
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
<?php endif ;?>

<?php if($info == 'update-quiz'): ;?>
    <form method="post" action="<?= route('adminQuizUpdatePost');?>" id="quiz-update">
        <select form="quiz-update">
            <option disabled value="">Choisir un quiz à modifier</option>
            <?php foreach($quizzes as $quiz): ;?>
                <option value="<?=$quiz->id;?>"><?=$quiz->title;?></option>
            <?php endforeach ;?>
        </select>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
<?php endif ;?>


<!--Traitement pour les QUESTIONS-->
<?php if($info == 'add-question'): ;?>
    <form method="post" action="<?= route('adminQuestionAddPost');?>" id="question-add">
        <div class="row justify-content-around mb-3">
            <label for="new-question">Nouvelle question</label>
            <input type="text" name="new-question" id="new-question">
            <label for="new-question-anecdote">Son anecdote</label>
            <input type="text" name="new-question-anecdote" id="new-question-anecdote">
            <label for="new-question-wiki">Son wiki</label>
            <input type="text" name="new-question-wiki" id="new-question-wiki">
        </div>
        <div class="row justify-content-around mb-3">
            <label for="new-question-level">Son niveau de difficulté</label>
            <select name="new-question-level" id="new-question-level" form="question-add">
                <option value="1">Débutant</option>
                <option value="2">Confirmé</option>
                <option value="3">Expert</option>
            </select>
            <label for="new-question-answer">Sa bonne réponse</label>
            <select name="new-question-answer" id="new-question-answer" form="question-add">
                <?php foreach ($answers as $answer): ;?>
                    <option value="<?=$answer->id;?>"><?=$answer->description;?></option>
                <?php endforeach;?>
            </select>
            <label for="new-question-quiz">Son quiz</label>
            <select name="new-question-quiz" id="new-question-quiz" form="question-add">
                <?php foreach ($quizzes as $quiz): ;?>
                    <option value="<?=$quiz->id;?>"><?=$quiz->title;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <button type="submit" class="btn btn-block btn-success">Ajouter</button>
    </form>
<?php endif ;?>

<?php if($info == 'delete-question'): ;?>
    <form method="post" action="<?= route('adminQuestionDeletePost');?>" id="question-delete">
        <select form="question-delete" name="delete">
            <option disabled value="">Choisir une question à supprimer</option>
            <?php foreach($questions as $question): ;?>
                <option value="<?=$question->id;?>"><?=$question->question;?></option>
            <?php endforeach ;?>
        </select>
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
<?php endif ;?>

<?php if($info == 'update-question'): ;?>
    <form method="post" action="<?= route('adminQuestionUpdatePost');?>" id="question-update">
        <select form="question-update">
            <option disabled value="">Choisir une question à modifier</option>
            <?php foreach($questions as $question): ;?>
                <option value="<?=$question->id;?>"><?=$question->question;?></option>
            <?php endforeach ;?>
        </select>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
<?php endif ;?>



<!--Traitement pour les TAGS-->
<?php if($info == 'add-tag'): ;?>
    <form method="post" action="<?= route('adminTagAddPost');?>" id="tag-add">
        <label for="new-tag-name">Nouveau sujet</label>
        <input type="text" name="new-tag-name" id="new-tag-name">
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
<?php endif ;?>

<?php if($info == 'delete-tag'): ;?>
    <form method="post" action="<?= route('adminTagDeletePost');?>" id="tag-delete">
        <select form="tag-delete" name="delete">
            <option disabled value="">Choisir un sujet à supprimer</option>
            <?php foreach($tags as $tag): ;?>
                <option value="<?=$tag->id;?>"><?=$tag->name;?></option>
            <?php endforeach ;?>
        </select>
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
<?php endif ;?>

<?php if($info == 'update-tag'): ;?>
    <form method="post" action="<?= route('adminTagUpdatePost');?>" id="tag-update">
        <select form="tag-update">
            <option disabled value="">Choisir un sujet à modifier</option>
            <?php foreach($tags as $tag): ;?>
                <option value="<?=$tag->id;?>"><?=$tag->name;?></option>
            <?php endforeach ;?>
        </select>
        <button type="submit" class="btn btn-warning">Modifier</button>
    </form>
<?php endif ;?>
