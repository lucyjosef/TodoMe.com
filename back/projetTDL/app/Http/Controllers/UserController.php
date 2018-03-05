<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {
    public function index() {
        $users = User::all();
        return response()->json($users);
    }

    public function getUser($id) {
        $users = User::find($id);
        return response()->json($users);
    }

    public function saveUser($username, $email , $password) {
        $newUser = User::createUser($username, $email, $password);
        return response()->json($newUser);
    }

    public function deleteUser($username) {
        $deletedUser = User::deleteUser($username);

        return response()->json($deletedUser);
    }
    
    public function updateUser($username, $password, $newPassword, $newUsername, $newEmail) {
        $users = User::updateUser($username, $password, $newPassword, $newUsername, $newEmail);
        
        return response()->json($users);
    }

    // Get user id
    public function GetUserID($userToken){
      return response()->json(User::GetUserID($userToken));
    }

}