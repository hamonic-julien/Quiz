<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Home
$router->get('/', [
    'as' => 'home',
    'uses' => 'MainController@home'
]);

//Quiz donnés
$router->get('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quiz'
]);

//Traitement quiz soumis
$router->post('/quiz/{id}', [
    'as' => 'quizPost',
    'uses' => 'QuizController@quizPost'
]);

// Inscription
$router->get('/signup', [
    'as' => 'signup',
    'uses' => 'UserController@signup'
]);

$router->post('/signup', [
    'as' => 'signupPost',
    'uses' => 'UserController@signupPost'
]);

// Connexion
$router->get('/signin', [
    'as' => 'signin',
    'uses' => 'UserController@signin'
]);

$router->post('/signin', [
    'as' => 'signinPost',
    'uses' => 'UserController@signinPost'
]);

// Déconnexion
$router->get('/logout', [
    'as' => 'logout',
    'uses' => 'UserController@logout'
]);

//Mon Compte
$router->get('/account', [
    'as' => 'account',
    'uses' => 'UserController@profile'
]);

//Sujets de quiz
$router->get('/tags', [
    'as' => 'tags',
    'uses' => 'TagController@tags'
]);

//Sujet d'un quiz donné
$router->get('/tags/{id}/quiz', [
    'as' => 'tagsQuiz',
    'uses' => 'TagController@quiz'
]);

//Admin
$router->get('/admin', [
    'as' => 'admin',
    'uses' => 'AdminController@admin'
]);


//------------BONUS-------------

//Admin ajout tag
$router->get('/admin/tag-add', [
    'as' => 'adminTagAdd',
    'uses' => 'AdminController@adminTagAdd'
]);
//Admin ajout tag Soumis
$router->post('/admin/tag-add', [
    'as' => 'adminTagAddPost',
    'uses' => 'AdminController@adminTagAddPost'
]);

//Admin modification tag
$router->get('/admin/tag-update', [
    'as' => 'adminTagUpdate',
    'uses' => 'AdminController@adminTagUpdate'
]);
//Admin modification tag Soumis
$router->post('/admin/tag-update', [
    'as' => 'adminTagUpdatePost',
    'uses' => 'AdminController@adminTagUpdatePost'
]);

//Admin suppression tag
$router->get('/admin/tag-delete', [
    'as' => 'adminTagDelete',
    'uses' => 'AdminController@adminTagDelete'
]);
//Admin suppression tag Soumis
$router->post('/admin/tag-delete', [
    'as' => 'adminTagDeletePost',
    'uses' => 'AdminController@adminTagDeletePost'
]);

//Admin ajout quiz
$router->get('/admin/quiz-add', [
    'as' => 'adminQuizAdd',
    'uses' => 'AdminController@adminQuizAdd'
]);
//Admin ajout quiz Soumis
$router->post('/admin/quiz-add', [
    'as' => 'adminQuizAddPost',
    'uses' => 'AdminController@adminQuizAddPost'
]);

//Admin modification quiz
$router->get('/admin/quiz-update', [
    'as' => 'adminQuizUpdate',
    'uses' => 'AdminController@adminQuizUpdate'
]);
//Admin modification quiz Soumis
$router->post('/admin/quiz-update', [
    'as' => 'adminQuizUpdatePost',
    'uses' => 'AdminController@adminQuizUpdatePost'
]);

//Admin supression quiz
$router->get('/admin/quiz-delete', [
    'as' => 'adminQuizDelete',
    'uses' => 'AdminController@adminQuizDelete'
]);
//Admin supression quiz Soumis
$router->post('/admin/quiz-delete', [
    'as' => 'adminQuizDeletePost',
    'uses' => 'AdminController@adminQuizDeletePost'
]);

//Admin ajout questions
$router->get('/admin/question-add', [
    'as' => 'adminQuestionAdd',
    'uses' => 'AdminController@adminQuestionAdd'
]);
//Admin ajout questions Soumis
$router->post('/admin/question-add', [
    'as' => 'adminQuestionAddPost',
    'uses' => 'AdminController@adminQuestionAddPost'
]);

//Admin modification questions
$router->get('/admin/question-update', [
    'as' => 'adminQuestionUpdate',
    'uses' => 'AdminController@adminQuestionUpdate'
]);
//Admin modification questions Soumis
$router->post('/admin/question-update', [
    'as' => 'adminQuestionUpdatePost',
    'uses' => 'AdminController@adminQuestionUpdatePost'
]);

//Admin suppression questions
$router->get('/admin/question-delete', [
    'as' => 'adminQuestionDelete',
    'uses' => 'AdminController@adminQuestionDelete'
]);
//Admin suppression questions Soumis
$router->post('/admin/question-delete', [
    'as' => 'adminQuestionDeletePost',
    'uses' => 'AdminController@adminQuestionDeletePost'
]);
