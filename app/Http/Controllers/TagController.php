<?php

namespace App\Http\Controllers;
use App\Models\TagModel; 

class TagController extends Controller {

    public function tags(){
        $tags = TagModel::all();
        return $this->show('tags', ['tags' => $tags]);
    }

    public function quiz($id){
        $tags = TagModel::find($id);
        if (!empty($tags)) {
            return $this->show('quiz-tag', ['tags' => $tags]);
        }
        //Sinon, 404
        else {
            // On lance NotFoudnHttpException afin d'afficher la page 404
            abort(404);
        }
        
    }
}
