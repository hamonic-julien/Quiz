<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class QuizModel extends Model {

    protected $table = 'quizzes';

    public function questions () {
        return $this->hasMany('App\Models\QuestionModel', 'quizzes_id');
    }
    public function tags() {
        return $this->belongsToMany('App\Models\TagModel', 'quiz_has_tags', 'quizzes_id', 'tags_id');
    }

    public function authors() {
        return $this->belongsTo('App\Models\UserModel', 'app_users_id');
    }
}

