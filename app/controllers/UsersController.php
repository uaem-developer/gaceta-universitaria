<?php

use Gaceta\Entities\User;
use Gaceta\Managers\RegisterManager;
use Gaceta\Repositories\UserRepo;
use Gaceta\Managers\AccountManager;

class UsersController extends BaseController {

    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function signUp()
    {
        return View::make('users/sign-up');
    }

    public function register()
    {
        $user = $this->userRepo->newUser();
        $manager = new RegisterManager($user, Input::all());
        $manager->save();

        return Redirect::route('admin');
    }

    public function remindPassword()
    {
        return View::make('administrator.restablecer');
    }

    public function profile(){
        return View::make('administrator.perfil');
    }


}
