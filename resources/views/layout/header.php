<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
        <!-- Reset CSS -->
        <link href="<?= url('./css/reset.css');?>" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Really beautiful CSS -->
        <link href="<?= url('./css/style.css');?>"  rel="stylesheet">

        <title>O'Quiz</title>
    </head>

    <body>
        <main class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?= route('home');?>" class="nav-link">
                        <h1>O'Quiz</h1>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-3">
                    <?php if(\App\Utils\UserSession::isAdmin()): ;?>
                        <li class="nav-item">
                            <a href="<?= route('admin');?>" class="nav-link">
                                <i class="fas fa-user-cog"></i>
                                Admin
                            </a>
                        </li>
                    <?php endif;?>
                    <li class="nav-item">
                        <a href="<?= route('home');?>" class="nav-link">
                            <i class="fas fa-home"></i>
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= route('tags');?>" class="nav-link">
                        <i class="fas fa-tags"></i>
                            Sujets de quiz
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= route('account');?>" class="nav-link">
                            <i class="fas fa-user"></i>
                            Mon compte
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= route('logout');?>" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            Déconnexion
                        </a>
                    </li>
                </ul>
                </div>
            </nav>
