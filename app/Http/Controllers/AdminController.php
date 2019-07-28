<?php

namespace App\Http\Controllers;
use \Illuminate\Http\Request;
use App\Models\QuizModel;
use App\Models\QuestionModel;
use App\Models\TagModel;
use App\Models\AnswerModel;

class AdminController extends Controller {

    public function admin(){
        $quiz = QuizModel::all();
        $tag = TagModel::all();
        $question = QuestionModel::all();
        $viewVars ['quiz'] = $quiz;
        $viewVars ['tag'] = $tag;
        $viewVars ['question'] = $question;
        return $this->show('admin', $viewVars);
    }

    //-----Admin QUIZ-----
    public function adminQuizAdd(){
        return $this->show('admin-update', ['info' => 'add-quiz']);
    }

    public function adminQuizAddPost(Request $request) {
        $newQuiz = new QuizModel();
        $newQuiz->title = $request->input('new-quiz-title');
        $newQuiz->description = $request->input('new-quiz-description');
        $newQuiz->app_users_id = \App\Utils\UserSession::getUser()->id;
        $newQuiz->updated_at = null;
        $newQuiz->save();
        return $this->show('admin-update', ['info' => 'add-quiz', 'add' => 1]);
    }

    public function adminQuizUpdate(){
        $quiz = QuizModel::all();
        return $this->show('admin-update', ['info' => 'update-quiz', 'quizzes' => $quiz]);
    }

    public function adminQuizUpdatePost() {
        return true;
    }

    public function adminQuizDelete(){
        $quiz = QuizModel::all();
        return $this->show('admin-update', ['info' => 'delete-quiz', 'quizzes' => $quiz]);
    }

    public function adminQuizDeletePost(Request $request) {
        $quiz = QuizModel::find($request->input('delete'));
        $quiz->delete();
        $quizzes = QuizModel::all();
        return $this->show('admin-update', ['info' => 'delete-quiz', 'delete' => 1, 'quizzes' => $quizzes]);
    }

    //-----Admin TAG

    public function adminTagAdd(){
        return $this->show('admin-update', ['info' => 'add-tag']);
    }

    public function adminTagAddPost(Request $request) {
        $newTag = new TagModel();
        $newTag->name = $request->input('new-tag-name');
        $newTag->updated_at = null;
        $newTag->save();
        return $this->show('admin-update', ['info' => 'add-tag', 'add' => 1]);
    }

    public function adminTagUpdate(){
        $tag = TagModel::all();
        return $this->show('admin-update', ['info' => 'update-tag', 'tags' => $tag]);
    }

    public function adminTagUpdatePost() {
        return true;
    }

    public function adminTagDelete(){
        $tag = TagModel::all();
        return $this->show('admin-update', ['info' => 'delete-tag', 'tags' => $tag]);
    }

    public function adminTagDeletePost(Request $request) {
        $tag = TagModel::find($request->input('delete'));
        $tag->delete();
        $tags = TagModel::all();
        return $this->show('admin-update', ['info' => 'delete-tag','delete' => 1, 'tags' => $tags]);
    }

    //-----Admin Question-----

    public function adminQuestionAdd(){
        $quiz = QuizModel::all();
        $answer = AnswerModel::all();
        return $this->show('admin-update', ['info' => 'add-question', 'quizzes' => $quiz, 'answers' => $answer]);
    }

    public function adminQuestionAddPost(Request $request) {
        $question = new QuestionModel();
        $question->question = $request->input('new-question');
        $question->anecdote = $request->input('new-question-anecdote');
        $question->wiki = $request->input('new-question-wiki');
        $question->updated_at = null;
        $question->levels_id = $request->input('new-question-level');
        $question->answers_id = $request->input('new-question-answer');
        $question->quizzes_id = $request->input('new-question-quiz');
        $question->save();
        $quiz = QuizModel::all();
        $answer = AnswerModel::all();
        return $this->show('admin-update', ['info' => 'add-question', 'quizzes' => $quiz, 'answers' => $answer, 'add' => 1]);

    }

    public function adminQuestionUpdate(){
        $question = QuestionModel::all();
        return $this->show('admin-update', ['info' => 'update-question', 'questions' => $question]);
    }

    public function adminQuestionUpdatePost() {
        return true;
    }

    public function adminQuestionDelete(){
        $question = QuestionModel::all();
        return $this->show('admin-update', ['info' => 'delete-question', 'questions' => $question]);
    }

    public function adminQuestionDeletePost(Request $request) {
        $question = QuestionModel::find($request->input('delete'));
        $question->delete();
        $questions = QuestionModel::all();
        return $this->show('admin-update', ['info' => 'delete-question', 'delete' => 1, 'questions' => $questions]);
    }

}
