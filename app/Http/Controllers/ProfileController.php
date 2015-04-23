<?php namespace l5\Http\Controllers;


use l5\User;

class ProfileController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index()
    {
        return view('profile');
    }

    public function Edit()
    {
        return view('edit')->with(User::all());
    }

    public function Save()
    {

    }
} 