<?php
use \Models\Users;

class LoginController extends BaseController {
    
    public function postLogin()
    {
      $postData = Input::all();
      
      $email = UsersModel::find($postData['email']);
      $password = UsersModel::find($postData['password']);
      
      if (Auth::attempt(array('email' => $email, 'password' => $password), true))
        {
            return Redirect::intended('/');
        }
    }
}

