<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Models\QuizModel;
use App\Models\QuestionModel;

class QuizController extends Controller {

    public function quiz($id){
            //récupérer le quiz demandé
            $quiz = QuizModel::find($id);
            //S'il existe
            if (!empty($quiz)) {
            //récupérer tous les auteurs => avec la relation hasOne dans QuizModel
            //$authors = QuizModel::find($id)->authors()->get();

            //récupérer les questions relatives au quiz => avec la relation hasMany dans QuiModel
            //$questions = QuestionModel::where('quizzes_id', $id)->get();

            //récupérer les niveaux de difficultés => avec la relation belongsTo dans QuestionModel

            //récupérer les réponses aux questions => avec la relation hasMany dans QuestionModel

            //récupérer les sujets relatifs au quiz => grâce à la relation BelongsToMany dans QuizModel
            //$tags = QuizModel::find($id)->tags()->get();//https://laravel.com/docs/5.8/eloquent-relationships

            //retourner la vue avec les infos nécessaires
            return $this->show('quiz', [
            'quiz' => $quiz,
            ]);
            }
            //Sinon, 404
            else {
                // On lance NotFoudnHttpException afin d'afficher la page 404
                abort(404);
            }
        }


    public function quizPost(Request $request){
        //Je récupère les id des réponses données
        $answers = $request->input();
        //Je créer un tableau pour les réponses correctes
        $correctAnswers = [];
        //Je créer un tableau pour les réponses fausses
        $wrongAnswers = [];
        //Je créer un tableau pour le résultat
        $result = [];
        //Pour chaque question, je veux vérifier si la réponse est correcte
        //Donc si elle correspond à l'id de la réponse dans la table questions
        foreach ($answers as $questionId => $answerId) {
            $question = QuestionModel::find($questionId);
            if ($question->answers_id == $answerId) {
                //Ici la réponse est correcte
                $correctAnswers [$questionId] = $answerId;
                $result [$questionId] = $answerId;
            }
            else {
                //Ici la réponse est mauvaise
                $wrongAnswers [$questionId] = $answerId;
                $result [$questionId] = $answerId;
            }
        }
        //Je compte les bonnes et mauvaises réponses
        $corrects = count($correctAnswers);
        $wrongs = count($wrongAnswers);
        $score = $corrects + $wrongs;
        //je veux rappeler la vue quiz, mais je dois d'abord retrouver l'id du quiz
        $id = $question->quizzes_id;
        $quiz = QuizModel::find($id);
        //Je retourne ensuite les bonnes et mauvaises réponses à la vue
        return $this->show('quiz', [
            'quiz' => $quiz,
            'correct' => $correctAnswers,
            'wrong' => $wrongAnswers,
            'result' => $result,
            'score' => $score
        ]);
    }




}
