<?php

namespace App\Http\Controllers;

use App\Models\QuizModel;
use App\Models\AuthorModel;

class MainController extends Controller {

    public function home(){
        $quizzes = QuizModel::all()->sortBy('title');
        $authors = AuthorModel::all();
        $viewVars = ['quizzes' => $quizzes, 'authors' => $authors];
        //$quizzes = QuizModel::join('app_users', 'quizzes.app_users_id', '=', 'app_users.id')
        //->select('quizzes.*', 'app_users.firstname AS author_firstname', 'app_users.lastname AS author_lastname')
        //->get();

        return $this->show('home', $viewVars);
    }
}


