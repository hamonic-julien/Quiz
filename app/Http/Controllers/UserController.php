<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Models\UserModel;
use App\Utils\UserSession;

class UserController extends Controller {

    public function signup(){
        return $this->show('signup');
    }

    public function signupPost(Request $request){
        $viewVars = [];
        //enregistrer en BDD les infos envoyées par l'utilisateur suivant le modèle UserModel
        if(!empty($request)) {
            //Si le mot de passe ne correspond pas à sa deuxième saisie
            if($request->input('password') != $request->input('password-check')){
                $viewVars['errors'] = ['Erreurs lors de l\'inscription'];
                $viewVars['formValues'] = [
                'email' => $request->input('email'),
                'firstname' =>$request->input('firstname'),
                'lastname' => $request->input('lastname')
            ];//rediriger vers le form avec les infos saisies
            return $this->show('signup', $viewVars);
            }
            $firstName = $request->input('firstname');
            $lastName = $request->input('lastname');
            $password = password_hash($request->input('password'), PASSWORD_DEFAULT);
            $mail = $request->input('email');

            $newUser = new UserModel();
            $newUser->firstname = $firstName;
            $newUser->lastname = $lastName;
            $newUser->password = $password;
            $newUser->email = $mail;
            $newUser->updated_at = null;
            $newUser->save();
            UserSession::connect($newUser);
            return redirect()->route('account', ['add_ok' => 1]);
        }
        else {
            return redirect()->route('signup');
        }
    }

    public function signin(){
        return $this->show('signin');
    }

    public function signinPost(Request $request){
        $viewVars = [];
        if(!empty($request)) {
            //Vérifier et récupérer l'user avec l'email saisi
            $user = UserModel::where('email', $request->input('email'))->first();
            //Si true (existe)
            if ($user) {
                //Vérifier que le password correspond
                $match = password_verify($request->input('password'), $user->password);
                if ($match) {
                    //Sauvegarder l'utilisateur en session
                    UserSession::connect($user);
                    //Rediriger vers la page compte
                    return redirect()->route('account', ['add_ok' => 1]);
                }
                //Sinon rafficher le formulaire avec message d'erreur
                else {
                    $viewVars['errors'] = ['Erreurs lors de l\'authentification'];
                    $viewVars['formValues'] = ['email' => $request->input('email')];
                    return $this->show('signin', $viewVars);
                }
            }
            //Sinon rafficher le formulaire avec message d'erreur
            else {
                $viewVars['errors'] = ['Erreurs lors de l\'authentification'];
                $viewVars['formValues'] = ['email' => $request->input('email')];
                return $this->show('signin', $viewVars);
            }
        }
        //Sinon rediriger vers la page connexion
        else {
            return redirect()->route('signin');
        }
    }

    public function logout(){
        UserSession::disconnect();
        return $this->show('logout');
    }

    public function profile(){
        if(UserSession::isConnected()) {
            return $this->show('account');
        }
        else {
            return redirect()->route('signin');
        }
    }

}
