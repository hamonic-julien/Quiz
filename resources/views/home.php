<div>
    <h2> Bienvenue sur O'Quiz </h2>
    <p>

    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

    </p>
</div>


<div class="row justify-content-around">
    <?php foreach($quizzes as $quiz): ?>
    <div class="col-3 justify-content-around m-3 quiz">
        <a href="<?= route('quiz', ['id' => $quiz->id]);?>"><h3><?= $quiz->title ;?></h3></a>
        <h5><?= $quiz->description ;?></h5>
        <p class="font-italic text-right"><?= $authors->firstWhere('id', $quiz->app_users_id)->firstname . ' ' . $authors->firstWhere('id', $quiz->app_users_id)->lastname;//$quiz->author_firstname.' '.$quiz->author_lastname;?></p>
    </div>
    <?php endforeach; ?>
</div>
