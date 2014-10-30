<?php
use \Models\Users;

class RegisterController extends BaseController {
    
    public function register()
    {
       $postData = Input::all();
       
       $newUser = new UserModel();
       $newUser->email = $postData['email'];
       $newUser->password = $postData['password'];
       
       $newUser->save();
    }
}

