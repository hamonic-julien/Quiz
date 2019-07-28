<?php

namespace App\Utils;

abstract class UserSession {

    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    /**
     * Méthode permettant de connecter un utilisateur
     *
     * @param \App\Models\User $user
     */
    public static function connect(\App\Models\UserModel $user) {
        $_SESSION [self::SESSION_INDEX_NAME] = $user;
    }

    /**
     * Méthode permettant de déconnecter un utilisateur
     */
    public static function disconnect() {
        if(self::isConnected()) {
            unset($_SESSION[self::SESSION_INDEX_NAME]);
        }
    }

    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     *
     * @return bool
     */
    public static function isConnected() : bool {
        return !empty($_SESSION[self::SESSION_INDEX_NAME]); //renvoi true si présence de 'connectedUser' dans $_SESSION, sinon false
    }

    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     *
     * @return \App\Models\User
     */
    public static function getUser() {
        if(self::isConnected()) {
            return $_SESSION[self::SESSION_INDEX_NAME];
        }
        else {
            return false;
        }
    }

    /**
     * Méthode permettant de savoir si l'utilisateur connecté est admin
     *
     * @return bool
     */
    public static function isAdmin() : bool {
        if(self::isConnected()) {
            return self::getUser()->role == 'admin'; //Si admin => true; sinon false
            //return true;
        }
        else {
            return false;
        }

    }
}
