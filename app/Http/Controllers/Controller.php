<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function show($tplName, $viewVars=[]) {
        // Notre méthode show concatène header, content et footer
        $header = view('layout.header', $viewVars);
        $content = view($tplName, $viewVars);
        $footer = view('layout.footer', $viewVars);

        return $header.$content.$footer;
    }

}
