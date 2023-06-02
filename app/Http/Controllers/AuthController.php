<?php

namespace App\Http\Controllers;


use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToGithub () {
        return Socialite::driver("github")->redirect();
    }

    public function authGitHub () {
        $github_user = Socialite::driver("github")->user();
        $github_user_token = $github_user->token;

        return redirect("/pessoas?code=".$github_user_token);
    }
}
