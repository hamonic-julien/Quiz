<?php
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model {
    
    protected $table = 'questions';

    public function answers() {
        return $this->hasMany('App\Models\AnswerModel', 'questions_id', 'answers_id');
    }

    public function levels() {
        return $this->belongsTo('App\Models\LevelModel', 'levels_id');
    }
}
