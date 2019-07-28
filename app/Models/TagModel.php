<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class TagModel extends Model {
    protected $table = 'tags';

    public function quizzes () {
        return $this->belongsToMany('App\Models\QuizModel', 'quiz_has_tags', 'tags_id', 'quizzes_id');    }
}
